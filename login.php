<?php

@$name2=$_POST['name'];
@$user = $_POST['user'];
@$phno=$_POST['phno'];
@$password2 = $_POST['password'];

$conn = mysqli_connect("localhost","root","","testp");
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $sql = "INSERT INTO loginp(name2, user, phno, password2) values('$name2','$user','$phno','$password2')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo '<script>
        window.location.href="http://127.0.0.1:5501/home.html";
        alert("login successfull and data stored")
        </script>';
    } else {
        echo "error";
    }
}

 ?>