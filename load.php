<?php

$connection = mysqli_connect('localhost', 'root', '', 'your_database_name');

if($connection) {
    echo 'connected';
} else {
    echo 'Failed';
}

//You can load your data from any file or database...the concept is the same
