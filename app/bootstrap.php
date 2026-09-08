<?php
session_start();
$config=require __DIR__.'/../config/database.php';
$pdo=new PDO("mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}",$config['username'],$config['password'],[
 PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
]);
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function csrf(){if(empty($_SESSION['csrf']))$_SESSION['csrf']=bin2hex(random_bytes(32));return $_SESSION['csrf'];}
function check_csrf(){if(!hash_equals($_SESSION['csrf']??'',$_POST['csrf']??'')){http_response_code(419);exit('CSRF token tidak valid');}}
function admin_required(){if(empty($_SESSION['user'])){header('Location: admin.php');exit;}}
function log_action($pdo,$action,$detail=''){if(!empty($_SESSION['user'])){$s=$pdo->prepare("INSERT INTO audit_logs(user_id,action,detail) VALUES(?,?,?)");$s->execute([$_SESSION['user']['id'],$action,$detail]);}}