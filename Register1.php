
<?php

error_reporting(0);
$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sellist = $_POST['sellist'];
$sellist1 = $_POST['sellist1'];
$sellist2 = $_POST['sellist2'];
$sellist3 = $_POST['sellist3'];
$sex = $_POST['sex'];

$conn = new mysqli("127.0.0.1:3307","root","","test1");
if($conn->connect_error)
{
    die("Connection Failed :" .$conn->connect_error);
}else{
$stl=$conn->prepare("insert into registration(fname,email,phone,sellist,sellist1,sellist2,sellist3,sex)
values(?, ?, ?, ?, ?, ?, ?, ?)");
$stl->bind_param("ssisssis",$fname,$email,$phone,$sellist,$sellist1,$sellist2,$sellist3,$sex);
$stl->execute();
echo "registration successfully done...";
$stl->close();
$conn->close();
}

?>
