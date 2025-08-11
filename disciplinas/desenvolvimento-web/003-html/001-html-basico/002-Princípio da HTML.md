# Fundamentos de HTML

O HTML (HyperText Markup Language), criado no início dos anos 1990, é a base para a construção de páginas web. Desde sua origem, inspirado na linguagem SGML, o HTML passou por constantes evoluções, incorporando novas funcionalidades e padrões. A primeira versão trouxe tags fundamentais, como as de título (`<h1>`, `<h2>`, etc.) e parágrafo (`<p>`), herdadas do SGML. Um dos pilares do HTML é a interconexão de documentos por meio de hiperlinks, possibilitada pela tag `<a>` e seu atributo `href`. Ao longo do tempo, novas tags foram adicionadas, enquanto outras foram descontinuadas, acompanhando as demandas da web.

## O que são Tags?

Tags são os elementos centrais do HTML, usados para estruturar e dar significado ao conteúdo de uma página web. Elas consistem em palavras ou abreviações delimitadas pelos caracteres `<` e `>`, que indicam ao navegador como interpretar e exibir o conteúdo.

Imagine um site de notícias com todo o texto dentro da tag `<body>` sem organização. O resultado seria um conteúdo desordenado e confuso. As tags permitem definir seções específicas, como títulos, parágrafos, imagens ou links, garantindo clareza e organização. Essa estrutura facilita a navegação dos usuários, a interpretação por dispositivos como leitores de tela e a manutenção do código por outros desenvolvedores.

### Como Declarar Tags

O HTML segue padrões definidos pelo W3C (World Wide Web Consortium), não permitindo a criação de tags personalizadas. Normalmente, uma tag é composta por:

- **Tag de abertura**: `<nome-da-tag>`, que inicia o elemento.
- **Conteúdo**: O texto ou outros elementos contidos na tag.
- **Tag de fechamento**: `</nome-da-tag>`, que encerra o elemento.

Exemplo:

```html
<h1>Título Principal</h1>
<p>Este é um parágrafo de texto.</p>
```

Algumas tags, conhecidas como **auto-fechantes**, não exigem uma tag de fechamento separada, como `<br />` (quebra de linha) e `<img />` (imagem). Nessas, a barra `/` antes do `>` indica o fechamento.

> **Atenção**: A tag `<br>` tornou-se obsoleta no HTML5, sendo substituída por soluções em CSS para controle de layout.

## Tipos de Tags

As tags HTML são classificadas em três categorias principais, conforme suas funções: **estruturais**, **textuais** e **semânticas**.

### Tags Estruturais

Definem a estrutura básica de um documento HTML. Exemplos:

- `<html>`: Define o documento HTML.
- `<head>`: Contém metadados, como o título da página.
- `<body>`: Engloba o conteúdo visível.

### Tags Textuais

Organizam o conteúdo visível, como textos, imagens e links. Exemplos:

- `<p>`: Define um parágrafo.
- `<h1>` a `<h6>`: Títulos hierárquicos, do mais importante (`<h1>`) ao menos importante (`<h6>`). Recomenda-se usar apenas um `<h1>` por página.
- `<a>`: Cria hiperlinks.
- `<img />`: Insere imagens.
- `<br />`: Insere quebras de linha (obsoleta no HTML5).
- `<hr />`: Insere uma linha horizontal para separar conteúdos.
- `<pre>`: Exibe texto pré-formatado, preservando espaços e quebras de linha.
- `<span>`: Agrupa conteúdo sem quebrar o fluxo, usada para estilização ou manipulação.

### Tags Semânticas

Introduzidas no HTML5, essas tags organizam o conteúdo de forma significativa, indicando sua função. Exemplos:

- `<header>`: Representa o cabeçalho da página ou de uma seção.
- `<nav>`: Define uma barra de navegação.
- `<main>`: Contém o conteúdo principal.
- `<aside>`: Representa conteúdo secundário, como barras laterais.
- `<footer>`: Define o rodapé.
- `<article>`: Representa um conteúdo independente, como um post de blog.
- `<section>`: Agrupa conteúdos relacionados.

Exemplo de estrutura semântica:

```html
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Minha Página</title>
  </head>
  <body>
    <header>
      <h1>Bem-vindo ao Meu Site</h1>
    </header>
    <nav><a href="#home">Home</a> | <a href="#sobre">Sobre</a></nav>
    <main>
      <section>
        <h2>Últimas Notícias</h2>
        <article>
          <h3>Notícia 1</h3>
          <p>Conteúdo da notícia...</p>
        </article>
      </section>
      <aside>Publicidade ou links relacionados</aside>
    </main>
    <footer>© 2025 Meu Site</footer>
  </body>
</html>
```

A semântica é essencial, pois organiza o documento de forma clara, facilitando a edição, a acessibilidade e a interpretação por dispositivos, como leitores de tela.

## Atributos

Atributos adicionam informações ou funcionalidades às tags, sendo compostos por um **nome** e um **valor**. Exemplo:

```html
<img src="imagem.jpg" alt="Descrição da imagem" />
```

- `src`: Define o caminho do arquivo da imagem.
- `alt`: Fornece um texto alternativo para acessibilidade ou caso a imagem não carregue.

Dois atributos fundamentais são:

- **ID**: Define um identificador único para um elemento em um documento.
- **Class**: Associa uma ou mais tags a uma classe para estilização (via CSS) ou manipulação (via JavaScript).

O W3C mantém uma lista completa de atributos e suas combinações.

## Tags de Formatação: `<strong>` e `<em>` vs `<b>` e `<i>`

Algumas tags HTML são usadas para formatar texto, embora o CSS seja a abordagem recomendada para estilização. Quatro tags merecem destaque:

- `<b>`: Aplica negrito ao texto, sem significado semântico.
- `<strong>`: Aplica negrito e indica importância semântica, essencial para acessibilidade.
- `<i>`: Aplica itálico ao texto, sem significado semântico.
- `<em>`: Aplica itálico e indica ênfase semântica, também importante para acessibilidade.

Embora `<b>` e `<strong>`, assim como `<i>` e `<em>`, produzam efeitos visuais semelhantes, as tags `<strong>` e `<em>` são semanticamente mais ricas, sendo interpretadas por leitores de tela para destacar importância ou ênfase no conteúdo.

## Tags Obsoletas

Com a evolução do HTML, algumas tags foram descontinuadas por serem substituídas por opções mais semânticas ou por transferirem funções de apresentação ao CSS. Embora ainda possam funcionar em navegadores, seu uso é desaconselhado devido ao risco de perda de suporte e desconfiguração. Exemplos:

- `<applet>`: Usada para applets Java.
- `<center>`: Centralizava conteúdo (substituída por CSS).
- `<dir>`: Container para listas de diretórios.
- `<font>`: Definida características de fontes (substituída por CSS).
- `<image>`: Ancestral da tag `<img>`.

Tags como `<br>` e `<hr>`, embora ainda usadas, são consideradas obsoletas no HTML5, pois a apresentação deve ser gerenciada por CSS.

## Conclusão

O HTML é uma linguagem de marcação poderosa e essencial para a web, evoluindo para atender às demandas de acessibilidade, organização e interatividade. O uso correto de tags, especialmente as semânticas, melhora a estruturação do conteúdo, facilita a manutenção e garante compatibilidade com dispositivos e tecnologias assistivas. Ao evitar tags obsoletas e priorizar práticas modernas, como o uso de CSS para apresentação, os desenvolvedores podem criar páginas mais robustas e acessíveis.
