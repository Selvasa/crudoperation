<?php 
class Crudmodel extends CI_Model{

    function setvalue($data){
        $this->load->database();
        $this->db->insert('users',$data);
    }

    // Get data from the database
    function getvalue(){
        $this->load->database();
       return $this->db->get('users')->result();
    }

     // Get data fine by id to edit
    function edit($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('users')->result();
    }

    // Update data fine by id to edit
    function updatemodel($id,$data)
    {
        $this->load->database();
        $this->db->where('id',$id);
        $this->db->update('users',$data);
    }

    // Delete data fine by id to edit
    function deletemodel($id)
    {
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->delete('users');
    }
    }
?>