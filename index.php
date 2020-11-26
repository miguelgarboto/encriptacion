<?php
$password1 = password_hash('ana', PASSWORD_DEFAULT);
$password2 = password_hash('pepe', PASSWORD_DEFAULT);
$password3 = password_hash('luis', PASSWORD_DEFAULT);

echo $password1.'<br>';
echo $password2.'<br>';
echo $password3.'<br>';
