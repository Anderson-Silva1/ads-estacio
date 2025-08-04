# Programando com Funções e Arrays em PHP

Funções são ferramentas essenciais no desenvolvimento de software, pois permitem dividir programas complexos em partes menores, facilitando a implementação, teste e manutenção. Em PHP, funções podem ser nativas (fornecidas pela linguagem) ou definidas pelo usuário, promovendo reaproveitamento de código e modularização. Este conteúdo organiza e aprimora as explicações sobre o uso de funções associadas a arrays, com foco em um exemplo prático que calcula e exibe a média de notas de um aluno. Incluímos um roteiro de prática revisado, exemplos adicionais e boas práticas para reforçar o aprendizado.

---

## 1. Introdução a Funções e Arrays

Funções em PHP são blocos de código reutilizáveis que executam tarefas específicas, enquanto arrays organizam múltiplos dados em uma única variável. Combinar funções com arrays permite manipular dados de forma eficiente, como calcular médias de notas ou processar listas de informações. No exemplo prático, usaremos um array unidimensional para armazenar o nome de um aluno e suas notas em duas provas (P1 e P2), e uma função para calcular e exibir a média.

**Benefícios**:

- **Modularização**: Divide o código em partes menores e compreensíveis.
- **Reutilização**: Funções podem ser chamadas várias vezes com diferentes dados.
- **Integração com Arrays**: Elementos de arrays podem ser usados como parâmetros de funções, acessados por seus índices.

---

## 2. Roteiro de Prática: Calculando a Média de um Aluno

### Objetivo

Implementar uma aplicação PHP que:

- Armazene o nome e as notas (P1 e P2) de um aluno em um array unidimensional.
- Use uma função para calcular a média das notas.
- Exiba o nome do aluno e sua média no navegador.

### Código Completo

```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do Aluno</title>
</head>
<body>
    <h1>Média do Aluno</h1>
    <?php
    // Função para calcular a média
    function calcularMedia($nota1, $nota2) {
        return ($nota1 + $nota2) / 2;
    }

    // Array com dados do aluno
    $aluno = ["João", 8.7, 9.4];

    // Calculando a média
    $media = calcularMedia($aluno[1], $aluno[2]);

    // Exibindo o resultado
    echo "Aluno: " . htmlspecialchars($aluno[0]) . "<br>";
    echo "Média: " . number_format($media, 1);
    ?>
</body>
</html>
```

**Saída no Navegador**:

```
Média do Aluno
Aluno: João
Média: 9.1
```

---

## 3. Explicação Detalhada do Código

1. **Estrutura HTML**:

   - O código inclui uma estrutura HTML completa com codificação UTF-8 e um título descritivo.
   - Um cabeçalho `<h1>` melhora a apresentação visual.

2. **Definição da Função** (`calcularMedia`):

   - **Sintaxe**:
     ```php
     function calcularMedia($nota1, $nota2) {
         return ($nota1 + $nota2) / 2;
     }
     ```
   - **Parâmetros**: `$nota1` e `$nota2` recebem as notas do aluno.
   - **Retorno**: Usa `return` para devolver a média aritmética.
   - **Boa Prática**: Nome descritivo (`calcularMedia`) e indentação clara.

3. **Definição do Array**:

   - O array `$aluno` é unidimensional, com 3 elementos:
     - Índice 0: Nome (`"João"`).
     - Índice 1: Nota P1 (`8.7`).
     - Índice 2: Nota P2 (`9.4`).
   - Sintaxe: `$aluno = ["João", 8.7, 9.4];`.

4. **Chamada da Função**:

   - A função `calcularMedia` é chamada com `$aluno[1]` (P1) e `$aluno[2]` (P2) como parâmetros:
     ```php
     $media = calcularMedia($aluno[1], $aluno[2]);
     ```
   - O resultado é armazenado em `$media`.

5. **Exibição do Resultado**:
   - O nome do aluno é acessado com `$aluno[0]` e protegido com `htmlspecialchars()` para evitar vulnerabilidades XSS.
   - A média é formatada com `number_format($media, 1)` para exibir apenas uma casa decimal.

**Melhorias Aplicadas**:

- Uso de `htmlspecialchars()` para segurança.
- Formatação da saída com `number_format()` para maior clareza.
- Estrutura HTML completa para apresentação no navegador.
- Código mais conciso e legível.

---

## 4. Exemplos Adicionais

### Exemplo 1: Função com Array Associativo

Usar chaves associativas torna o código mais semântico.

```php
<?php
function calcularMedia($notas) {
    return ($notas["p1"] + $notas["p2"]) / 2;
}

$aluno = [
    "nome" => "Maria",
    "p1" => 9.2,
    "p2" => 8.9
];

$media = calcularMedia($aluno);
echo "Aluno: " . htmlspecialchars($aluno["nome"]) . ", Média: " . number_format($media, 1);
?>
```

**Saída**: `Aluno: Maria, Média: 9.1`

**Explicação**: O array usa chaves associativas (`"nome"`, `"p1"`, `"p2"`) para maior clareza, e a função acessa as notas diretamente.

### Exemplo 2: Função com Validação

Adiciona verificações para garantir notas válidas.

```php
<?php
function calcularMedia($nota1, $nota2) {
    if (!is_numeric($nota1) || !is_numeric($nota2) || $nota1 < 0 || $nota1 > 10 || $nota2 < 0 || $nota2 > 10) {
        return "Notas inválidas";
    }
    return ($nota1 + $nota2) / 2;
}

$aluno = ["Luís", 7.8, 8.4];
$media = calcularMedia($aluno[1], $aluno[2]);
echo "Aluno: " . htmlspecialchars($aluno[0]) . "<br>";
echo is_string($media) ? $media : "Média: " . number_format($media, 1);
?>
```

**Saída**:

```
Aluno: Luís
Média: 8.1
```

**Explicação**: A função valida se as notas são numéricas e estão entre 0 e 10, retornando uma mensagem de erro se inválidas.

### Exemplo 3: Processando Múltiplos Alunos

Usa um array multidimensional para processar vários alunos.

```php
<?php
function exibirMediaAlunos($alunos) {
    foreach ($alunos as $aluno) {
        $media = ($aluno["p1"] + $aluno["p2"]) / 2;
        echo htmlspecialchars($aluno["nome"]) . ": Média: " . number_format($media, 1) . "<br>";
    }
}

$turma = [
    ["nome" => "João", "p1" => 8.7, "p2" => 9.4],
    ["nome" => "Maria", "p1" => 9.2, "p2" => 8.9],
    ["nome" => "Luís", "p1" => 7.8, "p2" => 8.4]
];

exibirMediaAlunos($turma);
?>
```

**Saída**:

```
João: Média: 9.1
Maria: Média: 9.1
Luís: Média: 8.1
```

**Explicação**: A função `exibirMediaAlunos` itera sobre um array multidimensional, calculando e exibindo a média de cada aluno.

---

## 5. Instruções para Executar

1. **Configuração do Ambiente**:

   - Instale o XAMPP (ou outro servidor com PHP).
   - Salve o código em `htdocs/media_aluno.php`.

2. **Execute**:

   - Inicie o Apache no XAMPP.
   - Acesse `http://localhost/media_aluno.php` no navegador.

3. **Pratique**:
   - Modifique o array `$aluno` com outros nomes e notas.
   - Adicione validações (como no Exemplo 2).
   - Teste com um array multidimensional (como no Exemplo 3).

---

## 6. Boas Práticas

- **Nomenclatura Clara**: Use nomes como `calcularMedia` ou `exibirNotas` para indicar a funcionalidade.
- **Validação de Entrada**: Verifique se os dados do array são válidos antes de processá-los.
- **Segurança**: Sempre use `htmlspecialchars()` ao exibir dados do usuário em HTML.
- **Reutilização**: Crie funções genéricas que possam ser usadas com diferentes arrays.
- **Documentação**: Use PHPDoc para descrever funções:
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

## 7. Dicas de Estudo

- **Pratique com Arrays**:

  - Experimente arrays associativos e multidimensionais.
  - Use funções nativas como `array_sum()` ou `count()` para simplificar cálculos.

- **Explore Funções Nativas**:

  - Teste `array_map()` para aplicar uma função a todos os elementos de um array.
  - Exemplo:
    ```php
    $notas = [8.7, 9.2, 7.8];
    $formatadas = array_map(function($nota) { return number_format($nota, 1); }, $notas);
    print_r($formatadas);
    ```

- **Consulte Recursos**:
  - [Documentação oficial do PHP](https://www.php.net/manual/en/language.functions.php) para funções e arrays.
  - [W3Schools](https://www.w3schools.com/php/php_functions.asp) para exemplos práticos.
  - [Zend Coding Standards](https://www.zend.com/blog/php-coding-standards) para boas práticas.

---

## 8. Conclusão

Funções e arrays em PHP são ferramentas poderosas para criar programas modulares e eficientes. A prática apresentada demonstra como usar uma função para calcular a média de notas armazenadas em um array, com acesso aos elementos por índices. Os exemplos adicionais mostram como expandir o conceito para arrays associativos, validações e múltiplos alunos. Pratique os códigos fornecidos, experimente variações e consulte a documentação para aprofundar suas habilidades em PHP.

---

Essa reformulação organiza o conteúdo em seções claras, melhora a clareza das explicações, otimiza o código com boas práticas (como `htmlspecialchars` e `number_format`) e adiciona exemplos variados para reforçar o aprendizado, mantendo o foco na combinação de funções e arrays em PHP.
