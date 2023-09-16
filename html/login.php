<?php
$userid =  $_POST['userid'];
$password = $_POST['password'];
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
try {
    $pdo = new PDO("sqlite:../db.sqlite3", null, null, $options);
    $sql = "SELECT * FROM users WHERE userid = '$userid'";
// var_dump($sql);    
    $stmt = $pdo->query($sql);
    $user = $stmt->fetch();
// var_dump($user);
    if ($user && password_verify($password, $user['password'])) {
        echo "ログイン成功:" . htmlspecialchars($user['userid']);
    } else {
        echo "ログイン失敗";
    }
} catch (Exception $e) {
    echo "エラー:" . htmlspecialchars($e->getMessage());
}
