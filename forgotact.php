<?php 
include "koneksi2.php";
//$passlama=md5($_POST['password']);
$email=$_POST['email'];
$tampil=mysqli_query($conn,"SELECT * FROM user WHERE Email='$email'");
$data=mysqli_fetch_array($tampil);
if($data)
{
    $passbaru=$_POST['newpass'];
    $konfirmpass=$_POST['confirmpass'];
    if($passbaru == $konfirmpass)
    {
        $pass_ok = $konfirmpass;
        $ubah=mysqli_query($conn,"UPDATE user set Password ='$pass_ok' WHERE Email='$email'");
        if($ubah)
        {
            echo "<script>alert('Password Anda Berhasil Diubah');document.location.href='login.php'</script>";
        }
        else
        {
            echo "<script>alert('Password baru anda tidak sesuai');document.location.href='forgot.php'</script>"; 
        }
    }
}
else
{
    echo "<script>alert('Password lama Salah atau Tidak Terdaftar');document.location.href='forgot.php'</script>"; 
}
?> 