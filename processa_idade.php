<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dataNascimento = $_POST['data_nascimento'];

    // Verifica se a data de nascimento foi enviada
    if (!empty($dataNascimento)) {
        // Calcula a idade
        $dataAtual = new DateTime();
        $dataNascimento = new DateTime($dataNascimento);
        $idade = $dataAtual->diff($dataNascimento)->y;

        // Exibe o resultado
        echo "A sua idade é: " . $idade . " anos.";
    } else {
        echo "Por favor, insira uma data de nascimento válida.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
