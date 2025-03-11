<?php
//Procedural Way
    // $conn=mysqli_connect('localhost:3306','root','root','science');
    // if($conn)
    //     echo'connection successful';
    // else
    //     die ('connection error'.mysqli_connect_error());
    // $sql='UPDATE students SET name="shyam" WHERE  roll=7';
    // $res=mysqli_query($conn,$sql);
    // if(!$res)
    //     echo('<br>Data update failed'.mysqli_error($conn));
    // echo'<br>Data updated successfully';
    // mysqli_close($conn);
//OOP Way
    $conn=new mysqli('localhost:3306','root','root','science');
    if($conn->connect_error)
        die ('connection error'.$conn->connect_error);
    echo'connection successful';
    $sql='UPDATE students SET name="shyam" WHERE roll=10';
    $res=$conn->query($sql);
    if($res===false)
        echo('<br>Data update failed'.$conn->error);
    echo'<br>Data updated successfully';
    $conn->close();

?>