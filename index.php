<?php
$db = new SQLite3('test.db');
$db->exec("CREATE TABLE IF NOT EXISTS mensajes (id INTEGER PRIMARY KEY, contenido TEXT)");
$db->exec("INSERT INTO mensajes (contenido) VALUES ('Hola mundo, este es un mensaje de prueba')");
$result = $db->query("SELECT * FROM mensajes");
while ($row = $result->fetchArray()) { echo $row['contenido'] . "<br>"; }
?>
