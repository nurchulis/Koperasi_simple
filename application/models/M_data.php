<?php 

class M_data extends CI_Model{
	function tampil_data(){
	return $this->db->query("SELECT Anggota.Noinduk, Anggota.JK, Anggota.Nama, Pinjaman.Nopinjam, Pinjaman.Tgl, Pinjaman.Noinduk, Pinjaman.Jumlahpinjam, SUM(Pinjaman.Jumlahpinjam) ini from Pinjaman,Anggota where Anggota.Noinduk = Pinjaman.Noinduk GROUP BY Pinjaman.Noinduk,Anggota.Noinduk");
	}
	
}
?>