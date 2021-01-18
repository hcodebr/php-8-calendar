<?php

function prevMonth($time) {
    return date('Y-m-d', strtotime("-1 month", $time));
}

function nextMonth($time) {
    return date('Y-m-d', strtotime("+1 month", $time));
}

function getMonthTime() {

    $monthTime = strtotime(date('Y-m-1'));

    if (isset($_GET['month'])) {

        extract(date_parse_from_format ("Y-m-d", $_GET['month']));

        $monthTime = strtotime("{$year}-{$month}-1");

    }

    return $monthTime;

}