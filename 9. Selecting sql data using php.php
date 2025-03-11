<?php
//OOp Way
    $conn=new mysqli("localhost:3306",'root',"root",'science');
    if($conn->connect_error)
        die('connection error'.$conn->connect_error);
    else
        echo'Connection successful';
    $sql='SELECT * FROM students';
    $res=$conn->query($sql);
    if($res->num_rows>0)
    // if(mysqli_num_rows($res)>0)
    {
        echo'<table border=1 width=50%>';
        echo'<tr>';
        echo'<th>'.'Roll'.'</td>';
        echo'<th>'.'Name'.'</td>';
        echo'<th>'.'Address'.'</td>';
        echo'<th>'.'Gender'.'</td>';
        echo'</tr>';
        while($row=$res->fetch_assoc())
        // while($row=mysqli_fetch_assoc($res))
        {
            echo'<tr>';
            echo'<td>'.$row['roll'].'</td>';
            echo'<td>'.$row['name'].'</td>';
            echo'<td>'.$row['address'].'</td>';
            echo'<td>'.$row['gender'].'</td>';
            echo'</tr>';
        }
    }
    else    
        echo'<br>There are no records';
    echo'</table>';
    $conn->close();

?>