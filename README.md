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
