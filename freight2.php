<html>
<body>
<table border="0" cellpadding="3">
    <tr>
        <td bgcolor="#cccccc" align="center">Distance</td>
        <td bgcolor="#cccccc" align="center">Cost</td>
    </tr>
    <?php
    for ($distance = 50; $distance <= 250; $distance += 50) {
        echo "<tr>
              <td align = \"right\">".$distance."</td>
              <td align = \"right\">". $distance / 10 ."</td>
              </tr>\n";
    }
    ?>
</table>
</body>
</html>