<?php
    require '../classes/connectionClass.php';

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $password = md5($password);

    $con = new connection();
    $db = $con->connect();
    // if($db){
    //     echo 'success';
    // }else{
    //     echo 'failed';
    // }

    $uName = $Fname . '_' . $Lname;
        $query = "INSERT INTO users(Email_ID, Password, User_Name) VALUES('$Email', '$password', '$uName')";

        $result = mysqli_query($db, $query);
        if($result){
            echo "<script>successfully Registered!</script>";
            header("location:../Login.html");
        }else{
            echo "Failed! This Email is taken! User Another";
        }

    $con->close();

?>