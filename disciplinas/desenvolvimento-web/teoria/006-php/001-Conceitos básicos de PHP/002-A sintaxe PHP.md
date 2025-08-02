# A sintaxe do PHP

Assim como qualquer linguagem de programação, o PHP possui regras de sintaxe que devem ser seguidas para garantir o funcionamento correto das aplicações. Essas regras orientam tanto os desenvolvedores quanto os servidores web, que precisam identificar e processar corretamente o código PHP, especialmente em arquivos que combinam diferentes tecnologias, como HTML e PHP. Para iniciar um script PHP, utiliza-se a tag de abertura `<?php`, que sinaliza ao servidor o início do código a ser interpretado. Cada instrução no PHP deve ser finalizada com um ponto e vírgula (`;`), indicando o término de um comando. Já as variáveis são declaradas com o símbolo `$` seguido do nome da variável, como `$nome`, sem a necessidade de especificar o tipo de dado, graças à característica de tipagem dinâmica do PHP.

Neste vídeo, você aprenderá os fundamentos da sintaxe PHP, incluindo como iniciar e finalizar scripts, a importância do ponto e vírgula para encerrar instruções e a forma de declarar variáveis com o símbolo `$`. O conteúdo é ideal para iniciantes que desejam compreender as bases da linguagem e desenvolver aplicações web funcionais e livres de erros.

---

# Resumo do vídeo

O vídeo oferece uma introdução detalhada à sintaxe da linguagem PHP, destacando a importância de seguir suas regras para evitar erros no desenvolvimento de aplicações. O apresentador explica como iniciar um script com a tag `<?php` e finalizá-lo (quando necessário) com `?>`, além de demonstrar a integração entre PHP e HTML em um mesmo arquivo. Também é abordada a declaração de variáveis com o símbolo `$`, utilizando como exemplo variáveis do tipo string. O vídeo enfatiza a relevância de compreender essas particularidades da sintaxe para criar aplicações robustas e evitar problemas técnicos, sendo uma excelente base para quem está começando a programar em PHP.

---

# Iniciando e finalizando scripts PHP

Um script PHP deve ser delimitado pela tag de abertura `<?php` e, opcionalmente, pela tag de fechamento `?>`. Essas tags informam ao servidor web qual trecho do código deve ser interpretado como PHP, especialmente em arquivos que misturam PHP e HTML. O HTML fora dessas tags é tratado como conteúdo estático e renderizado diretamente no navegador, enquanto o código PHP é processado no servidor, gerando resultados dinâmicos que são incorporados à página final.

### O que é renderização?

Renderização é o processo de transformar um código ou modelo digital em um resultado final visível ou funcional, como uma página web exibida no navegador. No contexto do PHP, a renderização ocorre quando o servidor processa o código PHP e o HTML, gerando uma página HTML completa que é enviada ao navegador do usuário.

Veja o exemplo abaixo, que ilustra a combinação de PHP e HTML:

```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Primeiro código PHP com HTML</title>
</head>
<body>
    <h1>Título da Página</h1>
    <p><?php echo "Olá, mundo!"; ?></p>
</body>
</html>
```

Esse código pode ser salvo com a extensão `.php`, como `ola_mundo.php`. Ao ser processado pelo servidor, o PHP dentro da tag `<?php echo "Olá, mundo!"; ?>` é executado, e o resultado (a string "Olá, mundo!") é incorporado ao HTML, que é então renderizado no navegador como uma página web. Em algumas configurações, o servidor pode ser ajustado para interpretar scripts PHP sem a necessidade da extensão `.php`, permitindo o uso de outras extensões ou até mesmo arquivos sem extensão, o que pode ser útil para ocultar a tecnologia usada no site.

---

## Finalização de instruções e comentários

No PHP, toda instrução deve ser finalizada com um ponto e vírgula (`;`), que marca o término de um comando. Essa regra é essencial para que o interpretador PHP processe o código corretamente.

### Comentários no PHP

Os comentários são usados para documentar o código, facilitando sua manutenção e compreensão. O PHP oferece duas formas de incluir comentários:

1. **Comentários de uma linha**: Iniciados com `//`, são ideais para anotações curtas.
2. **Comentários de múltiplas linhas**: Delimitados por `/*` e `*/`, permitem comentários mais extensos.

Veja o exemplo abaixo, que demonstra o uso de ponto e vírgula e comentários:

```php
<?php
// Este é um comentário de uma linha

/*
Este é um comentário de múltiplas linhas.
Cada instrução PHP deve terminar com ponto e vírgula.
Abaixo, exemplos de comandos e seus términos:
*/

echo "Olá, mundo!\n"; // Exibe uma mensagem
$var1 = 2 + 2; // Declara e inicializa uma variável

echo "O resultado da soma é: " . $var1; // Concatena e exibe o resultado
```

**Nota**: A tag de fechamento `?>` é opcional quando o arquivo contém apenas código PHP, já que o interpretador assume que o script termina ao final do arquivo.

---

## Variáveis em PHP

As variáveis são elementos fundamentais em qualquer linguagem de programação, e no PHP elas são declaradas utilizando o símbolo `$` seguido do nome da variável. Por exemplo, `$nome` ou `$idade`. O PHP é uma linguagem **fracamente tipada**, o que significa que não é necessário declarar o tipo de dado (como inteiro, string ou booleano) ao criar uma variável. O tipo é determinado automaticamente com base no valor atribuído.

### Regras para nomes de variáveis

- **Case-sensitive**: O PHP diferencia maiúsculas de minúsculas. Assim, `$nome` e `$Nome` são variáveis distintas.
- **Primeiro caractere**: O nome deve começar com uma letra (a-z, A-Z) ou um sublinhado (`_`).
- **Caracteres subsequentes**: Após o primeiro caractere, podem ser usadas letras, números (0-9) ou sublinhados.

### Atribuição de valores

A atribuição de valores a variáveis é feita com o operador `=`. Veja o exemplo:

```php
<?php
$_nomeCurso = "Programação de Páginas Dinâmicas com PHP"; // String
$anoCriacao = 1994; // Inteiro
$flagLinguagemScript = true; // Booleano
```

Nesse exemplo, diferentes tipos de dados (string, inteiro e booleano) são atribuídos a variáveis com convenções de nomenclatura variadas, como sublinhado inicial (`$_nomeCurso`), separação por sublinhado (`$ano_criacao`) e CamelCase (`$flagLinguagemScript`). Para manter a consistência, é recomendável adotar um único padrão de nomenclatura em todo o projeto.

### O que é CamelCase?

CamelCase é uma convenção de nomenclatura em que palavras compostas são unidas sem espaços, e cada palavra começa com letra maiúscula (ex.: `$anoCriacao`). Essa prática é comum em programação para melhorar a legibilidade dos nomes de variáveis.

### Cuidados com variáveis

- **Strings**: Valores textuais devem ser envoltos por aspas simples (`'`) ou duplas (`"`). Por exemplo: `$texto = "Bem-vindo";`.
- **Valores padrão**: Variáveis não inicializadas no PHP assumem valores padrão (ex.: `false` para booleanos, `0` para números, `""` para strings). Ainda assim, é uma boa prática inicializar variáveis antes de usá-las para evitar comportamentos inesperados.
