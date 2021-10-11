<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portlore";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$username = $_POST['uname'];
$mail = $_POST['mail'];
$password = $_POST['psw'];

$sql="INSERT INTO signup(username, mail, password) VALUES ('".$username."','".$mail."','".$password."')";
if($conn->query($sql)===TRUE){
    echo "<script>alert('Added successfully');window.location='home.html'</script>";
}else{
    echo "Error: " . $sql . "<br>" .$conn->error;
}

?>