<?php
function smile($text)
{
    return preg_replace(
        [
            "/:-?\)/iu",
            "/:-?\(/iu",
            "/:P/iu",
            "/:-\*/iu"
        ],
        [
            "😍",
            "😞",
            "😛",
            "😬"
        ],
        $text
    );
}
/**
 * находит нецензурные слова
 * @param $text
 * @return mixed
 */
function checkCensor($text)
{
    preg_match_all("/.*?дурак|микроб|осталоп|идиот.*?/iu", $text, $matches);
    return $matches[0];
}
/**
 * выполняет сохранение введенного сообщения в файл json
 * @param $message
 * @param $name
 */
function saveMessage($message, $name)
{
    $data = json_decode(file_get_contents("data.json"));
    $data[] = ["msg" => $message, "name" => $name, "date_time" => time()];
    file_put_contents("data.json", json_encode($data, JSON_UNESCAPED_UNICODE));
}
function loadMessages()
{
    return json_decode(file_get_contents("data.json"), true);
}
/**
 * сохраняет нецензурные слова в файл file.txt с указанием времени и IP-адреса
 * @param $badWords
 */
function saveBadWordsToLog($badWords)
{
    foreach ($badWords as $word) {
        file_put_contents(
            "file.txt",
            "$word  $_SERVER[REMOTE_ADDR] " . date("d n Y\n"),
            FILE_APPEND
        );
    }
}
function dateFormat($time)
{
    $months = [
        1 => " января ", " февраля ",
        " марта ", " апреля ", " мая ", " июня ",
        " июля ", " августа ", " сентября ",
        " октября ", " ноября ", " декабря "
    ];
    $week = [1 => "понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
    return date("d" . $months[date('n')] . "Y(" . $week[date('w')] . ")", $time);
}
