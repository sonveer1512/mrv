
<?php
class Mrv_Model extends CI_Model
{
  public function fetchall($table)
  {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where('flag', '0');
    $query = $this->db->get();
    return $query->result();
  }
  public function fetchinfo($table)
  {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->order_by("id", "desc");
    $this->db->where('flag', '0');
    $query = $this->db->get();
    return $query->result();
  }
  public function fetchclass($class,$table)
  {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->order_by("id", "desc");
    $this->db->where("class", $class);
    $this->db->where('flag', '0');
    $query = $this->db->get();
    return $query->result_array();
  }
  public function fetchdata($id)
  {
    $this->db->select('*');
    $this->db->from('mrvform');
    $this->db->where('flag', '0');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
  // 
  // public function updatedata($id,$data){
  //   $this->db->where('id', $id);
  //   $this->db->update('mrvform', $data);
  // }
   public function checkUser($email)
   {
    $this->db->where('email', $email);
    return $row = $this->db->get('admin')->row_array();
  }
  public function countrecords($table)
  {
    $this->db->select('*');
    $this->db->from($table);
    echo $this->db->count_all_results();
  }

  function fetch_data($query,$table)
 {
  $this->db->select("*");
  $this->db->from($table);
 
  //  $this->db->like('serial_no', $query);
   $this->db->like('class', $query);
  //  $this->db->or_like('fathername', $query);
  //  $this->db->or_like('mothername', $query);
   $this->db->or_like('name', $query);
  
  $this->db->order_by('id', 'DESC');
  $query = $this->db->get();
  return $query->result_array();
 }

}
