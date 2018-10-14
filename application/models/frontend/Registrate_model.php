<?php
    class Registrate_model extends CI_Model {
        public function __construct()
        {
                parent::__construct();
        }

        public function telefonoDuplicado($telefono) {
            $this->db->where('telefono', $telefono);
            $query =  $this->db->get('registro_usuarios');
            $hallados = $query->num_rows();
            if($hallados==0)
            {
                return false;
            }
            else
            {
                return true;
            }            
        }

        public function emailDuplicado($email) {
            $this->db->where('email', $email);
            $query =  $this->db->get('registro_usuarios');
            $hallados = $query->num_rows();
            if($hallados==0)
            {
                return false;
            }
            else
            {
                return true;
            }            
        }

        public function grabarRegistro($data)
        {
            $resultado = $this->db->insert("registro_usuarios", $data);
            $id = $this->db->insert_id();
            return $id;
        }

               

    }