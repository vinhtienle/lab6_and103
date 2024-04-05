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
//kiem tra tham so truyem
if(isset($_GET['id'])&&
    isset($_GET['firstname'])&&
    isset($_GET['lastname'])&&
    isset($_GET['email']))
    {
        //nhan gia tri tu tham so truyen
        $id=$_GET['id']; $firstname=$_GET['firstname'];
        $lastname=$_GET['lastname']; $email=$_GET['email'];
        //khai bao lenh thuc thi
        $sql="insert into myguests values ('$id','$firstname','$lastname','$email')";
        //thuc thi lenh
        $kq=$conn->query($sql);
        //doc ket qua
        echo $kq;//in ra ket qua
    }
$conn->close();//dong ket noi