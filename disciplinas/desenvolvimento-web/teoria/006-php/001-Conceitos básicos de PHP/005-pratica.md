### Resumo do Conteúdo

O conteúdo aborda os conceitos básicos de PHP para lidar com dados provenientes de formulários HTTP, essenciais para a criação de páginas dinâmicas em aplicações web, como e-commerce, sistemas bancários e educacionais. Ele explica o ciclo de requisição e resposta, onde o usuário envia dados por meio de um formulário (front-end), o servidor processa esses dados (back-end) e retorna uma página personalizada. O exemplo prático foca em uma aplicação simples que exibe uma mensagem de boas-vindas com base no nome e e-mail enviados pelo usuário. O formulário HTML utiliza o método POST para enviar dados ao servidor, onde o PHP, por meio da superglobal `$_POST`, extrai e processa os dados para gerar a resposta.

---

### Prática de Estudo: Formulário com PHP

Abaixo, apresento a prática completa para criar uma aplicação web simples que captura nome e e-mail de um formulário HTML e exibe uma mensagem de boas-vindas personalizada usando PHP. O código é organizado em dois arquivos: um para o formulário (front-end) e outro para processar os dados (back-end).

```html
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário de Boas-Vindas</title>
  </head>
  <body>
    <h1>Formulário de Cadastro</h1>
    <form action="welcome.php" method="post">
      <label for="name">Nome:</label><br />
      <input type="text" id="name" name="name" required /><br /><br />

      <label for="email">E-mail:</label><br />
      <input type="email" id="email" name="email" required /><br /><br />

      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
```

```php
<?php
// Captura os dados enviados pelo formulário
$name = $_POST["name"];
$email = $_POST["email"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas</title>
</head>
<body>
    <h1>Boas-vindas, <?php echo htmlspecialchars($name); ?>!</h1>
    <p>Seu e-mail é: <?php echo htmlspecialchars($email); ?></p>
    <p>Obrigado por se cadastrar!</p>
    <a href="index.html">Voltar ao formulário</a>
</body>
</html>
```

---

### Como Funciona

1. **index.html**:

   - Contém um formulário HTML com dois campos: `name` (nome) e `email` (e-mail).
   - O atributo `action="welcome.php"` indica que os dados serão enviados para o arquivo `welcome.php`.
   - O método `method="post"` garante que os dados sejam enviados de forma segura ao servidor.
   - Os campos são marcados como `required` para evitar envios em branco.

2. **welcome.php**:
   - Utiliza a superglobal `$_POST` para capturar os dados enviados (`$_POST["name"]` e `$_POST["email"]`).
   - Exibe uma página dinâmica com uma mensagem de boas-vindas personalizada, usando os dados recebidos.
   - A função `htmlspecialchars()` é usada para prevenir ataques XSS, escapando caracteres especiais.

---

### Instruções para Testar

1. **Configuração do Ambiente**:

   - Instale um servidor local com PHP (como XAMPP, WAMP ou MAMP).
   - Coloque os arquivos `index.html` e `welcome.php` na pasta raiz do servidor (ex.: `htdocs` no XAMPP).

2. **Execução**:

   - Acesse `http://localhost/index.html` no navegador.
   - Preencha o formulário com um nome e e-mail, clique em "Enviar".
   - Você será redirecionado para `welcome.php`, que exibirá a mensagem de boas-vindas com os dados fornecidos.

3. **Prática Adicional**:
   - Modifique o formulário para incluir outros campos, como idade ou telefone.
   - Adicione validações no PHP (ex.: verificar se o e-mail é válido com `filter_var($email, FILTER_VALIDATE_EMAIL)`).
   - Experimente usar o método GET em vez de POST e observe as diferenças na URL.

---

### Dicas de Estudo

- Consulte a [documentação oficial do PHP](https://www.php.net/manual/en/language.variables.superglobals.php) para aprender mais sobre `$_POST` e outras superglobais.
- Explore a seção de PHP no [W3Schools](https://www.w3schools.com/php/php_forms.asp) para exemplos adicionais.
- Pratique criando formulários mais complexos, como um sistema de login ou cadastro, para reforçar o entendimento do ciclo requisição-resposta.

Essa prática fornece uma base sólida para entender como processar formulários em PHP, preparando você para desenvolver aplicações web dinâmicas mais complexas.
