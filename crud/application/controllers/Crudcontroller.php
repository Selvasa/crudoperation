<?php
class Crudcontroller extends CI_Controller{
    public function index(){
        $this->load->view('create');
      
    }
    
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

    function printvalue(){
        $this->load->model('Crudmodel');
        $result['value']=$this->Crudmodel->getvalue(); 
        $this->load->view('table',$result);
    }

    function edit($id){
      //  echo $id;
        $this->load->model('crudmodel');
       $data['datas']=$this->crudmodel->edit($id);
      
       $this->load->view('edit',$data);
    
    }

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

    function delete($id){
        // $this->load->view('delete');
        $this->load->model('crudmodel');
        $this->crudmodel->deletemodel($id);
      redirect('crudcontroller/printvalue');
    }
}
?>