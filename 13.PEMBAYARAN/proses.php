<?php

//load file koneksi.php
include "koneksi.php";
//



$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$biaya = 100000;
$order_id=rand();
$transaction_status=1;

//menginput data ke database
mysqli_query($koneksi,"insert into peserta values('','$nama','$alamat','$order_id','$transaction_status','$email')");


//mengalihkan halaman kembali ke index.php
header("location:data.php");
?>