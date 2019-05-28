<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 20/05/19
 * Time: 15:40
 */

namespace Modules\Webservice\Http\Controllers\Soap;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Modules\Webservice\Http\Controllers\Upload\TicketsController;

/**
 * @group Tickets
 *
 * Serviços para informações de vendas
 */
class SoapServerController extends Controller {

    public function generateUri() {
        $uri = 'http://localhost:99';
        return $uri;
    }

    public function autoDiscover() {
        $autoDiscover = new \Zend\Soap\AutoDiscover();
        $autoDiscover->setUri($this->generateUri()."/server");
        $autoDiscover->setServiceName('SONSOAP');
        $autoDiscover->setClass(TicketsController::class);
        $autoDiscover->handle();
    }

    public function mountServer() {
        $server = new \Zend\Soap\Server($this->generateUri()."/emp-soap.wsdl", [
            'cache_wsdl' => WSDL_CACHE_NONE
        ]);
        $server->setUri($this->generateUri()."/server");
        return $server
            ->setReturnResponse(true)
            ->setClass(TicketsController::class)
            ->handle();
    }
}