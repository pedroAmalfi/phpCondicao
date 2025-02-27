# Estruturas Condicionais em PHP

Este repositório apresenta exemplos e explicações sobre estruturas condicionais em PHP (if, else if, else), juntamente com um pequeno projeto prático para demonstrar o uso dessas estruturas.

## Estruturas Condicionais em PHP

### 1. **IF**
A estrutura `if` executa um bloco de código apenas se a condição for verdadeira.

```php
if ($idade >= 18) {
    echo "Você é maior de idade.";
}
```

### 2. **IF e ELSE**
Caso a condição `if` não seja atendida, o bloco `else` será executado.

```php
if ($numero % 2 == 0) {
    echo "Número par.";
} else {
    echo "Número ímpar.";
}
```

### 3. **IF, ELSE IF e ELSE**
Se houver várias condições, podemos usar `else if` para verificar diferentes possibilidades antes do `else` final.

```php
if ($salario <= 1000) {
    echo "Aumento de 20%.";
} elseif ($salario > 1000 && $salario <= 2000) {
    echo "Aumento de 15%.";
} else {
    echo "Aumento de 10%.";
}
```

## Projeto Prático
Este repositório inclui um pequeno sistema que recebe um número via formulário e informa se ele é positivo, negativo ou zero.

### Arquivos:
- `index.php`: Formulário HTML que envia um número para `calcular.php`.
- `calcular.php`: Processa os dados e exibe o resultado usando estrutura condicional.

### Como usar
1. Abra `index.php` em um servidor local.
2. Insira um número e envie o formulário.
3. Veja o resultado exibido em `calcular.php`.

Este exemplo prático reforça o aprendizado sobre estruturas condicionais em PHP!

## Exercícios
1. Faça um programa que receba dois números e informe se o primeiro é maior ou se é o segundo.
2. Faça um programa que receba 4 notas de alunos, calcule a média e, se a média for maior que 5, informe que o aluno está aprovado; senão, informe que o aluno está reprovado.
3. Faça um programa que receba o salário de um funcionário e a quantidade de filhos que ele possui. Se ele receber até R$800,00, acrescente o salário dele em 30%. Se a quantidade de filhos dele for maior que 1, acrescente no salário dele R$90,00 para cada filho que possuir a mais que 1.
4. Faça um programa onde o usuário entre com peso e altura e calcule o IMC do usuário. Informe o resultado e a condição atual dele com base na tabela: IMC = Peso / Altura².
