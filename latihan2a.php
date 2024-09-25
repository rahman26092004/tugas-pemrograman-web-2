<html>
<head>
    <title>
        Modul 2 - latihan1
    </title>
</head>
<body>
<table border="1" cellpadding="3" cellspacing="0">
    <tr>
        <th>kolom 1</th>
        <th>kolom 2</th>
        <th>kolom 3</th>
        <th>kolom 4</th>
        <th>kolom 5</th>
    </tr>
    <?php
    $totalRows = 15;
    $totalCols = 5;


    for ($i = 1; $i <= $totalRows; $i++) {
        echo "<tr>";


        for ($j = 1; $j <= $totalCols; $j++) {
            echo "<td>Baris $i Kolom $j</td>";
        }

        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
