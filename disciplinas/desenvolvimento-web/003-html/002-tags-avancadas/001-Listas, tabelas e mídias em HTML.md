# Listas, Tabelas e Mídias em HTML

Além das tags básicas do HTML, a linguagem oferece elementos avançados para criar listas, tabelas e incorporar mídias, como vídeos e áudios. Esses recursos permitem organizar e apresentar conteúdo de forma clara, interativa e acessível. A seguir, exploraremos cada um desses elementos, detalhando suas funções, estruturas e boas práticas de uso.

## Listas em HTML

O HTML suporta três tipos de listas: **ordenadas**, **não ordenadas** e **de definição**. Cada tipo possui uma tag "pai" (container) que agrupa os itens e tags "filhas" que representam os itens individuais. As listas de definição incluem uma tag adicional para descrever os itens. Abaixo, apresentamos os tipos de listas e suas respectivas tags:

| Tipo de Lista | Tag Container | Tag de Item | Tag de Descrição |
| ------------- | ------------- | ----------- | ---------------- |
| Ordenada      | `<ol>`        | `<li>`      | -                |
| Não Ordenada  | `<ul>`        | `<li>`      | -                |
| Definição     | `<dl>`        | `<dt>`      | `<dd>`           |

### Listas Ordenadas

Usadas quando a ordem dos itens é relevante, exibindo-os com marcadores numéricos ou alfabéticos (por exemplo, 1, 2, 3 ou a, b, c). Exemplo:

```html
<ol>
  <li>Primeiro item</li>
  <li>Segundo item</li>
  <li>Terceiro item</li>
</ol>
```

**Resultado**: Uma lista numerada (1. Primeiro item, 2. Segundo item, 3. Terceiro item).

### Listas Não Ordenadas

Usadas quando a ordem dos itens não importa, exibindo-os com marcadores visuais, como bullets (•). Exemplo:

```html
<ul>
  <li>Maçã</li>
  <li>Banana</li>
  <li>Laranja</li>
</ul>
```

**Resultado**: Uma lista com bullets (• Maçã, • Banana, • Laranja).

### Listas de Definição

Usadas para listar itens com descrições associadas, como em glossários. A tag `<dt>` define o termo, e a `<dd>` fornece sua descrição. Exemplo:

```html
<dl>
  <dt>HTML</dt>
  <dd>Linguagem de marcação para estruturar páginas web.</dd>
  <dt>CSS</dt>
  <dd>Linguagem para estilizar páginas web.</dd>
</dl>
```

**Resultado**: Uma lista com termos e suas descrições indentadas.

> **Nota**: É possível criar **listas aninhadas** (nested lists), inserindo uma lista dentro de outra, como uma `<ul>` dentro de uma `<li>` de outra `<ul>`. Além disso, os marcadores das listas ordenadas e não ordenadas (números ou bullets) podem ser personalizados com CSS.

## Tabelas em HTML

As tabelas são usadas para organizar dados tabulares, como planilhas ou relatórios, de forma clara e estruturada. Elas são definidas pela tag `<table>`, que atua como container principal, e contêm tags específicas para linhas, colunas e outros elementos.

### Estrutura das Tabelas

As principais tags para tabelas são:

- `<table>`: Container principal da tabela.
- `<tr>`: Define uma linha (table row).
- `<td>`: Define uma célula de dados (table data) dentro de uma linha.
- `<th>`: Define uma célula de título (table header), geralmente em negrito e centralizada, com função semântica para indicar cabeçalhos.
- `<thead>`: Agrupa linhas do cabeçalho, reforçando a semântica.
- `<tbody>`: Agrupa linhas do corpo da tabela.
- `<tfoot>`: Agrupa linhas do rodapé, também com função semântica.

Exemplo de tabela simples:

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
    <tr>
      <td>João</td>
      <td>30</td>
    </tr>
  </tbody>
</table>
```

**Resultado**: Uma tabela com um cabeçalho ("Nome", "Idade") e duas linhas de dados.

### Atributos de Expansão

Para mesclar células, usamos os atributos:

- `rowspan`: Expande uma célula por várias linhas, indicando o número de linhas a ocupar.
- `colspan`: Expande uma célula por várias colunas, indicando o número de colunas a ocupar.

Exemplo com `colspan`:

```html
<table>
  <tr>
    <th colspan="2">Informações</th>
  </tr>
  <tr>
    <td>Ana</td>
    <td>25</td>
  </tr>
</table>
```

**Resultado**: O título "Informações" ocupa duas colunas.

### Semântica nas Tabelas

Historicamente, tabelas foram usadas para criar layouts de páginas web, mas essa prática é desencorajada no HTML5, pois vai contra a semântica e reduz a acessibilidade. Tabelas devem ser usadas exclusivamente para dados tabulares. O uso inadequado pode aumentar o peso da página e dificultar a interpretação por tecnologias assistivas, como leitores de tela.

## Mídias em HTML: Vídeo e Áudio

O HTML5 simplificou a incorporação de mídias com as tags `<video>` e `<audio>`, eliminando a dependência de plugins externos. Essas tags permitem incluir vídeos e áudios diretamente em páginas web, com atributos que controlam seu comportamento.

### Tags de Mídia

- `<video>`: Insere um vídeo.
- `<audio>`: Insere um áudio.

Exemplo:

```html
<video src="video.mp4" controls autoplay loop></video>
<audio src="audio.mp3" controls></audio>
```

### Atributos Comuns

- `src`: Define o caminho do arquivo de mídia (local ou URL externa).
- `controls`: Exibe controles do navegador, como play/pause.
- `autoplay`: Inicia a reprodução automaticamente (use com cautela para não prejudicar a experiência do usuário).
- `loop`: Repete a mídia continuamente.

Exemplo com atributos:

```html
<video src="https://example.com/video.mp4" controls autoplay loop></video>
<audio src="/audios/sample.mp3" controls></audio>
```

> **Nota**: Além desses atributos, o HTML5 suporta **Media Events**, que permitem controlar mídias via JavaScript, como pausar ou ajustar o volume programaticamente.

### Boas Práticas

- Forneça alternativas para acessibilidade, como legendas para vídeos (`<track>`).
- Evite `autoplay` em mídias, pois pode ser intrusivo.
- Use formatos amplamente suportados, como MP4 para vídeos e MP3 para áudios.

## Conclusão

As listas, tabelas e mídias são ferramentas poderosas no HTML para organizar e apresentar conteúdo. Listas permitem estruturar informações de forma clara, tabelas organizam dados tabulares com semântica adequada, e as tags de mídia facilitam a incorporação de conteúdo multimídia. Ao usar esses elementos corretamente, seguindo as práticas semânticas do HTML5 e evitando usos obsoletos, é possível criar páginas web acessíveis, funcionais e visualmente atraentes.
