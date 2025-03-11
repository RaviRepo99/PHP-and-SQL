<?php
//Procedural Way
    // $conn=mysqli_connect("localhost:3306","root",'root','');
    // if(!$conn)
    //     die("Connection error".mysqli_connect_error());
    // echo"Connection successful";
    // $sql="CREATE DATABASE science";
    // $res=mysqli_query($conn,$sql);
    // if(!$res)
    //     echo('<br>Could not create database'.mysqli_error($conn));
    // else
    //     echo'<br>Database created Successfully';
    // mysqli_close($conn);
//OOp Way
    $conn=new mysqli("localhost:3306",'root',"root",'');
    if($conn->connect_error)
        die('connection error'.$conn->connect_error);
    else
        echo'Connection successful';
    $sql="CREATE DATABASE science";
    $res=$conn->query($sql);
    if ($res==false)
        echo('<br>Could not create database'.$conn->error);
    else
        echo'<br>Database created Successfully';
    $conn->close();

    
?>