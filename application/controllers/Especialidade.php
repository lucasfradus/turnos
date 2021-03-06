<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Especialidade extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Especialidade_model');
    } 

    /*
     * Listing of especialidades
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('especialidade/index?');
        $config['total_rows'] = $this->Especialidade_model->get_all_especialidades_count();
        $this->pagination->initialize($config);

        $data['especialidades'] = $this->Especialidade_model->get_all_especialidades($params);
        
        $data['_view'] = 'especialidade/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new especialidade
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','required|min_length[5]|max_length[40]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'status' => $this->input->post('status'),
            );
            
            $especialidade_id = $this->Especialidade_model->add_especialidade($params);
            redirect('especialidade/index');
        }
        else
        {            
            $data['_view'] = 'especialidade/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a especialidade
     */
    function edit($id_especialidad)
    {   
        // check if the especialidade exists before trying to edit it
        $data['especialidade'] = $this->Especialidade_model->get_especialidade($id_especialidad);
        
        if(isset($data['especialidade']['id_especialidad']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','required|min_length[5]|max_length[40]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'status' => $this->input->post('status'),
                );

                $this->Especialidade_model->update_especialidade($id_especialidad,$params);            
                redirect('especialidade/index');
            }
            else
            {
                $data['_view'] = 'especialidade/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The especialidade you are trying to edit does not exist.');
    } 

    /*
     * Deleting especialidade
     */
    function remove($id_especialidad)
    {
        $especialidade = $this->Especialidade_model->get_especialidade($id_especialidad);

        // check if the especialidade exists before trying to delete it
        if(isset($especialidade['id_especialidad']))
        {
            $this->Especialidade_model->delete_especialidade($id_especialidad);
            redirect('especialidade/index');
        }
        else
            show_error('The especialidade you are trying to delete does not exist.');
    }
    
}
