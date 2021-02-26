<?php
session_start();
include "function.php";
if (!empty($_POST["name"])) {
    if (!empty($_POST["msg"])) {

        $badWords = checkCensor($_POST["msg"]);

        if (empty($badWords)) {
            if (!isset($_SESSION["ban_time"])) {
                saveMessage($_POST["msg"], $_POST["name"]);
            }
        } else {
            $_SESSION["ban_time"] = time();
            saveBadWordsToLog($badWords);
        }
    } else {
        $_SESSION["empty_msg"] = "Сообщение не может быть пустым!";
    }
} else {
    $_SESSION["empty_name"] = "Имя не может быть пустым";
}

header("Location: main.php");
