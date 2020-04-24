<?php
include "db.php";

function out_arr()
{
    global $books;
    // делаем переменную $books глобальной
    $arr_out = array();
    $arr_out[] = "<table  class='table table-sm '   data-aos='fade-up' data-aos-delay='100'>";
    $arr_out[] = "<thead><tr ><th scope='col'>№</th><th scope='col'>Title</th><th scope='col'>Author</th><th scope='col'>Year</th><th scope='col'>Genre</th><th scope='col'>Price ($)</th><th scope='col'>Amount</th></tr></thead><tbody>";
    foreach ($books as $book) {
        static $i = 1;
        //статическая глобальная переменная-счетчик
        $str = "<tr>";
        $str .= "<td>" . $i . "</td>";
        foreach ($book as $key => $value) {
            if (!is_array($value)) {
                $str .= "<td>$value</td>";
            } else {
                foreach ($value as $k => $v) {
                    $str .= "<td>$v</td>";
                }

            }

        }
        // $str .= "<td>" . (array_sum($book['population']) / count($book['population'])) . "</td>";
        $str .= "</tr>";
        $arr_out[] = $str;
        $i++;
    }
    $arr_out[] = "</tbody></table>";
    return $arr_out;
}

function check_authorize($log)
{
    global $users;
    return in_array($log, $users);
}

function check_admin($log, $pas)
{
    global $users;
    if (in_array($log, $users) && $pas == $users["admin"]) {
        return true;
    } else {
        return false;
    }

}

function check_log($log)
{
    return $log == "admin";
}

function title($a, $b)
{ // функция, определяющая способ сортировки (по названию)
    if ($a["title"] < $b["title"]) {
        return -1;
    } elseif ($a["title"] == $b["title"]) {
        return 0;
    } else {
        return 1;
    }

}

function author($a, $b)
{ // функция, определяющая способ сортировки (по овтору)
    if ($a["author"] < $b["author"]) {
        return -1;
    } elseif ($a["author"] == $b["author"]) {
        return 0;
    } else {
        return 1;
    }

}

function year($a, $b)
{ // функция, определяющая способ сортировки (по году)
    if ($a["year"] < $b["year"]) {
        return -1;
    } elseif ($a["year"] == $b["year"]) {
        return 0;
    } else {
        return 1;
    }

}

function genre($a, $b)
{ // функция, определяющая способ сортировки (по жанру)
    if ($a["genre"] < $b["genre"]) {
        return -1;
    } elseif ($a["genre"] == $b["genre"]) {
        return 0;
    } else {
        return 1;
    }

}

function price($a, $b)
{ // функция, определяющая способ сортировки (по цене)
    if ($a["price"] < $b["price"]) {
        return -1;
    } elseif ($a["price"] == $b["price"]) {
        return 0;
    } else {
        return 1;
    }

}
// function population($a, $b)
// { // функция, определяющая способ сортировки (по сумме населения за 2000 и за 2010 годы)
//     if ($a["population"]["2000"] + $a["population"]["2010"] < $b["population"]["2000"] + $b["population"]["2010"]) {
//         return -1;
//     } elseif ($a["population"]["2000"] + $a["population"]["2010"] == $b["population"]["2000"] + $b["population"]["2010"]) {
//         return 0;
//     } else {
//         return 1;
//     }

// }
function sorting($p)
{
    global $books;
    uasort($books, $p);
}

//echo check_admin("user", "user");


function out_arr_search(array $arr_index = null) {
    global $books; // делаем переменную $books глобальной    
    $arr_out = array();
    $arr_out[] = "<table  class='table table-sm '   data-aos='fade-up' data-aos-delay='100'>";
    $arr_out[] = "<thead><tr ><th scope='col'>№</th><th scope='col'>Title</th><th scope='col'>Author</th><th scope='col'>Year</th><th scope='col'>Genre</th><th scope='col'>Price ($)</th><th scope='col'>Amount</th></tr></thead><tbody>";
    foreach ($books as $index => $book) {
        if ($arr_index != null && in_array($index, $arr_index)) {
            static $i = 1;
            $str = "<tr>" . "<td>" . $i . "</td>";
            foreach ($book as $key => $value) {
                if (!is_array($value)) {
                    $str .= "<td>$value</td>";
                } else {
                    foreach ($value as $k => $v) {
                        $str .= "<td>$v</td>";
                    }
                }
            }
            // $str .= "<td>" . (array_sum($book['population']) / count($book['population'])) . "</td></tr>";
            $str .= "</tr>";
            $arr_out[] = $str;
            $i++;
        }
    }
    $arr_out[] = "</tbody></table>";
    return $arr_out;
}


function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function out_search($data) {
    global $books;    // делаем переменную $books глобальной
    $arr_index = array();
    foreach ($books as $book_number => $book) {
        foreach ($book as $key => $value) {
            if (!is_array($value)) {
                if (strstr($value, $data)){
                    $arr_index[] = $book_number;
                }
            }
            else {
                foreach ($value as $k => $v) {
                    if (strstr($v, $data) || strstr($k, $data)) {
                        $arr_index[] = $book_number;
                    }
                }
            }
        }
    }
    return out_arr_search(array_unique($arr_index));
}

