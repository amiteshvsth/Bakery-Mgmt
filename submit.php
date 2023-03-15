<?php
$conn=mysql_close("localhost","root","","college_demo");
if($conn)
{
	echo "Successfull fbsql_database";
}
else{
	echo "connection failed";
}
$a=$_POST["aname"];
$b=$_POST["bname"];
$c=$_POST["cname"];
$d=$_POST["dname"];
$e=$_POST["ename"];
$f=$_POST["fname"];

echo $a.$b.$c.$d.$e.$f;
$sql="insert into contact(Full_name,Email,Contact_no,Choose_flavour,Address,Ask_question)values('$a','$b',$c,'$d',$e,$f)";

$query=mysql_query($conn,$sql);

if($query)
{
	echo "insert Successfull";
}
else{
	echo"insert failed";
}

?