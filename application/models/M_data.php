<?php 

class M_data extends CI_Model{
	function tampil_data(){
	return $this->db->query("SELECT Anggota.Noinduk, Anggota.JK, Anggota.Nama, Pinjaman.Nopinjam, Pinjaman.Tgl, Pinjaman.Noinduk, Pinjaman.Jumlahpinjam, SUM(Pinjaman.Jumlahpinjam) ini from Pinjaman,Anggota where Anggota.Noinduk = Pinjaman.Noinduk GROUP BY Pinjaman.Noinduk,Anggota.Noinduk");
	}
	function tampil_data2(){
	return $this->db->query("SELECT Anggota.Noinduk, Anggota.JK, Anggota.Nama, angsuran.id_angsuran, angsuran.Tgl, angsuran.Noinduk, angsuran.jumlahangsuran, SUM(angsuran.jumlahangsuran) ini from angsuran,Anggota where Anggota.Noinduk = angsuran.Noinduk GROUP BY angsuran.Noinduk,Anggota.Noinduk");
	}
	function tampil_data3(){
		return $this->db->get('anggota');
	}
	function tampil_data4(){
	return $this->db->query("SELECT Anggota.Noinduk, Anggota.JK, Anggota.Nama, simpanan.id_simpanan, simpanan.tgl, simpanan.Noinduk, simpanan.jumlahsimpanan, SUM(simpanan.jumlahsimpanan) ini from simpanan,Anggota where Anggota.Noinduk = simpanan.Noinduk GROUP BY simpanan.Noinduk,Anggota.Noinduk");
	}
}
?>