<?php
// Cookies
setcookie('user', 'Igor Gabriel', time()+3600);
setcookie('email', 'dev.igorsousa@gmail.com', time()+3600);
setcookie('ultimapesquisa', 'tênis adidas', time()+3600);

echo $_COOKIE['ultimapesquisa'];