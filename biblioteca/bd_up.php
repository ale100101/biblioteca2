<?php

$bd = new SQLite ("filmes.db");

$sql = "CREATE TABLE filmes (
    id INTERGER PRIMARY KAY AUTOINCREMENT,
    nome VARCHAR{200} NOT NULL,
    capa VARCHAR{200}  NOT NULL,
    autor VARCHAR{200},
)";
if ($bd->exec($sql)) echo "ok\n";
else echo "not-ok\n";
?>