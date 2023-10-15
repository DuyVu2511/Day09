<?php
    // echo "hello"

    $connect_tdv = new mysqli('localhost', 'root', '', "QLDiem");
    if(!$connect_tdv){
        echo "Loi - ".mysqli_error($connect_tdv);
    }else{
        echo "Tran Duy Vu, xin chao";
    }
?>