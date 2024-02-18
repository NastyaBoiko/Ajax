<?php

if ($_GET['country'] == 1) {
    echo json_encode([
        "1" => "Вашингтон", 
        "2" => "Нью-Йорк"
    ]);
} else if ($_GET['country'] == 2) {
    echo json_encode([
        "3" => "Санкт-Петербург", 
        "4" => "Москва"
    ]);
} else {
    echo json_encode([]);
}