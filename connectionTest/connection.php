<?php
$link = mysqli_connect("den1.mysql2.gear.host", "gameland", "Vf62202_4!Or");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

mysqli_query($link,"INSERT INTO CONTATO(NOME, EMAIL, ASSUNTO, MENSAGEM) VALUES ("jose"," manuel@gmail.com", "dfsdf", "sdfsdfd");");

echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);