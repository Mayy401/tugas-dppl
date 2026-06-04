<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,
    "INSERT INTO users(username, password, role)
     VALUES('$username', '$password', 'user')"
);

if($query){

    echo "Register berhasil";

}else{

    echo "Register gagal";

}

?>