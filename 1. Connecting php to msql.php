<?php
//Procedural Way
    // $conn=mysqli_connect('localhost:3306','root','root','');
    // if($conn)
    //     echo'connection successful';
    // else
    //     die ('connection error'.mysqli_connect_error());
    // mysqli_close($conn);
//OOp Way
    $conn=new mysqli("localhost:3306",'root',"root",'science');
    if($conn->connect_error)
        die('connection error'.$conn->connect_error);
    else
        echo'Connection successful';
    $conn->close();

?>