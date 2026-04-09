<?php
require_once 'Helpers/functions.php';
require_once 'config.php';
require_once 'DataBase.php';
$conn=DataBase::getInstance()->getConnection();
$stmt = $conn->query('SELECT * FROM users');
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
require_once './routes.php';
