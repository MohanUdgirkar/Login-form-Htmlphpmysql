<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>

    
</head>
<body>
    <form action="index.php" method="Post">
        <h1><center>Login Form</Center></h1>
        <Center>
        Enter Your first name
        <input type="text" name="fname" id="fname"><br><br>
        Enter Your last name
        <input type="text" name="lname" id="lname"><br><br>
        <input type="Submit">
</Center>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="students";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection fail");
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];


$sql = "INSERT INTO students (`sr`, `fname`, `lname`) 

VALUES ('NULL', '$fname', '$lname')";

if($conn->query($sql)==true)
{
    echo "new record added";

}
else{
    echo "error:".$sql."<br>".$conn->error;

}
$conn->close();


?>
        

</body>
</html>