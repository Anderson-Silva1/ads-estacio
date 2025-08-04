# Entrada de Dados: Variáveis de Requisição HTTP em PHP

Em aplicações web dinâmicas, os formulários HTML são ferramentas essenciais para coletar informações dos usuários, como nomes, senhas ou preferências, e enviá-las ao servidor por meio de requisições HTTP. O servidor processa esses dados e retorna uma resposta, geralmente na forma de uma página web personalizada. Cada dado enviado é estruturado como uma variável, composta por um **nome** (identificador) e um **valor** (conteúdo), permitindo que o servidor os acesse e processe com base nos nomes definidos no formulário. As requisições HTTP podem usar diferentes métodos, como **GET** e **POST**, que determinam como os dados são transmitidos e tratados.

Este conteúdo explora o funcionamento das requisições HTTP em aplicações web, com foco nos métodos **GET** e **POST**, suas diferenças e casos de uso. Também detalhamos as variáveis superglobais do PHP (**$\_GET**, **$\_POST** e **$\_REQUEST**) usadas para manipular dados recebidos e oferecemos boas práticas para garantir segurança e eficiência.

---

## Resumo do Conteúdo

Este conteúdo explica como aplicações web dinâmicas utilizam formulários HTML para coletar e enviar dados dos usuários ao servidor via protocolo HTTP. Abordamos o processo de requisições, no qual o servidor recebe, processa e responde com páginas web. Detalhamos os métodos **GET** (que anexa dados à URL) e **POST** (que envia dados no corpo da requisição), destacando suas características e aplicações práticas. Explicamos as variáveis superglobais do PHP (**$\_GET**, **$\_POST** e **$\_REQUEST**) e sua função no processamento de dados. Por fim, apresentamos boas práticas para nomeação de campos, segurança e escolha adequada dos métodos HTTP, enfatizando a comunicação cliente-servidor.

---

## O que é uma Requisição HTTP?

Uma requisição HTTP é uma solicitação enviada por um cliente (como um navegador) a um servidor para executar uma ação, como recuperar uma página ou enviar dados de um formulário. O protocolo HTTP define o formato e as regras dessa comunicação, que inclui:

- **Método**: Indica a ação desejada (ex.: GET, POST).
- **URL**: Endereço do recurso no servidor.
- **Cabeçalhos**: Informações adicionais, como tipo de conteúdo ou autenticação.
- **Corpo**: Dados enviados (usado em métodos como POST).

O servidor processa a requisição e retorna uma resposta, que pode ser uma página HTML, um arquivo ou um código de status (ex.: 200 para sucesso, 404 para não encontrado).

---

## Métodos de Requisição HTTP

O protocolo HTTP define vários métodos de requisição, cada um com uma semântica específica. Os mais relevantes para formulários em aplicações PHP são **GET** e **POST**, mas a lista completa inclui:

- **GET**: Recupera recursos, como páginas ou arquivos.
- **POST**: Envia dados para criar ou atualizar recursos.
- **PUT**: Atualiza um recurso existente.
- **DELETE**: Remove um recurso.
- **HEAD**: Solicita apenas os cabeçalhos da resposta.
- **CONNECT**: Estabelece uma conexão de túnel.
- **OPTIONS**: Lista os métodos suportados pelo servidor.
- **TRACE**: Realiza testes de loopback.
- **PATCH**: Aplica modificações parciais a um recurso.

**GET** e **POST** são os mais usados em formulários HTML devido à sua simplicidade e adequação para interações comuns. Para um estudo mais aprofundado, consulte a documentação oficial do protocolo HTTP (como a RFC 7231).

---

## Método GET

O método **GET** é usado para solicitar recursos de um servidor, como uma página web, imagem ou arquivo. Os dados enviados pelo cliente são anexados à URL na forma de uma **query string**, no formato `nome=valor`, separados por `&`. Exemplo:

```
https://exemplo.com/script.php?nome=Joao&idade=25
```

Aqui, a query string contém as variáveis `nome=Joao` e `idade=25`. No servidor, essas variáveis podem ser acessadas usando a superglobal **$\_GET**.

**Características**:

- **Visibilidade**: Os dados aparecem na barra de endereços do navegador, tornando-os visíveis e fáceis de compartilhar (ex.: links de busca).
- **Limitação de tamanho**: A query string tem um limite de comprimento, que varia entre navegadores (geralmente 2.048 caracteres).
- **Uso**: Ideal para requisições que não alteram o estado do servidor, como buscas ou filtros.
- **Segurança**: Não recomendado para dados sensíveis, como senhas, devido à visibilidade na URL.

**Exemplo prático**:
Um formulário HTML para busca:

```html
<form method="GET" action="busca.php">
  <input type="text" name="termo" placeholder="Digite sua busca" />
  <input type="submit" value="Buscar" />
</form>
```

Se o usuário digitar "PHP" no campo `termo`, a URL gerada será:

```
https://exemplo.com/busca.php?termo=PHP
```

No arquivo `busca.php`, o PHP pode acessar o valor assim:

```php
<?php
$termo = $_GET['termo']; // Recupera "PHP"
echo "Você buscou por: " . htmlspecialchars($termo);
?>
```

---

## Método POST

O método **POST** é usado para enviar dados ao servidor, geralmente para criar ou atualizar recursos, como ao submeter um formulário de cadastro ou login. Os dados são incluídos no **corpo da requisição**, não na URL, o que os torna menos visíveis.

**Características**:

- **Discrição**: Os dados não aparecem na barra de endereços, mas podem ser inspecionados com ferramentas de desenvolvimento.
- **Capacidade**: Suporta maior volume de dados em comparação ao **GET**.
- **Uso**: Ideal para formulários que enviam informações sensíveis ou alteram o estado do servidor (ex.: cadastros, atualizações).
- **Segurança**: Embora mais discreto que o **GET**, exige validação adicional para proteger contra ataques.

**Exemplo prático**:
Um formulário HTML para login:

```html
<form method="POST" action="login.php">
  <input type="text" name="usuario" placeholder="Nome de usuário" />
  <input type="password" name="senha" placeholder="Senha" />
  <input type="submit" value="Entrar" />
</form>
```

No arquivo `login.php`, o PHP acessa os dados assim:

```php
<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
echo "Bem-vindo, " . htmlspecialchars($usuario);
?>
```

---

## Variáveis Superglobais do PHP

O PHP fornece variáveis superglobais para acessar dados enviados por requisições HTTP. Elas são arrays associativos disponíveis em qualquer escopo do código. As mais relevantes para formulários são:

### **$\_GET**

Armazena os dados enviados pelo método **GET**. Os índices do array correspondem aos nomes dos campos na query string, e os valores são os dados fornecidos. Exemplo:

```php
// URL: https://exemplo.com/script.php?nome=Joao&idade=25
echo $_GET['nome']; // Imprime: Joao
echo $_GET['idade']; // Imprime: 25
```

### **$\_POST**

Armazena os dados enviados pelo método **POST**. Similar ao **$\_GET**, os índices correspondem aos nomes dos campos do formulário. Exemplo:

```php
// Formulário com campos "usuario" e "senha"
echo $_POST['usuario']; // Imprime o valor do campo "usuario"
echo $_POST['senha']; // Imprime o valor do campo "senha"
```

### **$\_REQUEST**

Um array associativo "curinga" que pode conter dados de **GET**, **POST** e **$\_COOKIE**, dependendo da configuração do servidor. Embora versátil, seu uso é menos recomendado, pois pode incluir dados de fontes inesperadas, aumentando o risco de erros ou vulnerabilidades.

**Exemplo**:

```php
// Acessa "nome" de GET ou POST
echo $_REQUEST['nome'];
```

**Nota**: Sempre valide a origem dos dados ao usar **$\_REQUEST** para evitar comportamentos indesejados.

---

## Preenchendo Lacunas: Diferenças Práticas e Cuidados

### Diferenças entre GET e POST

| Característica      | GET                               | POST                               |
| ------------------- | --------------------------------- | ---------------------------------- |
| **Local dos dados** | Query string (URL)                | Corpo da requisição                |
| **Visibilidade**    | Visível na barra de endereços     | Não visível na URL                 |
| **Limite de dados** | Limitado (~2.048 caracteres)      | Maior capacidade                   |
| **Uso típico**      | Buscas, filtros, links            | Cadastros, logins, uploads         |
| **Segurança**       | Menos seguro para dados sensíveis | Mais adequado para dados sensíveis |
| **Cache**           | Pode ser armazenado em cache      | Geralmente não armazenado          |

### Cuidados com Segurança

- **Validação e Sanitização**: Sempre valide e sanitize os dados recebidos para evitar ataques como **injeção de SQL** ou **XSS** (Cross-Site Scripting). Exemplo:

```php
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
```

- **HTTPS**: Use conexões seguras para proteger dados em trânsito, especialmente com **POST**.
- **CSRF**: Implemente tokens CSRF em formulários **POST** para evitar ataques de falsificação de requisições.

### Configuração do Formulário

No HTML, o atributo `method` define se o formulário usa **GET** ou **POST**, e o atributo `action` especifica o script PHP que processará os dados. Exemplo:

```html
<form method="POST" action="processa.php">
  <input type="text" name="campo" required />
  <input type="submit" value="Enviar" />
</form>
```

O atributo `required` garante que o campo não seja enviado vazio.

---

## Boas Práticas

1. **Nomeação de Campos**: Use nomes claros e únicos para os campos do formulário (ex.: `nome_usuario` em vez de `campo1`) para facilitar o acesso no servidor.
2. **Escolha do Método**: Use **GET** para requisições idempotentes (que não alteram o servidor, como buscas) e **POST** para operações que modificam dados (como cadastros).
3. **Segurança**: Sempre sanitize e valide entradas do usuário. Use funções como `filter_input()` ou `htmlspecialchars()` para evitar vulnerabilidades.
4. **Feedback ao Usuário**: Após processar os dados, forneça respostas claras, como mensagens de sucesso ou erro.
5. **Testes**: Verifique se os dados esperados estão sendo recebidos corretamente, usando ferramentas como `print_r($_GET)` ou `print_r($_POST)` durante o desenvolvimento.

---

## Exemplo Completo: Formulário com Validação

**HTML (formulario.html)**:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Formulário</title>
  </head>
  <body>
    <form method="POST" action="processa.php">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" required />
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" required />
      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
```

**PHP (processa.php)**:

```php
<?php
// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitiza os dados
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // Valida os dados
    if ($nome && $email) {
        echo "Dados recebidos com sucesso!<br>";
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "E-mail: " . htmlspecialchars($email);
    } else {
        echo "Erro: Preencha todos os campos corretamente.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
```

---

## Conclusão

Compreender as requisições HTTP e as variáveis superglobais do PHP (**$\_GET**, **$\_POST**, **$\_REQUEST**) é fundamental para desenvolver aplicações web dinâmicas. O método **GET** é ideal para buscas e recuperação de dados, enquanto o **POST** é mais adequado para enviar informações sensíveis ou modificar o servidor. A nomeação correta de campos, a validação de dados e a escolha apropriada do método garantem aplicações seguras e eficientes. Para aprofundar, explore a documentação do PHP e do protocolo HTTP, além de práticas de segurança como HTTPS e proteção contra CSRF.
