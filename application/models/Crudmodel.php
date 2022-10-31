<?php 
class Crudmodel extends CI_Model{

    function setvalue($data){
        $this->load->database();
        $this->db->insert('users',$data);
    }
    function getvalue(){
        $this->load->database();
       return $this->db->get('users')->result();
    }
    function edit($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('users')->result();


    }
    function updatemodel($id,$data)
    {
        $this->load->database();
        $this->db->where('id',$id);
        $this->db->update('users',$data);
        
    }

    function deletemodel($id)
    {
       
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->delete('users');
       
    }
    }
?>