# Introdução ao HTML: História, Fundamentos e Elementos Relevantes

O HTML (HyperText Markup Language) é a espinha dorsal da World Wide Web, servindo como a linguagem padrão para estruturar conteúdo em páginas web. Desde sua criação, no início dos anos 1990, o HTML evoluiu significativamente, acompanhando as demandas de uma internet em constante transformação. Este estudo aborda a história do HTML, seus fundamentos, tipos de tags, atributos, semântica, listas, tabelas, mídias e boas práticas, oferecendo uma visão abrangente para iniciantes e desenvolvedores.

## História do HTML

O HTML foi criado em 1990 por Tim Berners-Lee, um cientista do CERN, com o objetivo de facilitar o compartilhamento de documentos científicos na internet. Inspirado na linguagem SGML (Standard Generalized Markup Language), o HTML trouxe uma abordagem simplificada para marcar textos com tags, como `<h1>` (título) e `<p>` (parágrafo), permitindo a estruturação de conteúdo e a interconexão de documentos por meio de hiperlinks, implementados pela tag `<a>` com o atributo `href`.

### Evolução do HTML

- **HTML 1.0 (1990)**: Versão inicial com tags básicas para texto e links, sem suporte a elementos visuais complexos.
- **HTML 2.0 (1995)**: Padronizado pelo W3C (World Wide Web Consortium), incluiu suporte a formulários.
- **HTML 3.2 (1997)**: Introduziu tabelas, applets e melhorias na formatação.
- **HTML 4.01 (1999)**: Separou estrutura (HTML) de apresentação (CSS), promovendo acessibilidade.
- **XHTML (2000)**: Versão mais rígida, baseada em XML, exigindo sintaxe precisa.
- **HTML5 (2014)**: Revolucionou a web com tags semânticas (`<header>`, `<article>`), suporte nativo a mídias (`<video>`, `<audio>`) e APIs para interatividade.

Hoje, o HTML5 é o padrão dominante, com atualizações contínuas pelo W3C e pelo WHATWG (Web Hypertext Application Technology Working Group), garantindo compatibilidade com tecnologias modernas.

## Fundamentos do HTML

HTML é uma linguagem de marcação que utiliza **tags** para estruturar conteúdo, informando ao navegador como exibir e interpretar textos, imagens, links e outros elementos. As tags são delimitadas por `<` e `>`, e a maioria possui uma tag de abertura (`<tag>`) e uma de fechamento (`</tag>`). Tags auto-fechantes, como `<img />`, não exigem fechamento separado.

### Estrutura Básica de um Documento HTML

```html
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <title>Título da Página</title>
  </head>
  <body>
    <h1>Bem-vindo</h1>
    <p>Este é um parágrafo.</p>
  </body>
</html>
```

- `<!DOCTYPE html>`: Declara o documento como HTML5.
- `<html>`: Raiz do documento.
- `<head>`: Contém metadados, como codificação (`<meta charset="UTF-8">`) e título (`<title>`).
- `<body>`: Contém o conteúdo visível.

## Tipos de Tags

As tags HTML são classificadas em três categorias principais: **estruturais**, **textuais** e **semânticas**.

### Tags Estruturais

Definem a estrutura do documento:

- `<html>`: Envolve todo o conteúdo.
- `<head>`: Armazena metadados.
- `<body>`: Contém o conteúdo visível.

### Tags Textuais

Organizam conteúdo visível, como:

- `<p>`: Parágrafo.
- `<h1>` a `<h6>`: Títulos hierárquicos (recomenda-se um único `<h1>` por página).
- `<a href="URL">`: Hiperlink.
- `<img src="imagem.jpg" alt="Descrição" />`: Imagem.
- `<span>`: Agrupa conteúdo inline sem quebra de linha.
- `<pre>`: Exibe texto pré-formatado, preservando espaços.
- `<hr />`: Linha horizontal (obsoleta no HTML5).

### Tags Semânticas (HTML5)

Introduzem significado à estrutura, facilitando acessibilidade e SEO:

- `<header>`: Cabeçalho.
- `<nav>`: Barra de navegação.
- `<main>`: Conteúdo principal.
- `<article>`: Conteúdo independente (ex.: post de blog).
- `<section>`: Agrupa conteúdos relacionados.
- `<aside>`: Conteúdo secundário (ex.: barra lateral).
- `<footer>`: Rodapé.

Exemplo semântico:

```html
<header>
  <h1>Meu Site</h1>
</header>
<nav>
  <a href="#home">Home</a>
</nav>
<main>
  <section>
    <article>
      <h2>Notícia</h2>
      <p>Conteúdo...</p>
    </article>
  </section>
</main>
<footer>© 2025</footer>
```

## Atributos

Atributos fornecem informações adicionais às tags, no formato `nome="valor"`. Exemplos:

- `<img src="imagem.jpg" alt="Descrição" />`: `src` define o caminho da imagem; `alt` fornece texto alternativo.
- `<a href="https://example.com">`: `href` especifica o destino do link.

Atributos importantes:

- `id`: Identificador único para um elemento.
- `class`: Associa elementos a uma classe para estilização (CSS) ou manipulação (JavaScript).

## Listas em HTML

Listas organizam informações de forma clara. Há três tipos:

### Listas Ordenadas (`<ol>`)

Usadas para itens com ordem específica, exibidos com números ou letras.

```html
<ol>
  <li>Passo 1</li>
  <li>Passo 2</li>
</ol>
```

**Resultado**: 1. Passo 1, 2. Passo 2.

### Listas Não Ordenadas (`<ul>`)

Usadas para itens sem ordem, com marcadores (bullets).

```html
<ul>
  <li>Maçã</li>
  <li>Banana</li>
</ul>
```

**Resultado**: • Maçã, • Banana.

### Listas de Definição (`<dl>`)

Associam termos (`<dt>`) a descrições (`<dd>`).

```html
<dl>
  <dt>HTML</dt>
  <dd>Linguagem de marcação.</dd>
</dl>
```

> **Dica**: Listas podem ser aninhadas, e marcadores são personalizáveis via CSS.

## Tabelas em HTML

Tabelas organizam dados tabulares, como planilhas. Tags principais:

- `<table>`: Container da tabela.
- `<tr>`: Linha.
- `<td>`: Célula de dados.
- `<th>`: Célula de título (semântica, geralmente em negrito).
- `<thead>`: Cabeçalho.
- `<tbody>`: Corpo.
- `<tfoot>`: Rodapé.

Exemplo:

```html
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Idade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ana</td>
      <td>25</td>
    </tr>
  </tbody>
</table>
```

### Atributos de Mesclagem

- `rowspan`: Mescla linhas.
- `colspan`: Mescla colunas.

Exemplo com `colspan`:

```html
<tr>
  <th colspan="2">Título Geral</th>
</tr>
```

> **Atenção**: Tabelas devem ser usadas apenas para dados tabulares, não para layouts, pois isso compromete a semântica e acessibilidade.

## Mídias em HTML

O HTML5 introduziu suporte nativo a mídias com as tags `<video>` e `<audio>`.

### Tags de Mídia

```html
<video src="video.mp4" controls autoplay loop></video>
<audio src="audio.mp3" controls></audio>
```

### Atributos

- `src`: Caminho do arquivo.
- `controls`: Exibe controles (play/pause).
- `autoplay`: Inicia automaticamente (use com moderação).
- `loop`: Repete a mídia.

> **Boa prática**: Inclua legendas (`<track>`) e evite `autoplay` para melhorar a acessibilidade.

## Tags de Formatação

- `<b>`: Negrito visual.
- `<strong>`: Negrito com importância semântica.
- `<i>`: Itálico visual.
- `<em>`: Itálico com ênfase semântica.

As tags `<strong>` e `<em>` são preferíveis por sua semântica, beneficiando leitores de tela.

## Tags Obsoletas

Algumas tags foram descontinuadas no HTML5, como:

- `<center>`: Substituída por CSS.
- `<font>`: Substituída por CSS.
- `<applet>`: Substituída por tecnologias modernas.
- `<br>` e `<hr>`: Embora ainda usadas, são desencorajadas em favor de CSS.

## Boas Práticas

- **Semântica**: Use tags adequadas à função do conteúdo.
- **Acessibilidade**: Inclua atributos como `alt` e legendas.
- **Separação de responsabilidades**: Use HTML para estrutura, CSS para apresentação e JavaScript para interatividade.
- **Validação**: Verifique o código com ferramentas do W3C.

## Conclusão

O HTML é uma linguagem essencial para a web, evoluindo desde sua criação para suportar interatividade, acessibilidade e multimídia. Compreender suas tags, atributos e práticas semânticas permite criar páginas robustas, acessíveis e bem organizadas, prontas para as demandas da internet moderna.
