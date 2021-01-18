<?php

require_once("functions.php");

$monthTime = getMonthTime();

echo '<link href="styles.css" rel="stylesheet">';

echo "<header>";
echo '<a href="?month='.prevMonth($monthTime).'">Anterior</a>';
echo '<h1>'.date('F Y', $monthTime).'</h1>';
echo '<a href="?month='.nextMonth($monthTime).'">Próximo</a>';
echo "</header>";

echo "<table>";

echo "
    <thead>
        <tr>
            <th>DOM</th>
            <th>SEG</th>
            <th>TER</th>
            <th>QUA</th>
            <th>QUI</th>
            <th>SEX</th>
            <th>SAB</th>
        <tr>
    </thead>
";

$startDate = strtotime("last sunday", $monthTime);

echo "<tbody>";

for ($row = 0; $row < 6; $row++) {

    echo "<tr>";

    for ($column = 0; $column < 7; $column++) {

        if (date('Y-m', $startDate) !== date('Y-m', $monthTime)) {
            echo '<td class="other-month">';
        } else {
            echo "<td>";
        }

        echo date('j', $startDate)."</td>";

        $startDate = strtotime("+1 day", $startDate);

    }

    echo "</tr>";

}

echo "</tbody>";

echo "</table>";
