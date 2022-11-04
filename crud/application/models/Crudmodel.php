<?php 
class Crudmodel extends CI_Model{

    function setvalue($data){
        $this->load->database();
        $this->db->insert('user',$data);
    }

    // Get data from the database
    function getvalue(){
        $this->load->database();
       return $this->db->get('user')->result();
    }

     // Get data fine by id to edit
    function edit($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('user')->result();
    }

    // Update data fine by id to edit
    function updatemodel($id,$data)
    {
        $this->load->database();
        $this->db->where('id',$id);
        $this->db->update('user',$data);
    }

    // Delete data fine by id to edit
    function deletemodel($id)
    {
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->delete('user');
    }

    // Export to pdf
    function export(){
        $this->load->database();
       return $this->db->get('user')->result();
        
    }
    function pdf($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('user')->result();
      

        
    }

    }
   
    
?>