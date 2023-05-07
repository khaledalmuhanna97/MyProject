<?php
$sqlS = 'SELECT * FROM users ORDER BY RAND() LIMIT 1 ';
$result = mysqli_query($conn, $sqlS);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>