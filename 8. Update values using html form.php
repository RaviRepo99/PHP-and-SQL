<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        <label for="r">Enter Roll to update</label>
        <input type="number" id='r' name='roll'>
       <br> <label for="r1">Enter new Roll </label>
        <input type="number" id='r1' name='roll1'>
        <br><label for="n">Name</label>
        <input type="text" id='n' name='name'>
        <br><label for="a">Address</label>
        <input type="text" id='a' name='add'>
        <br><label for="g">Gender</label>
        <input type="text" id='g' name='gender'>
        <br><button name=submit>Submit</button>
    </form>

    <?php
    $conn=new mysqli("localhost:3306",'root','root','science');
    if($conn->connect_error)
        die('connection error'.$conn->connect_error);

    if(isset($_POST['submit']))
    {
        $m=$_POST['roll'];
        $m1=$_POST['roll1'];
        $n=$_POST['name'];
        $o=$_POST['add'];
        $p=$_POST['gender'];
        $sql="UPDATE students SET roll='$m1', name='$n', address='$o', gender='$p' where roll='$m'";
        if($conn->query($sql)===true)
            echo'Values updated successfully';
        else
            echo 'Update error'.$conn->error;  
    }
    $conn->close();
    ?>
</body>
</html>

<!-- In your SQL query, you should use single quotes ' to enclose string values, and you should use the concatenation operator 
(. in PHP) to combine variables with the SQL query. Here's the corrected SQL query:

$sql = "UPDATE science SET roll='$m', name='$n', add='$o', gender='$p' WHERE roll=51";
In this corrected query:

I've enclosed the variables $m, $n, $o, and $p in single quotes to treat them as string values in the SQL query.
I've used double quotes " to define the SQL query because using double quotes allows variable interpolation in PHP. 
If you prefer single quotes, you can concatenate the variables like this: 
'UPDATE science SET roll=' . $m . ', name=' . $n . ', add=' . $o . ', gender=' . $p . ' WHERE roll=51'. -->

<!-- PROBLEM
$sql='UPDATE students SET roll="$m1", name="$n", address="$o", gender="$p" where roll="$m"';

The reason your SQL query is not updating the values as expected is because you are using double quotes " to enclose the variables within the query. 
In SQL, double quotes are typically used for quoting table and column names, not for enclosing string values.

To correctly interpolate the PHP variables into your SQL query, you should use single quotes ' around the values. Here's the corrected SQL query:

SOLUTION
$sql = "UPDATE students SET roll='$m1', name='$n', address='$o', gender='$p' WHERE roll='$m'"; -->