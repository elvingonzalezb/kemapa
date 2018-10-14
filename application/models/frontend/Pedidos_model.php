<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pedidos_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function grabarPedido($data)	{
		$resultado = $this->db->insert('pedidos', $data);
		return $this->db->insert_id();
	}

	public function grabarDetallePedido($data) {
		$resultado = $this->db->insert('detalle_pedido', $data);
		return $this->db->insert_id();
	}

	public function getCodigoPedido(){
	$sql = "SELECT (MAX(numero_cotizacion)) AS numero_cotizacion FROM pedidos ORDER BY numero_cotizacion DESC ";
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	

	public function getProductos( $id ){
        $query = $this->db
                ->select('*')
                ->from('productos')
                ->where('id', $id)
                ->get()
                ->row_array();
            return ( ! empty($query) && is_array($query) ? $query : []);
    }

	public function getCodigoColor($id_color){
        $query = $this->db
                ->select('*')
                ->from('colores')
                ->where('id', $id_color)
                ->get()
                ->row_array();
            return ( ! empty($query) && is_array($query) ? $query : []);
    }




}//END MODEL