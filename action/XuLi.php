<?php
    require '../database/Result.php';

    $ketqua = $_POST['ketqua'];
    $loinhan = $_POST['loinhan'];

    $themKetQua = new Result();
    $themKetQua-> addResult($ketqua, $loinhan);

    if($ketqua == "Có"){
        header('Location: ../page/Co/Co.php');
    }else{
        header('Location: ../page/Khong/Khong.php');
    }
?>