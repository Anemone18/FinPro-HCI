<?php
//session_start();
include 'koneksi2.php';

$nama=$_POST['nama'];
$tanggal=$_POST['tanggal'];
$destinasi=$_POST['destinasi'];
$paket=$_POST['paket'];
$jumlah=$_POST['jumlah'];
$email=$_POST['email'];
$nomor=$_POST['no'];
$jumlah_tiket=$_POST['jumlah'];
if($paket=="Kusuma Paket Hore"){
    $totalharga=$jumlah_tiket*105000;
}
else if($paket=="Kusuma Paket Boom"){
    $totalharga=$jumlah_tiket*115000;
}
else if($paket=="Kusuma Petik Apel"){
    $totalharga=$jumlah_tiket*60000;
}
else if($paket=="Petik Madu + Tour"){
    $totalharga=$jumlah_tiket*50000;
}
else if($paket=="Pujon Paket Komplit"){
    $totalharga=$jumlah_tiket*100000;
}
else if($paket=="Wonosari Tea + Tour"){
    $totalharga=$jumlah_tiket*50000;
}
else if($paket=="Petik Stroberi + Tour"){
    $totalharga=$jumlah_tiket*50000;
}

$sql="INSERT INTO jual (nama,tanggal,destinasi,paket,jumlah_tiket,email,nomortel,totalharga) VALUES ('$nama','$tanggal','$destinasi','$paket','$jumlah','$email','$nomor','$totalharga')";
$hasil=mysqli_query($conn,$sql);
if ($hasil) {
    echo "<script>alert('Pembelian Berhasil!');document.location.href='pembayaran.php'</script>";
    exit;
     }
   else {
    echo "<script>alert('Password Salah');</script>";
    exit;
   }
?>