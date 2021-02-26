<?php
include "function.php";

$badWords = checkCensor($_POST["msg"]);

if (empty($badWords)) {
    saveMessage($_POST["msg"], $_POST["name"]);
} else {
    saveBadWordsToLog($badWords);
}
header("Location: main.php");
