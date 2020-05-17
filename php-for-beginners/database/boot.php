<?php
    require 'database/connect.php';
    require 'database/QueryBuilder.php';

    return new QueryBuilder(Connection::make());
?>