# Arrays em PHP

Arrays são estruturas fundamentais em PHP, permitindo armazenar múltiplos valores em uma única variável. Eles são versáteis, suportando dados numéricos, textuais e até outros arrays, e podem ser unidimensionais (vetores) ou multidimensionais. Este conteúdo organiza e aprimora as explicações sobre arrays em PHP, detalhando tipos, criação, manipulação e exemplos práticos, mantendo o foco no escopo original.

---

## 1. Introdução aos Arrays

Arrays são coleções de dados organizados sob uma única variável, semelhantes a listas do dia a dia. Cada elemento em um array é identificado por um **índice** (numérico ou string) e pode armazenar qualquer tipo de dado, como números, strings ou outros arrays. Em PHP, arrays são amplamente utilizados, por exemplo, para armazenar notas de alunos, nomes ou configurações de sistemas.

### Tipos de Arrays

- **Numérico**: Índices são números inteiros (geralmente começando em 0).
- **Associativo**: Índices são strings, permitindo associações semânticas (ex.: `"nome" => "João"`).
- **Misto**: Combina índices numéricos e associativos.
- **Multidimensional**: Arrays que contêm outros arrays, formando múltiplas dimensões.

---

## 2. Criação e Atribuição de Valores

PHP oferece várias formas de criar e atribuir valores a arrays. Não há uma abordagem "melhor"; a escolha depende do contexto e da preferência do desenvolvedor.

### Sintaxes para Arrays Numéricos

```php
<?php
// Forma 1: Usando array()
$carros = array("Fusca", "Monza", "Passat");

// Forma 2: Sintaxe curta (semelhante a JavaScript)
$carros = ["Fusca", "Monza", "Passat"];

// Forma 3: Atribuição por índice
$carros[0] = "Fusca";
$carros[1] = "Monza";
$carros[2] = "Passat";

// Forma 4: Atribuição automática (índices gerados sequencialmente)
$carros = [];
$carros[] = "Fusca"; // Índice 0
$carros[] = "Monza"; // Índice 1
$carros[] = "Passat"; // Índice 2
?>
```

**Saída com `print_r($carros);`**:

```
Array
(
    [0] => Fusca
    [1] => Monza
    [2] => Passat
)
```

**Nota**: A forma com `[]` é útil quando o tamanho do array não é conhecido previamente.

### Sintaxes para Arrays Associativos

```php
<?php
// Forma 1: Usando array()
$carros = array(
    "vw" => "Fusca",
    "chevrolet" => "Monza",
    "fiat" => "Tempra"
);

// Forma 2: Sintaxe curta
$carros = [
    "vw" => "Fusca",
    "chevrolet" => "Monza",
    "fiat" => "Tempra"
];

// Forma 3: Atribuição por índice
$carros["vw"] = "Fusca";
$carros["chevrolet"] = "Monza";
$carros["fiat"] = "Tempra";
?>
```

**Saída com `print_r($carros);`**:

```
Array
(
    [vw] => Fusca
    [chevrolet] => Monza
    [fiat] => Tempra
)
```

### Arrays Mistos

```php
<?php
$carros = [
    "vw" => "Fusca",
    0 => "Passat",
    "chevrolet" => "Monza",
    1 => "Chevette",
    "fiat" => "Tempra",
    2 => "Uno"
];
print_r($carros);
?>
```

**Saída**:

```
Array
(
    [vw] => Fusca
    [0] => Passat
    [chevrolet] => Monza
    [1] => Chevette
    [fiat] => Tempra
    [2] => Uno
)
```

**Explicação**: Arrays mistos combinam índices numéricos e associativos, permitindo flexibilidade, mas exigindo cuidado para evitar confusão.

---

## 3. Manipulação de Arrays

PHP oferece várias funções para adicionar, remover e manipular elementos em arrays.

### Adicionando Elementos

- **array_push()**: Adiciona elementos ao final do array.
- **array_unshift()**: Adiciona elementos no início do array.

```php
<?php
$carros = ["Fusca", "Monza"];
array_push($carros, "Passat"); // Adiciona ao final
array_unshift($carros, "Gol"); // Adiciona ao início
print_r($carros);
?>
```

**Saída**:

```
Array
(
    [0] => Gol
    [1] => Fusca
    [2] => Monza
    [3] => Passat
)
```

### Removendo Elementos

Existem três formas principais de remover elementos:

1. **Atribuir valor vazio**:

   - Define o valor de um elemento como `""`, mas o índice permanece.

   ```php
   <?php
   $carros = ["Fusca", "Monza", "Passat"];
   $carros[1] = "";
   print_r($carros);
   echo "Tamanho: " . count($carros);
   ?>
   ```

   **Saída**:

   ```
   Array
   (
       [0] => Fusca
       [1] =>
       [2] => Passat
   )
   Tamanho: 3
   ```

2. **Usando unset()**:

   - Remove o elemento e seu índice.

   ```php
   <?php
   $carros = ["Fusca", "Monza", "Passat"];
   unset($carros[1]); // Remove o elemento de índice 1
   print_r($carros);
   echo "Tamanho: " . count($carros);
   ?>
   ```

   **Saída**:

   ```
   Array
   (
       [0] => Fusca
       [2] => Passat
   )
   Tamanho: 2
   ```

3. **Usando array_splice()**:
   - Remove uma sequência de elementos a partir de um índice.
   ```php
   <?php
   $carros = ["Fusca", "Monza", "Passat", "Gol"];
   array_splice($carros, 1, 2); // Remove 2 elementos a partir do índice 1
   print_r($carros);
   echo "Tamanho: " . count($carros);
   ?>
   ```
   **Saída**:
   ```
   Array
   (
       [0] => Fusca
       [1] => Gol
   )
   Tamanho: 2
   ```

**Funções Úteis**:

- **print_r()**: Exibe o conteúdo do array de forma legível.
- **count()**: Retorna o número de elementos no array.

---

## 4. Arrays Multidimensionais

Arrays multidimensionais contêm outros arrays, criando uma estrutura com múltiplas dimensões. São úteis para representar tabelas, matrizes ou dados hierárquicos.

### Exemplo

```php
<?php
$frutas = [
    "vermelhas" => ["melancia", "cereja", "framboesa", "morango"],
    "citricas" => ["laranja", "limao", "abacaxi", "mexerica"]
];
echo $frutas["vermelhas"][1]; // Acessa "cereja"
echo "\n";
print_r($frutas);
?>
```

**Saída**:

```
cereja
Array
(
    [vermelhas] => Array
        (
            [0] => melancia
            [1] => cereja
            [2] => framboesa
            [3] => morango
        )
    [citricas] => Array
        (
            [0] => laranja
            [1] => limao
            [2] => abacaxi
            [3] => mexerica
        )
)
```

**Explicação**: O array `$frutas` tem duas chaves associativas (`"vermelhas"` e `"citricas"`), cada uma contendo um array numérico. Para acessar um elemento, usa-se a sintaxe `$array[chave1][chave2]`.

---

## 5. Dicas de Estudo e Prática

- **Teste os Exemplos**:

  - Crie um arquivo PHP (ex.: `arrays.php`) e execute os códigos acima em um servidor local (XAMPP ou `php -S localhost:8000`).
  - Experimente adicionar ou remover elementos com `array_push`, `unset` ou `array_splice`.

- **Pratique com Arrays Multidimensionais**:

  - Crie um array para armazenar notas de alunos, onde cada aluno tem um nome e uma lista de notas:
    ```php
    <?php
    $alunos = [
        "João" => [8.5, 7.0, 9.0],
        "Maria" => [6.5, 8.0, 7.5]
    ];
    echo "Nota de João na prova 1: " . $alunos["João"][0];
    ?>
    ```

- **Evite Erros Comuns**:

  - Verifique se os índices existem antes de acessá-los (use `isset($array[indice])` para evitar erros).
  - Use `print_r()` ou `var_dump()` para depurar arrays complexos.

- **Consulte Recursos**:
  - [Documentação oficial do PHP](https://www.php.net/manual/en/language.types.array.php) para funções de arrays.
  - [W3Schools](https://www.w3schools.com/php/php_arrays.asp) para exemplos práticos.

---

## 6. Exemplo Prático Completo

Crie um arquivo `gerenciador_carros.php` para manipular um array misto:

```php
<?php
// Criando um array misto
$carros = [
    "vw" => "Fusca",
    0 => "Passat",
    "chevrolet" => "Monza",
    1 => "Chevette"
];

// Exibindo o array inicial
echo "Array inicial:\n";
print_r($carros);

// Adicionando elementos
array_push($carros, "Gol"); // Adiciona ao final
$carros["fiat"] = "Tempra"; // Adiciona com chave associativa
echo "\nApós adições:\n";
print_r($carros);

// Removendo elementos
unset($carros[0]); // Remove "Passat"
array_splice($carros, 1, 1); // Remove "Chevette"
echo "\nApós remoções:\n";
print_r($carros);
echo "Tamanho final: " . count($carros);
?>
```

**Saída**:

```
Array inicial:
Array
(
    [vw] => Fusca
    [0] => Passat
    [chevrolet] => Monza
    [1] => Chevette
)
Após adições:
Array
(
    [vw] => Fusca
    [0] => Passat
    [chevrolet] => Monza
    [1] => Chevette
    [2] => Gol
    [fiat] => Tempra
)
Após remoções:
Array
(
    [vw] => Fusca
    [chevrolet] => Monza
    [fiat] => Tempra
)
Tamanho final: 3
```

**Instruções**:

1. Salve o código em `htdocs/seu_projeto/gerenciador_carros.php` (se usar XAMPP).
2. Acesse `http://localhost/seu_projeto/gerenciador_carros.php`.
3. Modifique o array (ex.: adicione novos carros ou remova outros) para praticar.

---

### Conclusão

Arrays em PHP são ferramentas poderosas para organizar e manipular dados, desde listas simples (numéricas ou associativas) até estruturas complexas (multidimensionais). Com funções como `array_push`, `unset` e `array_splice`, é possível gerenciar arrays de forma eficiente. Pratique os exemplos fornecidos, experimente diferentes manipulações e consulte a documentação para explorar funções adicionais, como `array_merge` ou `array_filter`.
