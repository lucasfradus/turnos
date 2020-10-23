<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cliente extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model');
    } 

    /*
     * Listing of clientes
     */
    function index()
    {
        $data['clientes'] = $this->Cliente_model->get_all_clientes();
        
        $data['_view'] = 'cliente/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new cliente
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','required');
		$this->form_validation->set_rules('apellido','Apellido','required');
		$this->form_validation->set_rules('email','Email','valid_email');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'fecha_nac' => $this->input->post('fecha_nac'),
				'direccion' => $this->input->post('direccion'),
				'telefono' => $this->input->post('telefono'),
				'email' => $this->input->post('email'),
				'status' => $this->input->post('status'),
            );
            
            $cliente_id = $this->Cliente_model->add_cliente($params);
            redirect('cliente/index');
        }
        else
        {            
            $data['_view'] = 'cliente/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a cliente
     */
    function edit($id_cliente)
    {   
        // check if the cliente exists before trying to edit it
        $data['cliente'] = $this->Cliente_model->get_cliente($id_cliente);
        
        if(isset($data['cliente']['id_cliente']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','required');
			$this->form_validation->set_rules('apellido','Apellido','required');
			$this->form_validation->set_rules('email','Email','valid_email');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'apellido' => $this->input->post('apellido'),
					'fecha_nac' => $this->input->post('fecha_nac'),
					'direccion' => $this->input->post('direccion'),
					'telefono' => $this->input->post('telefono'),
					'email' => $this->input->post('email'),
					'status' => $this->input->post('status'),
                );

                $this->Cliente_model->update_cliente($id_cliente,$params);            
                redirect('cliente/index');
            }
            else
            {
                $data['_view'] = 'cliente/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The cliente you are trying to edit does not exist.');
    } 

    /*
     * Deleting cliente
     */
    function remove($id_cliente)
    {
        $cliente = $this->Cliente_model->get_cliente($id_cliente);

        // check if the cliente exists before trying to delete it
        if(isset($cliente['id_cliente']))
        {
            $this->Cliente_model->delete_cliente($id_cliente);
            redirect('cliente/index');
        }
        else
            show_error('The cliente you are trying to delete does not exist.');
    }
    
}
