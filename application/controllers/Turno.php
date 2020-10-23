<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Turno extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Turno_model');
    } 

    /*
     * Listing of turnos
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('turno/index?');
        $config['total_rows'] = $this->Turno_model->get_all_turnos_count();
        $this->pagination->initialize($config);

        $data['turnos'] = $this->Turno_model->get_all_turnos($params);
        
        $data['_view'] = 'turno/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new turno
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('id_especialidad','Id Especialidad','required');
		$this->form_validation->set_rules('id_cliente','Id Cliente','required');
		$this->form_validation->set_rules('fecha','Fecha','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_especialidad' => $this->input->post('id_especialidad'),
				'id_cliente' => $this->input->post('id_cliente'),
				'fecha' => $this->input->post('fecha'),
            );
            
            $turno_id = $this->Turno_model->add_turno($params);
            redirect('turno/index');
        }
        else
        {
			$this->load->model('Especialidade_model');
			$data['all_especialidades'] = $this->Especialidade_model->get_all_especialidades();

			$this->load->model('Cliente_model');
			$data['all_clientes'] = $this->Cliente_model->get_all_clientes();
            
            $data['_view'] = 'turno/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a turno
     */
    function edit($id_turno)
    {   
        // check if the turno exists before trying to edit it
        $data['turno'] = $this->Turno_model->get_turno($id_turno);
        
        if(isset($data['turno']['id_turno']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('id_especialidad','Id Especialidad','required');
			$this->form_validation->set_rules('id_cliente','Id Cliente','required');
			$this->form_validation->set_rules('fecha','Fecha','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_especialidad' => $this->input->post('id_especialidad'),
					'id_cliente' => $this->input->post('id_cliente'),
					'fecha' => $this->input->post('fecha'),
                );

                $this->Turno_model->update_turno($id_turno,$params);            
                redirect('turno/index');
            }
            else
            {
				$this->load->model('Especialidade_model');
				$data['all_especialidades'] = $this->Especialidade_model->get_all_especialidades();

				$this->load->model('Cliente_model');
				$data['all_clientes'] = $this->Cliente_model->get_all_clientes();

                $data['_view'] = 'turno/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The turno you are trying to edit does not exist.');
    } 

    /*
     * Deleting turno
     */
    function remove($id_turno)
    {
        $turno = $this->Turno_model->get_turno($id_turno);

        // check if the turno exists before trying to delete it
        if(isset($turno['id_turno']))
        {
            $this->Turno_model->delete_turno($id_turno);
            redirect('turno/index');
        }
        else
            show_error('The turno you are trying to delete does not exist.');
    }
    
}