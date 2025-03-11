<?php
//Procedural Way
    // $conn=mysqli_connect('localhost:3306','root','root','science');
    // if($conn)
    //     echo'connection successful';
    // else
    //     die ('connection error'.mysqli_connect_error());
    // $sql='INSERT INTO students (name,address,gender) VALUES
    //         ("Ram","Kathmandu","Male"),
    //         ("Hari","Kathmandu","Male"),
    //         ("Sita","Bhaktapur","Female")
    //         ';
    // $res=mysqli_query($conn,$sql);
    // if(!$res)
    //     echo('<br>Data insertion failed'.mysqli_error($conn));
    // echo'<br>Data successfully inserted';
    // mysqli_close($conn);
//OOP Way
    $conn=new mysqli('localhost:3306','root','root','science');
    if($conn->connect_error)
        die('connection error'.$conn->connect_error);
    echo'connection successful';
    $sql='INSERT INTO students (name,address,gender) VALUES
            ("Ram","Kathmandu","Male"),
            ("Hari","Kathmandu","Male"),
            ("Sita","Bhaktapur","Female")
            ';
    $res=$conn->query($sql);
    if($res===false)
        echo('<br>Data insertion failed'.$conn->error);
    echo'<br>Data successfully inserted';
    $conn->close();
?>