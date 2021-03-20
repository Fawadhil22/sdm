<?php
/**
 *
 */
class Modelcrud extends CI_Model
{

  public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('biodata_artis');
      $query = $this->db->get();
      return $query->result();
  }

  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('biodata_artis');

    return $query->num_rows();
  }


  public function get_kecamatan(){
 $query = $this->db->get('kecamatan')->result();
 return $query;
}
public function get_all_provinsi(){
 $query = $this->db->get('provinsi')->result();
 return $query;
}



  public function get_by_id($kondisi)
  {
      $this->db->from('biodata_artis');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('biodata_artis',$data);
      return TRUE;
  }
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('biodata_artis');
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('biodata_artis',$data,$kondisi);
      return TRUE;
  }

}
