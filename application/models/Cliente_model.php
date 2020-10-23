<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cliente_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get cliente by id_cliente
     */
    function get_cliente($id_cliente)
    {
        return $this->db->get_where('clientes',array('id_cliente'=>$id_cliente))->row_array();
    }
        
    /*
     * Get all clientes
     */
    function get_all_clientes()
    {
        $this->db->order_by('id_cliente', 'desc');
        return $this->db->get('clientes')->result_array();
    }
        
    /*
     * function to add new cliente
     */
    function add_cliente($params)
    {
        $this->db->insert('clientes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update cliente
     */
    function update_cliente($id_cliente,$params)
    {
        $this->db->where('id_cliente',$id_cliente);
        return $this->db->update('clientes',$params);
    }
    
    /*
     * function to delete cliente
     */
    function delete_cliente($id_cliente)
    {
        return $this->db->delete('clientes',array('id_cliente'=>$id_cliente));
    }
}