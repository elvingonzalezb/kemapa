<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Ingresar extends CI_Controller {

		function __construct() {
		    parent::__construct();
			$this->load->model('frontend/Generales_model'); 
			$this->load->model('frontend/Ingresar_model');
			$this->load->model('frontend/Inicio_model');  
			$this->load->helper('captcha');
			$this->load->library('My_phpmailer'); 
		}

		public function index()
		{
			$dataPrincipal = array();

	
			$seccion = 'ingresar';
			$dataPrincipal['seccion'] = $seccion;

			$dataPrincipal['titulo'] = "INGRESO DE USUARIOS";
			$dataPrincipal['texto'] = "";

			$dataPrincipal['cuerpo'] = 'ingresar_view';
			

			$data = array();
			$data['seccion'] = $seccion;
			$data['title'] = "INGRESO DE USUARIOS";
			$data['keywords'] = "ingreso de usuarios, usuarios ".NOMBRE_SITIO;
			$data['description'] = "Formulario de ingreso de usuarios en ".NOMBRE_SITIO;

			$dataPrincipal['bannerslateral'] = $this->Inicio_model->getBannersLateral();		
			$dataPrincipal['recaptcha'] = $this->recaptcha->render();
			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);
		}

		public function editdatos()
		{
			$correo = $this->session->userdata('usuario_email');
			$dataPrincipal = array();
			$seccion = 'ingresar';
			$dataPrincipal['seccion'] = $seccion;
			$dataPrincipal['titulo'] = "REGISTRO DE USUARIOS";
			$dataPrincipal['texto'] = "";

	
			$dataPrincipal['cuerpo'] = 'editdatos_view';
			$usuarioactual  			    = $this->Ingresar_model->getUsuario($correo);
			$dataPrincipal['usuarioactual'] = $usuarioactual;
 		
			$data = array();
			$data['seccion'] = $seccion;
			$data['title'] = "EDITAR DE USUARIOS";
			$data['keywords'] = "editar usuarios, usuarios ".NOMBRE_SITIO;
			$data['description'] = "editar ingreso de usuarios en ".NOMBRE_SITIO;

			$dataPrincipal['bannerslateral'] = $this->Inicio_model->getBannersLateral();		
			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);
		}	

		public function actualizar()
   		{
	        $correo = $this->session->userdata('usuario_email');
	        $dataPrincipal = array();
    		$seccion = 'ingresar';
			$dataPrincipal['seccion'] = $seccion;
			$dataPrincipal['titulo'] = "EDITAR DE USUARIOS";
			$dataPrincipal['texto'] = "";
	        
	        $data = array();
	        $data["nombres"]	= $this->input->post("nombres");
			$data["apellidos"]	= $this->input->post("apellidos");
			$data["telefono"]  = $this->input->post("telefono");
			$data["clave"] = $this->input->post("clave");
			$data["estado"] = $this->input->post("estado");
			$data["fecha_registro"]       = dmY_2_Ymd($this->input->post("fecha_registro"));
		    $id = $this->input->post('id');

	        $result=$this->Ingresar_model->update($correo, $data);
	        if($result==true)
	        {
	           	    $resultado = "exito";
    				$mensaje = "Se procesó correctamente la información";
    				$this->session->set_userdata("resultado", $resultado);
		        	$this->session->set_userdata("mensaje", $mensaje);
		        	redirect(base_url().'editdatos'); 
	        }
	        else
	        {
	        	    $resultado = "error";
    				$mensaje = "Ocurrió un error al procesar su información";
    				$this->session->set_userdata("resultado", $resultado);
		        	$this->session->set_userdata("mensaje", $mensaje);
		        	redirect(base_url().'editdatos'); 
	                   
	        }  
   		}

		public function validarLogin() {
	        // PROCESAR LOGIN
	        $username = $this->input->post('emailLogin');
	        $password = $this->input->post('claveLogin');
	        
	        $recaptcha = $this->input->post('g-recaptcha-response');
	        $response = $this->recaptcha->verifyResponse($recaptcha);

	        if($response['success']) 
	        {
	            $existe = $this->Ingresar_model->validaUser($username, $password);
	            if($existe)
	            {
	                $this->session->set_userdata('usermercasub_registrado', true);
	                $this->session->set_userdata('nombres_usuario', $existe->nombres);
	                $this->session->set_userdata('apellidos_usuario', $existe->apellidos);
	                $this->session->set_userdata('usuario_email', $existe->email);
	                $this->session->set_userdata('usuario_telefono', $existe->telefono);
	                $this->session->set_userdata('id_usuario', $existe->id);
	                redirect('inicio');
	            }
	            else
	            {
	            
	                    $user_correcto = $this->Ingresar_model->verificaUser($username);
	                    if($user_correcto)
	                    {
	                        $this->session->set_userdata("resultado", "error");
			        		$this->session->set_userdata("mensaje", "Clave errada");
				            redirect('ingresar');
	                    }
	                    else
	                    {
	                        $this->session->set_userdata("resultado", "error");
			        		$this->session->set_userdata("mensaje", "No existe un registro con el email indicado");
				            redirect('ingresar');
	                    }
	            	
	            }
	        }
	        else
	        {
	            $this->session->set_userdata("resultado", "error");
        		$this->session->set_userdata("mensaje", "Debe comprobar que no es un robot");
	            redirect('ingresar');
	        }
	    }
	        
	    public function logout()
	    {

	    	$this->session->set_flashdata('message', '<div class="form-group has-feedback"><div class="alert alert-info">Sesión finalizada.</div></div>');
	        $this->session->unset_userdata('usermercasub_registrado');
            $this->session->unset_userdata('nombre_usuario');
            $this->session->unset_userdata('apellidos_usuario');
            $this->session->unset_userdata('usuario_email');
            $this->session->unset_userdata('id_usuario');
	 
	        redirect('inicio');
	    }			

	}