# Índice Organizado: Curso de Desenvolvimento Web

Este índice reformulado organiza os tópicos de forma clara, estruturada e lógica, agrupando-os por temas principais e fornecendo uma visão geral para facilitar o entendimento. Ele reflete o conteúdo dos textos fornecidos, incluindo **HTML**, **CSS**, **JavaScript**, **PHP**, e conceitos de **páginas dinâmicas**, **design responsivo**, e **acesso a dados**, além de integrar referências bibliográficas e recursos adicionais. A estrutura foi dividida em seções temáticas, com explicações breves para cada tópico, mantendo a essência do conteúdo original, mas com uma organização mais intuitiva e compreensível.

---

## Índice

### 1. Fundamentos do Ambiente Web

Esta seção introduz o modelo cliente-servidor e o funcionamento do ambiente web, fornecendo a base para entender como as tecnologias interagem.

- **1.1 Modelo Cliente x Servidor**
  _([Link: Modelo cliente x servidor](./001-ambiente-web/001-modelo-cliente-servidor.md))_
  Explica a arquitetura cliente-servidor, detalhando como clientes (navegadores) fazem requisições a servidores, que processam e retornam respostas. Aborda o papel de cada lado na construção de aplicações web.

- **1.2 Ambiente Web**
  _([Link: Ambiente web](./001-ambiente-web/002-ambiente-web.md))_
  Apresenta o ecossistema da web, incluindo protocolos (HTTP/HTTPS), servidores web (Apache, Nginx) e tecnologias do lado cliente (HTML, CSS, JavaScript) e servidor (PHP, Python).

- **1.3 Demonstração Prática da Arquitetura Cliente x Servidor**
  _([Link: Demonstração prática](./001-ambiente-web/003-Demonstração%20prática%20da%20Arquitetura%20cliente%20X%20Servidor.md))_
  Fornece um exemplo prático de como o cliente (navegador) interage com o servidor, ilustrando o fluxo de requisições e respostas em um cenário real.

---

### 2. Conceitos de Interface e Design

Esta seção aborda a criação de interfaces de usuário e os princípios de design responsivo, essenciais para garantir usabilidade e acessibilidade em diferentes dispositivos.

- **2.1 Visão Geral de Interface de Usuários**
  _([Link: Conceito de interface](./002-conceito-interface/001-Visão%20geral%20de%20interface%20de%20usuários.md))_
  Explora o conceito de interfaces de usuário, incluindo elementos como layout, navegação e interação, com foco em proporcionar uma boa experiência ao usuário.

- **2.2 O Conceito do Design Responsivo**
  _([Link: Conceito de design responsivo](./002-conceito-interface/002-O%20conceito%20do%20design%20responsivo.md))_
  Detalha o design responsivo, que adapta páginas web a diferentes tamanhos de tela (ex.: 1366x768, 360x640, conforme `grafico-telas.jpg`). Explica técnicas como layouts fluidos (`layout-fluido.jpg`), media queries e unidades relativas.

---

### 3. Tecnologias do Lado Cliente

Esta seção cobre as tecnologias que rodam no navegador, responsáveis pela estrutura, estilo e interatividade das páginas web.

- **3.1 HTML: Estrutura da Web**
  _([Link: HTML](./003-tecnologias-cliente/001-html.md))_
  Introduz o **HTML** como a linguagem de marcação que define a estrutura de páginas web, com tags semânticas (ex.: `<header>`, `<main>`), estruturais e de conteúdo. Explica o HTML5 e suas inovações, como suporte a multimídia (`html5-5.jpg`) e conectividade (`html5-2.jpg`).

- **3.2 CSS e JavaScript: Estilo e Interatividade**
  _([Link: Outras tecnologias](./003-tecnologias-cliente/002-Outras%20tecnologias%20CSS%20e%20JavaScript.md))_
  Apresenta o **CSS** para estilização (cores, layouts, fontes) e o **JavaScript** para interatividade (eventos, manipulação do DOM). Inclui boas práticas, como uso de CSS externo e pré-processadores (ex.: Sass).

- **3.3 Utilizando CSS em Páginas HTML**
  _([Link: CSS no HTML](./003-tecnologias-cliente/003-Utilizando%20CSS%20em%20página%20HTML.md))_
  Demonstra como aplicar CSS (inline, interno, externo) para estilizar páginas HTML, com exemplos práticos que alteram cores, alinhamentos e fundos, considerando responsividade.

- **3.4 Inserindo JavaScript em Código HTML**
  _([Link: JavaScript no HTML](./003-tecnologias-cliente/004-Inserindo%20Javascript%20em%20código%20HTML.md))_
  Mostra como integrar JavaScript para adicionar interatividade, como manipulação de imagens (ex.: lâmpada acesa/apagada) e eventos (cliques), com exemplos práticos.

---

### 4. Tecnologias do Lado Servidor

Esta seção explora tecnologias server-side, focando em PHP e sua integração com bancos de dados para criar páginas dinâmicas.

- **4.1 PHP: Uma Linguagem de Programação Server-Side**
  _([Link: Linguagem PHP](./004-tecnologias-servidor/001-PHP%20uma%20linguagem%20de%20programação%20server%20side.md))_
  Apresenta o **PHP** como uma linguagem interpretada para scripts server-side, com suporte a paradigmas estruturado e orientado a objetos. Explica sua sintaxe, integração com HTML e acesso a bancos de dados.

- **4.2 Páginas Dinâmicas e Acesso a Dados**
  _([Link: Páginas dinâmicas e acesso a dados](./004-tecnologias-servidor/002-Páginas%20dinâmicas%20e%20acesso%20a%20dados.md))_
  Contrasta páginas estáticas (HTML/CSS/JavaScript) com páginas dinâmicas, que usam PHP e bancos de dados (ex.: MySQL) para gerar conteúdo personalizado. Detalha o acesso a dados via formulários HTML e JavaScript (AJAX, Fetch API).

---

## Recursos Adicionais

### Leituras Recomendadas

- **Design de Interação: Além da Interação Homem-Computador**
  _Jennifer Preece, Yvonne Rogers, Helen Sharp (John Wiley & Sons)_
  Explora princípios de design de interação, com foco em usabilidade e experiência do usuário, complementando os conceitos de interface e design responsivo.

- **Interação Humano-Computador**
  _Simone Diniz Junqueira Barboza, Bruno Santana da Silva (Elsevier)_
  Aborda fundamentos de interação humano-computador, úteis para criar interfaces intuitivas e acessíveis.

### Referências Online

- **CSS Units (W3C)**
  _([Link: W3C CSS Units](https://www.w3.org/Style/CSS/))_
  Lista unidades de medida do CSS (ex.: `px`, `em`, `rem`, `%`), explicando tamanhos absolutos e relativos, essenciais para design responsivo (`width`, `margin`).

- **CSS Reference (W3C)**
  _([Link: W3C CSS Reference](https://www.w3.org/Style/CSS/))_
  Guia oficial do W3C com especificações completas do CSS, incluindo propriedades, seletores e boas práticas.

- **MDN Web Docs: CSS Preprocessor**
  _([Link: MDN CSS Preprocessor](https://developer.mozilla.org/en-US/docs/Glossary/CSS_preprocessor))_
  Explica pré-processadores CSS (Sass, Less), que facilitam a escrita de estilos com variáveis e aninhamento.

- **W3Schools: CSS Reference**
  _([Link: W3Schools CSS Reference](https://www.w3schools.com/cssref/))_
  Oferece exemplos práticos e tutoriais sobre propriedades CSS, úteis para iniciantes.

---

## Referências Bibliográficas

- **Benyon, D.** (2011). _Interação Humano-Computador_. São Paulo: Pearson Prentice Hall.
  Fundamentos teóricos para design de interfaces e interação com usuários.

- **Friedman, V.** (2018). _Responsive Web Design: What It Is and How to Use It_. Smashing Magazine. Disponível em: [https://www.smashingmagazine.com/2011/01/guidelines-for-responsive-web-design/](https://www.smashingmagazine.com/2011/01/guidelines-for-responsive-web-design/) (acesso em 13 jun. 2022).
  Guia prático sobre design responsivo, com técnicas e exemplos.

- **Paixão, A.** (2020). _Notas de Aula sobre Ambiente Web Cliente x Servidor e as Tecnologias_. Disponível sob licença Creative Commons BR Atribuição – CC BY.
  Material didático sobre o modelo cliente-servidor e tecnologias web.

- **Silva, M. S.** (2014). _Web Design Responsivo: Aprenda a Criar Sites que se Adaptam Automaticamente a Qualquer Dispositivo_. São Paulo: Novatec.
  Livro prático sobre a criação de sites responsivos, com foco em layouts fluidos.

- **StatCounter Global Stats.** (s.d.). _Screen Resolution Stats Brazil_.
  Dados sobre resoluções de tela no Brasil, úteis para design responsivo.

- **Wroblewski, L.** (s.d.). _Mobile First_.
  Aborda a estratégia de priorizar o design para dispositivos móveis.

# **OBJETIVO**

- Reconhecer o ambiente web.

- Descrever o conceito de interface.

- Reconhecer as tecnologias do lado cliente.

- Reconhecer as tecnologias do lado servidor.
