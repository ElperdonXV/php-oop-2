<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Product.php';

$user = new User ('Pippo', 'Baudo', 'PippoBaudox', '123456', new CreditCard('Pippo', 'Baudo', '123456789', '05/21', '123'));
var_dump($user->getCreditcard());
?>