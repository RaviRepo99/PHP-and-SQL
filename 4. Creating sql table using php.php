<?php
//Procedural Way
    // $conn=mysqli_connect("localhost:3306",'root','root','science');
    // if(!$conn)
    //     die('connection error'.mysqli_connect_error());
    // echo 'connection successful';
    // $sql='CREATE TABLE studentsdsa
    //     (
    //         roll INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    //         name VARCHAR(55),
    //         address VARCHAR(50),
    //         gender VARCHAR(5)
    //     )';
    // $res=mysqli_query($conn,$sql);
    // if(!$res)
    //     echo('<br>Could nont create table'.mysqli_error($conn));
    // else
    //     echo'<br>Table created successfully';
    // mysqli_close($conn);    
//OOP Way
    $conn=new mysqli("localhost:3306",'root','root','science');
    if($conn->connect_error)
        die('connection error'.$conn->connect_error);
    echo 'connection successful';
    $sql='CREATE TABLE studentsasd
        (
            roll INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
            name VARCHAR(55),
            address VARCHAR(50),
            gender VARCHAR(5)
        )';
    $res=$conn->query($sql);
    if($res===false)
        echo('<br>Could not create table'.$conn->error);
    else
        echo'<br>Table created successfully';
    $conn->close();    
?>