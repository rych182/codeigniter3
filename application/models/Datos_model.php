<?php class Datos_model extends CI_Model{

  public function obtenerTodos(){
      $this->db->select('*');
      $this->db->from('usuarios');
      $query = $this->db->get(); // get() ejecuta el query
      return $query->result();  // result() trae el resultado

      // SELECT * FROM usuarios
  }

  public function obtenerPorId($id){
      $this->db->select('*');
      $this->db->from('usuarios');
      $this->db->where_in('id', $id);
      $query = $this->db->get();
      return $query->result();

      // SELECT * FROM usuarios WHERE id = $id
  }

  public function totalRegistros(){
      return $this->db->count_all_results("usuarios");
      // Regresa el número de registros
  }

} //Fin class Datos_model