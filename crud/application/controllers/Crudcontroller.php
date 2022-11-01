<?php
class Crudcontroller extends CI_Controller{

    public function index(){
        $this->load->view('create');
    }

    // Add data 
    function addtotable(){
        $data=array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'phno'=>$this->input->post('phno')
        );
        $this->load->model('Crudmodel');
        $this->Crudmodel->setvalue($data);
        redirect('crudcontroller/printvalue');
    }

    // Show data
    function printvalue(){
        $this->load->model('Crudmodel');
        $result['value']=$this->Crudmodel->getvalue(); 
        $this->load->view('table',$result);
    }

    // Edit data
    function edit($id){
        $this->load->model('crudmodel');
        $data['datas']=$this->crudmodel->edit($id);
        $this->load->view('edit',$data);
    }

    // Update date
    function update(){
        $id=$this->input->post('id');
        $data=array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'phno'=>$this->input->post('phno')
        );
        $this->load->model('crudmodel');
        $this->crudmodel->updatemodel($id,$data);
        redirect('crudcontroller/printvalue');
    }

    // Delete date
    function delete($id){
        $this->load->model('crudmodel');
        $this->crudmodel->deletemodel($id);
        redirect('crudcontroller/printvalue');
    }
}
?>