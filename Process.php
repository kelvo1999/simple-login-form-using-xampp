<?php
$Username=$_POST['Username'];
$Password=$_POST['Password'];

$Username = stripcslashes('Username');
$Password = stripcslashes('Password');
$Username = mysql_real_escape_string($Username);
$Password = mysql_real_escape_string($Password);

mysql_connect("localhost","root","");
mysql_select_db("form_login");

$resulf = mysql_query("select * rom users where Username = '$Username' and Password = '$Password'")
or die ("Fail to query database ".mysql_error());
$row = mysql_fetch_array($resulf);
if($row['Username']==$Username && $row['Password']== $Password){
    echo "Login Successfull -> Welcome ".$row['Username'];
}
else{
    echo"Failed login try again";
}
?>