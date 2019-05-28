<?php

//Route::group(['middleware' => 'auth:api', 'prefix' => 'empws', 'namespace' => 'Modules\Webservice\Http\Controllers'], function()
Route::group(
    [
        'middleware' => 'api',
        'prefix' => 'empws',
        'namespace' => 'Modules\Webservice\Http\Controllers',
        'name' => 'emporium-ws'
    ], function()
{
    Route::group(['prefix' => 'ticket', 'name' => 'Tickets'], function()
    {
        Route::post('/date', 'Upload\TicketsController@getTicketStoreDate')->name('getTicketDate');

    });

});


//Rota do nosso SOAP Server - direcionando para o controlador de acoes
Route::get('emp-soap.wsdl', 'Modules\Webservice\Http\Controllers\Soap\SoapServerController@autoDiscover');
Route::post('server', 'Modules\Webservice\Http\Controllers\Soap\SoapServerController@mountServer');

//Exemplo de execução de cliente
$uri = 'http://localhost:99';
Route::post('emp-test', function () use($uri) {
    $client = new \Zend\Soap\Client("$uri/emp-soap.wsdl", [
        'cache_wsdl' => WSDL_CACHE_NONE
    ]);
    print_r($client->somaNova(2,522));
});

Route::get('emp-test-ticket', function () use($uri) {
    $client = new \Zend\Soap\Client("$uri/emp-soap.wsdl", [
        'cache_wsdl' => WSDL_CACHE_NONE
    ]);
    print_r($client->getTicket([
        'store' => '123',
        'date' => '123',
        'cashier' => '123',
        'ticket' => '123'
    ]));
});