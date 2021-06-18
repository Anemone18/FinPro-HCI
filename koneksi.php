<?php 
$conn = mysqli_connect("localhost","root","","user malang agrotravel");
function registrasi($data)
{
    global $conn;
    $nama = mysqli_real_escape_string($conn,$data["name"]);
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    mysqli_query($conn,"INSERT INTO user VALUES ('','$nama','$email','$password')");
    return mysqli_affected_rows($conn);
}
?>