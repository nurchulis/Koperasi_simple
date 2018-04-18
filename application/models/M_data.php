<?php 

class M_data extends CI_Model{
	function tampil_data(){
	return $this->db->query("SELECT anggota.Noinduk, anggota.JK, anggota.Nama, pinjaman.Nopinjam, pinjaman.Tgl, pinjaman.Noinduk, pinjaman.Jumlahpinjam, SUM(pinjaman.Jumlahpinjam) ini from pinjaman,anggota where anggota.Noinduk = pinjaman.Noinduk GROUP BY pinjaman.Noinduk,anggota.Noinduk");
	}
	function tampil_data2(){
	return $this->db->query("SELECT anggota.Noinduk, anggota.JK, anggota.Nama, angsuran.id_angsuran, angsuran.Tgl, angsuran.Noinduk, angsuran.jumlahangsuran, SUM(angsuran.jumlahangsuran) ini from angsuran,anggota where anggota.Noinduk = angsuran.Noinduk GROUP BY angsuran.Noinduk,anggota.Noinduk");
	}
	function tampil_data3(){
		return $this->db->get('anggota');
	}
	function tampil_data4(){
	return $this->db->query("SELECT anggota.Noinduk, anggota.JK, anggota.Nama, simpanan.id_simpanan, simpanan.tgl, simpanan.Noinduk, simpanan.jumlahsimpanan, SUM(simpanan.jumlahsimpanan) ini from simpanan,anggota where anggota.Noinduk = simpanan.Noinduk GROUP BY simpanan.Noinduk,anggota.Noinduk");
	}
}
?>