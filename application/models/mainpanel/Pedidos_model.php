<?php
class Pedidos_model extends CI_Model {
    public function __construct()
    {
            parent::__construct();
    }
    
    public function getListado() {
        $this->db->select('pedidos.id,pedidos.id_usuario,pedidos.numero_cotizacion,pedidos.observaciones,pedidos.fecha_pedido,pedidos.estado,registro_usuarios.nombres,registro_usuarios.apellidos');
        $this->db->from('pedidos'); 
        $this->db->join('registro_usuarios','registro_usuarios.id=pedidos.id_usuario');
        $query=$this->db->get();
        return $query->result();
    }
   
    public function get($id) {
        $this->db->where('id', $id);
        $query =  $this->db->get('pedidos');
        return $query->row();
    }

    public function getDetalles($id) {
    $this->db->select('dp.id,dp.id_producto,dp.nombre_producto,dp.id_color,c.nombre_color,dp.codigo,dp.imagen,dp.cantidad');
        $this->db->from('detalle_pedido dp'); 
        $this->db->join('colores c','c.id=dp.id_color');
        $this->db->where_in('dp.id_pedido',$id);
        $query=$this->db->get();
        return $query->result();
    }



    public function getPedido($id) {
        $this->db->select('p.id,p.id_usuario,p.numero_cotizacion,p.observaciones,p.fecha_pedido,p.estado,ru.nombres,ru.apellidos,ru.telefono,ru.email');
        $this->db->from('pedidos p'); 
        $this->db->join('registro_usuarios ru','ru.id=p.id');
         $this->db->where_in('p.id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function getPedido2($id) {
          $sql = "SELECT p.id,p.id_usuario,p.numero_cotizacion,p.observaciones,p.fecha_pedido,p.estado,ru.nombres,ru.apellidos,ru.telefono,ru.email
                    FROM pedidos p
                    INNER JOIN registro_usuarios ru on ru.id=p.id_usuario
                    WHERE p.id =1";
                    $query =  $this->db->query($sql);
                    return $query->row();
    } 

    public function update($id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update("pedidos", $data);
        return $result;
    }   

    public function getColDel($id) {
        $this->db->where('id', $id);
        $query =  $this->db->get('pedidos');
        return $query->row();
    }  

    public function delete($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete("pedidos");
        return $query;
    }

  }
?>
