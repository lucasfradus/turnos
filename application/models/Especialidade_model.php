<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Especialidade_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get especialidade by id_especialidad
     */
    function get_especialidade($id_especialidad)
    {
        return $this->db->get_where('especialidades',array('id_especialidad'=>$id_especialidad))->row_array();
    }
    
    /*
     * Get all especialidades count
     */
    function get_all_especialidades_count()
    {
        $this->db->from('especialidades');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all especialidades
     */
    function get_all_especialidades($params = array())
    {
        $this->db->order_by('id_especialidad', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('especialidades')->result_array();
    }
        
    /*
     * function to add new especialidade
     */
    function add_especialidade($params)
    {
        $this->db->insert('especialidades',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update especialidade
     */
    function update_especialidade($id_especialidad,$params)
    {
        $this->db->where('id_especialidad',$id_especialidad);
        return $this->db->update('especialidades',$params);
    }
    
    /*
     * function to delete especialidade
     */
    function delete_especialidade($id_especialidad)
    {
        return $this->db->delete('especialidades',array('id_especialidad'=>$id_especialidad));
    }
}
