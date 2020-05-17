<?php 

class Connection
{
    public function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1; dbname=mytodo', 'root', '');
        } catch (\Throwable $e) {
            die($e->getMessage());
        }
    }
}

$pdo = Connection::make();
