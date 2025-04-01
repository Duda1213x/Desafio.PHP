<?php


// Desafio 7.1 - Sistema de Login
function login()
{
    $senhaCorreta = "123456";
    echo "Digite a senha: ";
    $senhaDigitada = trim(fgets(STDIN));

    if ($senhaDigitada === $senhaCorreta) {
        echo "Login bem-sucedido!\n";
    } else {
        echo "Senha incorreta!\n";
    }
}

// Desafio 7.2 - Letra da Música "Cinco Patinhos"
function patinhos()
{
    echo "Digite quantos patinhos foram passear: ";
    $quantidade = (int)trim(fgets(STDIN));

    while ($quantidade > 0) {
        echo "$quantidade patinhos foram passear\n";
        echo "Além das montanhas para brincar\n";
        echo "A mamãe gritou: Quá, quá, quá, quá\n";
        $quantidade--;
        echo "Mas só " . ($quantidade > 0 ? $quantidade : "nenhum") . " patinhos voltaram de lá\n\n";
    }

    echo "A mamãe patinha foi procurar\n";
    echo "Além das montanhas na beira do mar\n";
    echo "A mamãe gritou: Quá, quá, quá, quá\n";
    echo "E os $quantidade patinhos voltaram de lá!\n";
}

// Desafio 7.3 - Simulação de Banco de Dados
function banco()
{
    $contas = [
        ["numero" => "12345-6", "cpf" => "111.222.333-44", "saldo" => 1500.00],
        ["numero" => "65432-1", "cpf" => "555.666.777-88", "saldo" => 3200.50],
        ["numero" => "98765-4", "cpf" => "999.888.777-66", "saldo" => 500.75]
    ];

    echo "Digite o número da conta: ";
    $numeroConta = trim(fgets(STDIN));

    foreach ($contas as $conta) {
        if ($conta["numero"] === $numeroConta) {
            echo "Conta: {$conta["numero"]}\n";
            echo "CPF: {$conta["cpf"]}\n";
            echo "Saldo: R$ " . number_format($conta["saldo"], 2, ',', '.') . "\n";
            return;
        }
    }

    echo "Conta não encontrada.\n";
}

// Chamadas de funções para teste
echo "Escolha o desafio para rodar (1 - Login, 2 - Patinhos, 3 - Banco): ";
$escolha = trim(fgets(STDIN));

switch ($escolha) {
    case '1':
        login();
        break;
    case '2':
        patinhos();
        break;
    case '3':
        banco();
        break;
    default:
        echo "Opção inválida!\n";
        break;
}