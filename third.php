<?php
//Пользовательская функция-обработчик
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo "Пользовательская ошибка с кодом $errno: $errstr\n";
    echo "Ошибка в строке $errline в $errfile\n";
}

// Регистрация пользовательской функции-обработчика
set_error_handler("myErrorHandler");


function find()
{
    $a = 3;
    $b = 0;
    $check = $a - 2 * $b;
    if ($check == $a) {
        trigger_error("Пользовательская ошибка!");
    }
}
echo find();