<?php
	if(isset($_GET['page'])) {  //jika page tidak kosong
	/* 
	membuat kondisi ketika ada pemanggilan file 
	menggunakan kata kunci page
	*/
		switch ($_GET['page']) {
			
			case 'tampilR' :
				require_once "tampil_retribusi.php";
				break;
			case 'tambahR' :
				require_once "tambah_retribusi.php";
				break;
			case 'hapusR' :
				require_once "h_r.php";
				break;
			case 'detilR' :
				require_once "detil_retribusi.php";
				break;
			case 'editR' :
				require_once "edit_retribusi.php";
				break;
			case 'tambahH' :  //jika page=tambahH maka...
				require_once "tambah_harga.php";
				break;
			case 'tampilK' :
				require_once "tampil_komoditi.php";
				break;
			case 'hapusK' :
				require_once "h_k.php";
				break;
			case 'detilH' :
				require_once "detil_harga.php";
				break;
			case 'editH' :
				require_once "edit_harga.php";
				break;

			case 'tambahK' :  //jika page=tambahH maka...
				require_once "tambah_komoditi.php";
				break;
			case 'detilK' :
				require_once "detil_komoditi.php";
				break;
			case 'editK' :
				require_once "edit_komoditi.php";
				break;
			// 2
			case 'tambahU' :
				require_once "tambah_user.php";
				break;
			case 'tampilU' :
				require_once "tampil_user.php";
				break;
			case 'detilU' :
				require_once "detil_user.php";
				break;
			case 'editU' :
				require_once "edit_user.php";
				break;
			case 'hapusU' :
				require_once "h_u.php";
				break;
			// 3
			case 'tambahT' :
				require_once "tambah_toko.php";
				break;
			case 'tampilT' :
				require_once "tampil_toko.php";
				break;
			case 'detilT' :
				require_once "detil_toko.php";
				break;
			case 'editT' :
				require_once "edit_toko.php";
				break;
			case 'hapusT' :
				require_once "h_t.php";
				break;
			// 4
			case 'tambahJ' :
				require_once "tambah_jualan.php";
				break;
			case 'tampilJ' :
				require_once "tampil_jualan.php";
				break;
			case 'detilJ' :
				require_once "detil_jualan.php";
				break;
			case 'editJ' :
				require_once "edit_jualan.php";
				break;
			case 'hapusJ' :
				require_once "h_j.php";
				break;
			// 5
			case 'tambahP' :
				require_once "tambah_pasar.php";
				break;
			case 'tampilP' :
				require_once "tampil_pasar.php";
				break;
			case 'detilP' :
				require_once "detil_pasar.php";
				break;
			case 'editP' :
				require_once "edit_pasar.php";
				break;
			case 'hapusP' :
				require_once "h_p.php";
				break;
			case 'login' :
				require_once "login.php";
				break;
			case 'galeri' :
				require_once "coba.php";
				break;
			}
	}else{  //jika page kosong
		require_once "tambah_harga.php";
	}
?> 
