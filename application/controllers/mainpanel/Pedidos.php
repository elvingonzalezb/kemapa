<?php
class Pedidos extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('validacion_mainpanel');
        $this->load->model('mainpanel/Pedidos_model');
        $this->load->library('My_upload');
    }
    
    public function index() {
        $this->validacion_mainpanel->validacion_login();
    }


    
    public function listado()
        {
            $this->validacion_mainpanel->validacion_login();
            
            $theme = $this->config->item('admin_theme');
            $data['theme'] = $theme;
            $datos2 = array();
            $datos2["current_section"] ="pedidos";
            $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
            $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
            $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
            $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
            $dataPrincipal["cuerpo"]="pedidos/index_view";
            $dataPrincipal['listado'] = $this->Pedidos_model->getListado();
          
            $this->load->view("mainpanel/includes/template", $dataPrincipal);
        }


    public function edit($id)
        {
            $this->validacion_mainpanel->validacion_login();
          
            $theme = $this->config->item('admin_theme');
            $data['theme'] = $theme;
            $datos2 = array();
            $datos2["current_section"] ="pedidos";
            $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
            $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
            $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
            $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
            $dataPrincipal["cuerpo"]="pedidos/edit_detalles_view";
           
            $pedido   = $this->Pedidos_model->getPedido($id);
            $dataPrincipal['pedido'] = $pedido;
            $detalles = $this->Pedidos_model->getDetalles($id);
            $dataPrincipal['detalles'] = $detalles;
             
            $this->load->view("mainpanel/includes/template", $dataPrincipal);
        }
        
       
        public function actualizar()
        {
            $this->validacion_mainpanel->validacion_login();
           
            $data = array();
            $data["fecha"]    = $this->input->post("fecha");
            $id_pedido         = $this->input->post('id');
          
             $this->my_upload->upload($_FILES["archivo"]);
            if($this->my_upload->uploaded == true)
            {
                
                          
                $this->my_upload->process('./files/stock/');
                
                if($this->my_upload->processed == true)
                {
                    $data["archivo"] = $this->my_upload->file_dst_name;
                    $this->my_upload->clean();
                }
                else
                {
                    $error= $this->my_upload->error;
                    $this->session->set_userdata("error", 'ARCHIVO:'.$error);
                    redirect("mainpanel/stock/listado");
                }
            }
            else
            {
            }

            $result=$this->Pedidos_model->update($id_pedido, $data);
        
            if($result==true)
            {
                $this->session->set_userdata("success",'Se procesó correctamente la información');
                redirect('mainpanel/stock/listado');
            }
            else
            {
                $error='Ocurrió un error al procesar su información '.$error;
                $this->session->set_userdata("error",$error);
                redirect('mainpanel/stock/listado');            
            }  
        }
        
        
 }
?>
