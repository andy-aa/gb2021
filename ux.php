<?php

function htmlTable()
{
?>
    <table class="table table-bordered border-primary tab text-break">
        <tr class="rowses">
            <th class="w-25 p-3">Дата</th>
            <th class="w-25 p-3">Комментарий</th>
            <th class="w-25 p-3">Имя</th>
        </tr>
        <?php
        include "function.php";
        foreach (loadMessages() as $row) {
            echo "<tr><td class='tab-col'>" .  dateFormat($row["date_time"])  . "</td><td>" . smile($row["msg"]) . "</td><td>" . $row["name"] .
                "</td></tr>";
        }
        ?>
    </table>
<?php
}
