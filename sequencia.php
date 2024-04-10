<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

h2 {
    color: #333;
    margin-bottom: 10px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 5px;
}

p {
    color: red;
}

    </style>
</head>
<body>
    <h1>Sequência de Fibonacci</h1>
    <form method="POST">
        <label for="num_termos">Número de Termos:</label>
        <input type="number" id="num_termos" name="num_termos" required>
        <button type="submit">Gerar Sequência</button>
    </form>

    <?php
    function fibonacci($n) {
        $fibonacci = array();
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }

    // Verifica se o formulário foi enviado
    if (isset($_POST['num_termos'])) {
        // Obtém o número de termos informado pelo usuário
        $num_termos = intval($_POST['num_termos']);

        // Verifica se o número de termos é válido
        if ($num_termos > 0) {
            // Chamando a função e armazenando o resultado em uma variável
            $resultado = fibonacci($num_termos);

            // Exibindo a sequência gerada
            echo "<h2>Sequência de Fibonacci com $num_termos termos:</h2>";
            echo "<ul>";
            foreach ($resultado as $valor) {
                echo "<li>$valor</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Por favor, informe um número inteiro positivo.</p>";
        }
    }
    ?>

</body>
</html>

