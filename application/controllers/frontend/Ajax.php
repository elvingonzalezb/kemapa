<?php

class Ajax extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

   public function eliminaItemPedido() {
        $id = $_POST['id'];
        if($this->session->userdata('carrito_items'))
        {
            $carrito = $this->session->userdata('carrito_items');
            foreach ($carrito as $key => $value) {
                if ($value['item_carroID']==$id) {
                    unset($carrito[$key]);
                }
            }
            $numItem=count($carrito);
            if($numItem == 0){
                $this->session->unset_userdata('carrito_items');
             }else{
                $this->session->set_userdata('carrito_items', $carrito);                           
            }
            $ok=array();
            $ok['dato'] = 'ok';
            $ok['num'] = $numItem;  
            echo json_encode($ok);                
        }
    }

    public function eliminaPedidos() {

        $carrito = $this->session->userdata('carrito');
        foreach ($carrito as $value) {
            $id_producto = $value['id_producto'];
            $cantidad = $value['cantidad'];
        }
        $this->session->unset_userdata('carrito');
        $ok=array();
        $ok['dato']='ok';
        $ok['num'] = 0;
        echo json_encode($ok);
    }

    public function actualizaPedido() {


        if ($_POST) {

            $datos = $_POST;

            $indice = $datos['carro_id'];

            $json = array();

            $carrito = $this->session->userdata('carrito_items');

          

                if($carrito){

                    if(isset($carrito[$indice])){

                        if (isset($datos['cantidad'])) {

                            $carrito[$indice]['item_cantidad'] = $datos['cantidad'];

                            $carrito[$indice]['item_subtotal'] = $datos['cantidad'] * $carrito[$indice]['item_precio'];

                           

                        }else{

                            $item_cantidad = $carrito[$indice]['item_cantidad'];

                            //$subtotal = $carrito[$indice]['item_subtotal'];

                        }

                        if (isset($datos['observaciones'])) {

                            $carrito[$indice]['item_observaciones'] = $datos['observaciones'];

                        }

                        if (isset($datos['atributo_id'])) {

                            $carrito[$indice]['item_atributos'][0] = $this->Producto->getColorById($datos['atributo_id']);

                        }

                        if (isset($datos['impresion_id'])) {

                            $carrito[$indice]['item_impresion'] = $this->Producto->getTipoImpresionById($datos['impresion_id']);

                        }

                        if (isset($datos['nro_color'])) {

                            $carrito[$indice]['item_impresion']['nro_color'] = $datos['nro_color'];

                        }

                    

                    }

                    $total = 0;

                    $totalpeso = 0;

                    foreach ($carrito as $value){

                        $total = $total + ($value['item_cantidad'] * $value['item_precio']);

                        //$totalpeso = $totalpeso + ($value['cantidad']*$value['peso']);

                    }

                    $this->session->set_userdata('carrito_items', $carrito);

                    $json=array();

                    $json['dato'] = 'ok';

                    if (isset($datos['cantidad'])) {

                        $json['new_cantidad'] = $datos['cantidad'];

                        $json['new_subtotal'] = $subtotal;

                        $json['new_total'] = $total;

                    }else{

                        $json['new_cantidad'] = $item_cantidad;

                        $json['new_subtotal'] = '0';

                        $json['new_total'] = '0';

                    }

                    

                }

           // }

            echo json_encode($json);

        }

    }

}//END CONTROLLER