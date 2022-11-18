<?php

// require 'vendor/autoload.php';
use Dompdf\Dompdf;

class Crudcontroller extends CI_Controller{
    
    
    public function index(){
        $this->load->view('create');
    }

    // Add data 
    function addtotable(){
        
        $this->load->model('Crudmodel');
        
        $data['name']=$this->input->post('name');
        $data['email']=$this->input->post('email');
        $data['password']=$this->input->post('password');
        $data['phno']=$this->input->post('phno');

        // get file upload file into database with valid name
        $config['upload_path']='./assets/image/';
        $config['allowed_types']='pdf|jpg|png|jpeg|mp3|mp4|zip|doc';
        $config['max_size']=1024*5;
        
        $this->load->library('upload',$config);

        $this->upload->do_upload('file');
        $result=$this->upload->data();
        $data['file']= $result['file_name'];
        $this->Crudmodel->setvalue($data);
        redirect('crudcontroller/printvalue');
    }

    // Show data
    function printvalue(){
        $this->load->model('Crudmodel');
        $result['value']=$this->Crudmodel->getvalue(); 
        $this->load->view('list',$result);
    }

    // Edit data
    function edit($id){
        $this->load->model('crudmodel');
        $data['datas']=$this->crudmodel->edit($id);
       //have work bending
        $this->load->view('edit',$data);
    }

    // Update date
    function update(){
        $this->load->model('crudmodel');
        $id=$this->input->post('id');
        $data=array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'phno'=>$this->input->post('phno')
        );
        $config['upload_path']='./assets/image/';
        $config['allowed_types']='pdf|jpg|png|jpeg|mp3|mp4|zip|doc';
        $config['max_size']=1024*5;
        // $config['overwrite'] = TRUE;
        $this->load->library('upload',$config);
        $this->upload->overwrite = true;

        $this->upload->do_upload('file');
      
        $result=$this->upload->data();
        
        $data['file']= $result['file_name'];
       
        
        $this->crudmodel->updatemodel($id,$data);
        redirect('crudcontroller/printvalue');
    }

    // Delete date
    function delete(){
        $id=  $this->uri->segment(3);
            $this->load->model('crudmodel');
            $this->crudmodel->deletemodel($id);
            redirect('crudcontroller/printvalue');
      
    }
    
    function exportpdf(){
        $this->load->model('crudmodel');
        $value['value']=$this->crudmodel->export();
        $download=$this->load->view('download',$value,true);
        $dompdf= new Dompdf();
        $dompdf->loadHtml( $download);
        $dompdf->render();
        $dompdf->stream("welcome.pdf", array("Attachment"=>0));
    }
    
}
?>