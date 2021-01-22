<?php
    //DBに新規会員情報を登録する
    
    //regist.htmlから情報を取得
    $id = $_POST["ID"];
    $password = $_POST["password"];

    //DB接続に必要な情報
    $db = mysqli_connect('hostname', 'user', 'password', 'DBname');
    mysqli_set_charset($db, 'utf8');

    //DB接続, SQL実行
    try {
        $sql = "INSERT INTO `Tablename` (user, password) VALUES ('$id', '$password')";
        $result = mysqli_query($db, $sql);
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }

    //index.htmlに戻る
    header('Location: index.htmlのURL');
    exit;
?>