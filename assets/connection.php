<?php

$connect = mysqli_connect('localhost', 'root', '', 'test');

if (!$connect) {
    die('Connection is failed'. mysqli_connect_error());
}