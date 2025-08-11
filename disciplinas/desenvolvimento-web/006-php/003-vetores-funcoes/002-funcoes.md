# Funções em PHP

Funções são blocos de código reutilizáveis que desempenham um papel essencial na modularização de programas, dividindo problemas complexos em partes menores e mais gerenciáveis. Em PHP, há funções nativas, fornecidas pela linguagem, e funções definidas pelo usuário, criadas pelo desenvolvedor para tarefas específicas. Este conteúdo organiza e aprimora as explicações sobre funções em PHP, detalhando sintaxe, boas práticas, exemplos práticos e adicionando novos exemplos para reforçar o aprendizado.

---

## 1. Introdução às Funções

Funções em PHP são trechos de código encapsulados que executam uma tarefa específica e podem ser invocados em qualquer parte do programa. Elas promovem:

- **Reutilização**: Evitam a repetição de código.
- **Modularização**: Facilitam a manutenção e o entendimento do código.
- **Clareza**: Dividem a lógica em blocos com propósitos específicos.

PHP oferece:

- **Funções nativas**: Como `print_r()`, `count()`, `array_push()`, usadas em exemplos anteriores.
- **Funções definidas pelo usuário**: Criadas pelo desenvolvedor para atender necessidades específicas.

---

## 2. Sintaxe de Funções

Uma função em PHP é definida com a palavra reservada `function`, seguida por um nome, parâmetros (opcionais) e um bloco de código. Ela pode ou não retornar um valor.

### Sintaxe Básica

```php
function nomeDaFuncao($parametro1, $parametro2, ...) {
    // Código da função
    return $valor; // Opcional
}
```

- **function**: Indica que uma função está sendo definida.
- **nomeDaFuncao**: Nome único, seguindo as mesmas regras de nomenclatura de variáveis.
- **($parametro1, $parametro2, ...)**: Parâmetros opcionais, recebidos pela função.
- **{}**: Bloco de código que contém as instruções.
- **return**: Devolve um valor ao chamador (opcional).

### Exemplo Básico

```php
<?php
// Definindo a função
function soma($numero1, $numero2) {
    return $numero1 + $numero2;
}

// Chamando a função
$num1 = 10;
$num2 = 15;
$resultado = soma($num1, $num2);

// Exibindo o resultado
function imprimirResultado($numero) {
    echo "O resultado da operação é: $numero";
}

imprimirResultado($resultado);
?>
```

**Saída**: `O resultado da operação é: 25`

**Explicação**:

- A função `soma` recebe dois parâmetros, realiza a adição e retorna o resultado.
- A função `imprimirResultado` exibe o valor recebido, sem retornar nada.
- As funções são chamadas antes de serem definidas, o que é permitido em PHP (exceto em alguns casos, como funções dentro de classes).

---

## 3. Boas Práticas

Adotar boas práticas ao criar funções melhora a legibilidade, manutenção e escalabilidade do código.

1. **Nomenclatura**:

   - Use nomes descritivos que indiquem a funcionalidade (ex.: `calcularMedia`, `enviarEmail`).
   - Escolha um padrão de nomenclatura:
     - **snake_case**: `calcular_media` (palavras separadas por `_`).
     - **camelCase**: `calcularMedia` (primeira letra minúscula, palavras seguintes com maiúscula inicial).
   - Mantenha consistência no padrão escolhido.

2. **Indentação**:

   - Indente o código dentro das funções (geralmente com 4 espaços ou 1 tabulação) para indicar hierarquia.
   - Exemplo:
     ```php
     function exemplo() {
         echo "Linha indentada";
     }
     ```

3. **Posicionamento da Chave**:

   - **Estilo 1**: Chave na mesma linha dos parênteses (mais compacto).
     ```php
     function exemplo() {
         echo "Código";
     }
     ```
   - **Estilo 2**: Chave na linha seguinte (usado nos exemplos anteriores, mais legível para alguns).
     ```php
     function exemplo()
     {
         echo "Código";
     }
     ```
   - Escolha um estilo e seja consistente.

4. **Parâmetros e Retorno**:

   - Especifique claramente os tipos de parâmetros esperados (se possível, com tipagem em PHP 7+).
   - Use `return` para devolver resultados úteis, evitando efeitos colaterais desnecessários (ex.: `echo` dentro da função).

5. **Documentação**:
   - Adicione comentários ou use PHPDoc para descrever a função, parâmetros e retorno.
   - Exemplo:
     ```php
     /**
      * Calcula a média de duas notas
      * @param float $nota1 Primeira nota
      * @param float $nota2 Segunda nota
      * @return float Média das notas
      */
     function calcularMedia($nota1, $nota2) {
         return ($nota1 + $nota2) / 2;
     }
     ```

---

## 4. Exemplos Práticos

### Exemplo 1: Função com Parâmetros Opcionais

Parâmetros podem ter valores padrão, usados quando o argumento não é fornecido.

```php
<?php
function saudacao($nome, $saudacao = "Olá") {
    return "$saudacao, $nome!";
}

echo saudacao("João"); // Usa o valor padrão
echo "<br>";
echo saudacao("Maria", "Bem-vinda");
?>
```

**Saída**:

```
Olá, João!
Bem-vinda, Maria!
```

**Explicação**: A função `saudacao` tem um parâmetro opcional `$saudacao` com valor padrão `"Olá"`. Se não for especificado, o valor padrão é usado.

### Exemplo 2: Função com Array como Parâmetro

Funções podem manipular arrays, como calcular a média de notas.

```php
<?php
function calcularMediaTurma($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    return $quantidade > 0 ? $soma / $quantidade : 0;
}

$notas = [8.7, 9.2, 7.8, 8.7];
$media = calcularMediaTurma($notas);
echo "Média da turma: $media";
?>
```

**Saída**: `Média da turma: 8.6`

**Explicação**: A função usa as funções nativas `array_sum()` e `count()` para calcular a média, com uma verificação para evitar divisão por zero.

### Exemplo 3: Função com Array Multidimensional

Combinando com o conceito de arrays multidimensionais, podemos processar notas de alunos.

```php
<?php
function exibirNotasAlunos($alunos) {
    foreach ($alunos as $aluno) {
        $media = ($aluno[1] + $aluno[2]) / 2;
        echo htmlspecialchars($aluno[0]) . ": P1: {$aluno[1]}, P2: {$aluno[2]}, Média: $media<br>";
    }
}

$alunos = [
    ["João", 8.7, 9.4],
    ["Maria", 9.2, 8.9],
    ["Luís", 7.8, 8.4]
];

exibirNotasAlunos($alunos);
?>
```

**Saída**:

```
João: P1: 8.7, P2: 9.4, Média: 9.05
Maria: P1: 9.2, P2: 8.9, Média: 9.05
Luís: P1: 7.8, P2: 8.4, Média: 8.1
```

**Explicação**: A função `exibirNotasAlunos` itera sobre um array multidimensional, calcula a média de cada aluno e exibe os dados de forma formatada.

---

## 5. Funções Nativas

PHP possui uma vasta biblioteca de funções nativas para diversas finalidades:

- **Arrays**: `array_push()`, `array_splice()`, `count()`, `array_sum()`.
- **Strings**: `strlen()`, `strtoupper()`, `substr()`.
- **Arquivos**: `file_get_contents()`, `file_put_contents()`.
- **Banco de Dados**: `mysqli_connect()`, `pdo_query()`.

**Dica**: Consulte a [documentação oficial do PHP](https://www.php.net/manual/en/funcref.php) para explorar todas as funções nativas.

---

## 6. Roteiro de Prática

### Objetivo

Criar uma aplicação PHP que use funções para processar e exibir notas de alunos armazenadas em um array multidimensional.

### Código Completo

```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Notas com Funções</title>
</head>
<body>
    <h1>Notas dos Alunos</h1>
    <?php
    // Função para calcular a média de um aluno
    function calcularMedia($nota1, $nota2) {
        return ($nota1 + $nota2) / 2;
    }

    // Função para exibir as notas e a média
    function exibirNotasAlunos($alunos) {
        foreach ($alunos as $aluno) {
            $media = calcularMedia($aluno[1], $aluno[2]);
            echo htmlspecialchars($aluno[0]) . ": P1: {$aluno[1]}, P2: {$aluno[2]}, Média: $media<br>";
        }
    }

    // Array multidimensional de alunos
    $alunos = [
        ["João", 8.7, 9.4],
        ["Maria", 9.2, 8.9],
        ["Luís", 7.8, 8.4],
        ["Fernanda", 8.7, 9.1]
    ];

    // Chamando a função
    exibirNotasAlunos($alunos);
    ?>
</body>
</html>
```

**Saída no Navegador**:

```
Notas dos Alunos
João: P1: 8.7, P2: 9.4, Média: 9.05
Maria: P1: 9.2, P2: 8.9, Média: 9.05
Luís: P1: 7.8, P2: 8.4, Média: 8.1
Fernanda: P1: 8.7, P2: 9.1, Média: 8.9
```

### Instruções

1. **Salve o Código**:
   - Crie um arquivo `notas_funcoes.php` na pasta `htdocs` do XAMPP.
2. **Execute**:
   - Inicie o Apache no XAMPP e acesse `http://localhost/notas_funcoes.php`.
3. **Pratique**:
   - Adicione uma função para verificar se o aluno está aprovado (média ≥ 7).
   - Modifique o array para incluir mais alunos ou notas.
   - Experimente usar chaves associativas (ex.: `["nome" => "João", "p1" => 8.7, "p2" => 9.4]`).

---

## 7. Dicas de Estudo

- **Pratique Modularização**:

  - Crie funções para tarefas específicas, como validar notas ou formatar saídas.
  - Exemplo: Função para validar notas:
    ```php
    function validarNota($nota) {
        return is_numeric($nota) && $nota >= 0 && $nota <= 10;
    }
    ```

- **Explore Funções Nativas**:

  - Teste funções como `array_map()`, `array_filter()` ou `str_replace()` em conjunto com suas próprias funções.
  - Exemplo:
    ```php
    $notas = [8.7, 9.2, 7.8];
    $notasFormatadas = array_map(function($nota) { return number_format($nota, 1); }, $notas);
    print_r($notasFormatadas); // Saída: [8.7, 9.2, 7.8]
    ```

- **Consulte Recursos**:
  - [Documentação oficial do PHP](https://www.php.net/manual/en/language.functions.php) para sintaxe e funções nativas.
  - [Zend Coding Standards](https://www.zend.com/blog/php-coding-standards) para boas práticas.
  - [W3Schools](https://www.w3schools.com/php/php_functions.asp) para exemplos práticos.

---

## 8. Conclusão

Funções em PHP são ferramentas indispensáveis para modularizar e otimizar o desenvolvimento de software. Elas permitem encapsular lógica, reduzir redundância e melhorar a manutenção do código. Com funções nativas e definidas pelo usuário, é possível criar soluções eficientes e reutilizáveis. Pratique os exemplos fornecidos, experimente criar suas próprias funções e consulte a documentação para explorar o potencial completo do PHP.

---

Essa reformulação organiza o conteúdo em seções claras, aprimora as explicações com linguagem precisa, adiciona exemplos variados (incluindo parâmetros opcionais e arrays multidimensionais) e inclui um roteiro prático completo, mantendo o foco nas funções em PHP.
