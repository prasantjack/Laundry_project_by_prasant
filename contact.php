<?php

	@$name1 = $_POST['name'];
	@$email = $_POST['email'];
	@$message1 = $_POST['message'];
	
$conn = mysqli_connect("localhost","root","","testp");
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $sql = "INSERT INTO contactp(name1,email,message1) values('$name1','$email','$message1')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo '<script>
        window.location.href="http://127.0.0.1:5501/home.html";
        alert("your feedback is successfully stored!!!!!")
        </script>';
    } else {
        echo "error";
    }
}

	
?>