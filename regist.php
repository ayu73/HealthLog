<?php
    //DBに新規会員情報を登録する
    
    //regist.htmlから情報を取得
    $id = $_POST["ID"];
    $password = $_POST["password"];

    //password暗号化
    $salt = createSalt();
    

    //PDO
    $pdo = new PDO('mysql:host=hostname;dbname=dbname', 'username', 'password');
    $statement = $pdo->query("INSERT INTO regist (id, name, password) VALUES (1, '$id', '$password')");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    
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