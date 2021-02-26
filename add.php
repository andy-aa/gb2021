<?php
session_start();
include "function.php";

$badWords = checkCensor($_POST["msg"]);

if (empty($badWords)) {
    saveMessage($_POST["msg"], $_POST["name"]);
} else {
    $_SESSION["ban_time"] = time();
    saveBadWordsToLog($badWords);
}
header("Location: main.php");
