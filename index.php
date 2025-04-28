<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "54.234.153.24";
$username = "root";
$password = "Senha123";
$database = "meubanco";

// Criar conexão
$link = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

// Gerar valores aleatórios
$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(8)), 0, 16)); // Mais aleatoriedade
$host_name = gethostname();

// Usando prepared statement para evitar SQL injection
$stmt = $link->prepare("INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $valor_rand1, $valor_rand2, $valor_rand2, $valor_rand2, $valor_rand2, $host_name);

// Executar a consulta
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Fechar a declaração e a conexão
$stmt->close();
$link->close();
?>

</body>
</html>
