<?php
class Ajax extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    
        $this->load->model('mainpanel/Ajax_model');
    }

    public function cargaSubcategoria() {
        $id_categoria = $_POST['id_categoria'];
        $aux = $this->Ajax_model->getSubcategorias($id_categoria);
        $dato=array();
        $cont=0;
        foreach ($aux as $value) {
            $id_subcategoria = $value->id_subcategoria;
            $nombre = $value->nombre;
            $url = $value->url;
            $dato[] = $id_subcategoria.'$$'.$nombre.'$$'.$url;
            $cont +=1;
        }
        $envio=$cont.'@@'.implode("@@",$dato);
        $json['dato'] = $envio;
        echo json_encode($json);
    }


    public function cargaProductos() {
        $id_subcategoria = $_POST['id_subcategoria'];
        $aux = $this->Ajax_model->getProductos($id_subcategoria);
        $dato = array();
        $cont = 0;
        foreach ($aux as $value) {
            $id_producto = $value->id;
            $nom_producto = $value->nom_producto;
            $url = $value->url;
            $dato[] = $id_producto.'$$'.$nom_producto.'$$'.$url;
            $cont +=1;
        }
        $envio=$cont.'@@'.implode("@@",$dato);
        $json['dato'] = $envio;
        echo json_encode($json);
    }

        public function cargaProductosColor() {
        $id_subcategoria = $_POST['id_subcategoria'];
        $aux = $this->Ajax_model->getProductosColor($id_subcategoria);
        $dato = array();
        $cont = 0;
        foreach ($aux as $value) {
            $id_producto = $value->id;
            $nom_producto = $value->nom_producto;
            $url = $value->url;
            $dato[] = $id_producto.'$$'.$nom_producto.'$$'.$url;
            $cont +=1;
        }
        $envio=$cont.'@@'.implode("@@",$dato);
        $json['dato'] = $envio;
        echo json_encode($json);
    }

    }
?>