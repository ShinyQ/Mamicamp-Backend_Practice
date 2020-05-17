<?php 
    try {
        $pdo = new PDO('mysql:host=127.0.0.1; dbname=mytodo', 'root', '');
    } catch (\Throwable $th) {
        die($e->getMessage());
    }
?>
