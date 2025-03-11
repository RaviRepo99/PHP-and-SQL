<?php
//Procedural Way
    // $conn=mysqli_connect('localhost:3306','root','root','science');
    // if($conn)
    //     echo'connection successful';
    // else
    //     die ('connection error'.mysqli_connect_error());
    // $sql='DELETE FROM students WHERE  roll=15';
    // $res=mysqli_query($conn,$sql);
    // if(!$res)
    //     die('<br>Data delettion failed'.mysqli_error($conn));
    // echo'<br>Data successfully deleted';
    // mysqli_close($conn);
//OOP Way
    $conn=new mysqli('localhost:3306','root','root','science');
    if($conn->connect_error)
        die ('connection error'.$conn->connect_error);    
    echo'connection successful';
    $sql='DELETE FROM students WHERE roll=14';
    $res=$conn->query($sql);
    if($res===false)
        echo('<br>Data delettion failed'.$conn->error);
    echo'<br>Data successfully deleted';
    $conn->close();
?>