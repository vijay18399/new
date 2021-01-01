<html lang="en">
<?php require 'db_access.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part B,C</title>
</head>
<body>
<table>

<?php
$sql = "SELECT count(*) as TotalCount from information";
$result = $connection->query($sql);
$data = mysql_fetch_assoc($result);
echo "Count is " . $data['TotalCount'];
?>

    <?php
$sql = "SELECT * FROM `information ` ";
$result = $connection->query($sql);
if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {

        echo '<tr><td>' . $row["name"] . '</td><td>' . $row["age"] . '</td><td>' . $row["sex"] . '</td></tr>';
    }
}
?>
    </table>
</body>
</html>
