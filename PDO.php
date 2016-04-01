<meta charset ="utf-8">
<?php
$host='localhost';
$dbname='spisok';
$user='root';
 $password='';
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec("set names utf8");
}
catch(PDOException $e) {
    echo $e->getMessage();
}
$stmt = $db->query('SELECT * FROM lk7;');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach ($stmt as $row)
{
    echo "<p>".  $row['Name']. "&nbsp;" . $row['Fname']."</p>";
}
?>