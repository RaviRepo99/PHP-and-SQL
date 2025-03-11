<?php
//Procedural Way
    // $conn=mysqli_connect("localhost:3306",'root','root','');
    // if(!$conn)
    //     die("connection error".mysqli_connect_error());
    // echo'connection successful';
    // if(mysqli_select_db($conn,'science'))
    //     echo"<br>Database selected";
    // else
    //     echo'error selecting database'.mysqli_error();
    // mysqli_close($conn);    
//OOp Way
    $conn=new mysqli("localhost:3306",'root','root','');
    if($conn->connect_error)
        die("connection error".$conn->connect_error);
    echo'connection successful';
    if($conn->select_db('science')===true)
        echo"<br>database selected";
    else
        echo'error selecting database'.$conn->error;
    $conn->close();
?>
