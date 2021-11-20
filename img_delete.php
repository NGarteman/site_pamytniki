<?php
    if($_POST['idd'] = 333111){
        $connect = mysqli_connect('localhost', 'cd91613_graverny', 'lesha200260', 'cd91613_graverny');
        $id = $_POST['id'];
        if($_POST['form'] === 'pamatnik'){
            mysqli_query($connect, "DELETE FROM `img` WHERE `id` = '$id'");
            unlink($_POST['imgname']);
            header('Location: http://гравировка33.рф/index.php');
        }else{
            mysqli_query($connect, "DELETE FROM `img_gotovie` WHERE `id` = '$id'");
            unlink($_POST['imgname']);
            header('Location: https://гравировка33.рф/index.php');
        }
    }else{
        die();
    }

?>