<?php

$connection = mysqli_connect('localhost', 'root', '', 'pace');

if($connection) {
    echo 'connected';
} else {
    echo 'Failed';
}