<?php 
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to the database failed due to ".mysqli_connect_error());
    }
    else{
        $id=$_POST['id'];
        $name = $_POST['name'];
        $number = $_POST['number'];
            $sql = "INSERT INTO `phonebook`.`data` (`id`,`name`, `phone`) VALUES ('$id','$name', '$number')";
            // echo $sql;

            if($con->query($sql) == true){
                echo "Sucessfully inserted!";
            }
            else {
                echo "<p style='color:white;background-color:red'>ERROR: $con->error<p>";
            }

        $con->close();
        header("location: profile.php");
        exit;
    }
?>


