<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 20/05/19
 * Time: 15:40
 */

namespace Modules\Webservice\Http\Controllers\Upload;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Modules\Webservice\Soap\Types\TicketType;

/**
 * @group Tickets
 *
 * Serviços para informações de vendas
 */
class TicketsController extends Controller {

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(){
        return [ 'adsda' => 'adadad' ];
    }

    /**
     * Busca de cupons por loja e data
     *
     * @bodyParam empresa string required Nome da empresa
     * @bodyParam dataMovimento date required Data fiscal
     * @bodyParam loja int required Loja
     * @response {
     *  "id": 4,
     *  "name": "Jessica Jones",
     *  "roles": ["admin"]
     * }
     *
     * @param \Modules\Webservice\Soap\Types\TicketType $type
     * @return string
     */
    public function getTicketStoreDate(TicketType $type){

        return "CHEGOU AKI";
    }

    /**
     * @param \Modules\Webservice\Soap\Types\TicketType $type
     * @return array
     */
    public function getTicket(TicketType $type){

        $data = [
            'store' => $type->store,
            'date' => $type->date,
            'cashier' => $type->cashier,
            'ticket' => $type->ticket
        ];
        return $data;
    }

    /**
     * @param int $var1
     * @param int $var2
     * @return int
     */
    public function somaNova($var1, $var2){
        return $var1 + $var2;
    }
}