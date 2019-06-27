<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model 
{
 public function Getperistiwa()
 {

  $getperis=$this->db->query("SELECT peristiwa.id_peristiwa,peristiwa.id_kategori,peristiwa.nama_peristiwa,peristiwa.point,kategori.nama_kategori from peristiwa join kategori USING (id_kategori)");
		return $getperis->result();
 }
 public function hapus_data($where,$table)
 {
  $this->db->where($where);
  $this->db->delete($table);
 }
 public function getPenghargaan(){
 	$getHarga=$this->db->query("SELECT smt_melakukan, nama_kategori, nama_peristiwa, COUNT(id_peristiwa) as terserah from kategori kt join peristiwa pr USING(id_kategori) join melakukan ml USING(id_peristiwa) where kt.flag = '1' group by ml.id_peristiwa");
 	return $getHarga->result();
 }

  public function getPelanggaran(){
 	$getLanggar=$this->db->query("SELECT smt_melakukan, nama_kategori, nama_peristiwa, COUNT(id_peristiwa) as terserah from kategori kt join peristiwa pr USING(id_kategori) join melakukan ml USING(id_peristiwa) where kt.flag = '2' group by ml.id_peristiwa");
 	return $getLanggar->result();
 }
 public function getSiswa(){
 	$getSiswa=$this->db->query("SELECT nim, nama_mhs FROM mahasiswa");
 	return $getSiswa->result();
 }
function show_detail($id){
	$this->db->where('nim',$id);
	$query=$this->db->get('mahasiswa');
	return $query->result();
}
}


 