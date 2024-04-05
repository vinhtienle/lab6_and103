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
$sql="select * from mytable";
//thuc thi lenh
$kq=$conn->query($sql);
//doc ket qua
while($row[]=$kq->fetch_assoc())//line.readline()
{
    $json=json_encode($row);//chuyen sang json
}
echo '{"product":'.$json.'}';//in ra ket qua
$conn->close();//dong ket noi