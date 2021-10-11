<?php
    $servername="localhost:3306";
    $username="root";
    $password="";
    $dbname="portlore";
    
    $conn=mysqli_connect($servername, $username, $password,$dbname);
    $mail = $_POST['mail'];
    $password = $_POST['psw'];

    $stmt = $conn->prepare("select * from signup where mail = ?");
    $stmt->bind_param("s", $mail);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password){
            echo "<script>alert('Successfully logged in');window.location='home.html'</script>";
        }else{
            echo "<script>alert('Invalid email or password');window.location='signin.html'</script>";
        }
    }else{
        echo "<script>alert('Invalid email or password');window.location='signin.html'</script>";
    }
?>