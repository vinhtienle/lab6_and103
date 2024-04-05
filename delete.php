<?php
//chon full quyen truy cap
header('Access-Control-Allow-Origin: *');
//khai bao thong tin server
$ser="localhost";
$u="root";
$p="";
$db="b";
//ket noi voi csdl
$conn=new mysqli($ser,$u,$p,$db);
//khai bao lenh thuc thi
$sql="delete from myguests where id= '1'";
//thuc thi lenh
$kq=$conn->query($sql);
//doc ket qua

echo $kq;//in ra ket qua
$conn->close();//dong ket noi