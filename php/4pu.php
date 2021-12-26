<?php
if($_SERVER['REQUEST_URI'] === '/about')
    echo 'О сайте';
elseif($_SERVER['REQUEST_URI'] === '/contacts')
    echo 'Контакты';
else
    echo 'Ошибка 404';