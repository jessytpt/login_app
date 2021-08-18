<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'login'
);
if(isset($conn)){
    echo 'DB is connect';
}

?>