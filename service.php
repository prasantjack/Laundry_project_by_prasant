<?php

	$tshirts = $_POST['tshirts'];
	$woolen = $_POST['woolen'];
	$bottom = $_POST['bottom'];
	$foot = $_POST['foot'];
    $others = $_POST['others'];
	$phno= $_POST['phno'];
	
	$conn = mysqli_connect('localhost','root','','testp');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO servicep(tshirts,woolen,bottom,foot,others,phno)
		 values('$tshirts','$woolen','$bottom','$foot','$others','$phno')";
        $query = mysqli_query($conn, $sql);
        if($query)
      {
        echo '<script>
        window.location.href="http://127.0.0.1:5501/home.html";
        alert("login successfull and data stored for your service!!!!!!!!")
        </script>';
    }
    else{
    echo "error";
    }
	}
?>
	