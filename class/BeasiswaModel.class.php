<?php

class BeasiswaModel {


    public function nilai(){
    	if(isset($_POST['kirim'])){
	    	$nama = $_POST['datanama'];
	        $nim = $_POST['datanim'];
	        $ipk = $_POST['dataipk'];
	        $jenis = $_POST['jenis'];
	        $email = $_POST['dataemail'];
	        if (isset($_POST['sertifikat'])) {
	        	$sertifikat = $_POST['sertifikat'];
	        };
	        $kontribusi = $_POST['kontribusi'];
			
			$extension = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
			$photo = "uploaded." . $extension;
			if (file_exists($photo)) {
			unlink($photo);
			}
			move_uploaded_file($_FILES['foto']['tmp_name'], $photo);
		}      
    	$data = array('datanama'=>$nama, 'datanim'=>$nim, 'dataipk'=>$ipk, 'jenis'=>$jenis, 'dataemail'=>$email, 'sertifikat'=>$sertifikat, 'kontribusi'=>$kontribusi, 'foto'=>$photo);
    return $data;
    }

    public function prodiAcak(){
    	$prodi=['Teknik Informatika', 'Teknik Komputer', 'Pend. Teknologi Informasi', 'Sistem Informasi', 'Teknologi Informasi'];
    	$acak = $prodi[array_rand($prodi)];
    	return $acak;
    }

    
}