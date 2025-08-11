# Inserindo JavaScript em Código HTML: Exemplo Prático

Para consolidar o entendimento sobre o uso do **JavaScript** no desenvolvimento web frontend, conforme descrito no texto, este exemplo prático cria uma página web interativa que utiliza JavaScript para alterar dinamicamente a imagem de uma lâmpada, simulando o acendimento e o apagamento ao clicar em botões. A aplicação combina **HTML** para a estrutura, **CSS** para o estilo e **JavaScript** para a interatividade, atendendo aos conceitos de eventos e manipulação do DOM discutidos anteriormente. O exemplo também incorpora **design responsivo** para garantir boa usabilidade em diferentes dispositivos, conectando-se aos textos anteriores sobre resoluções de tela (ex.: `grafico-telas.jpg`) e layouts fluidos (`layout-fluido.jpg`).

---

### Objetivo do Exemplo

Criar uma página web que:

- Exiba uma imagem de uma lâmpada (inicialmente apagada).
- Inclua dois botões: **"Acender"** e **"Apagar"**, que alteram a imagem da lâmpada entre os estados acesa (`lampada-acesa.jpg`) e apagada (`lampada-apagada.jpg`).
- Use **JavaScript** para manipular o atributo `src` da tag `<img>` em resposta aos eventos de clique.
- Aplique **CSS** para estilizar a página, garantindo um layout fluido e responsivo.
- Demonstre boas práticas, como a separação de HTML, CSS (usando arquivo externo) e JavaScript, e a utilização de eventos para interatividade.

---

### Exemplo Prático

Abaixo estão os códigos para a página HTML (`index.html`) e o arquivo CSS externo (`estilos.css`). As imagens `lampada-acesa.jpg` e `lampada-apagada.jpg` são referenciadas, conforme o exemplo adaptado do W3Schools. Para fins de demonstração, assumo que essas imagens estão disponíveis na mesma pasta do projeto (você pode substituir os caminhos pelas URLs reais ou imagens locais).

```html
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Controle de Lâmpada</title>
    <link rel="stylesheet" href="estilos.css" />
  </head>
  <body>
    <header>
      <h1>Controle de Lâmpada</h1>
    </header>
    <main>
      <img id="lampada" src="lampada-apagada.jpg" alt="Lâmpada apagada" />
      <div class="botoes">
        <button onclick="acenderLampada()">Acender</button>
        <button onclick="apagarLampada()">Apagar</button>
      </div>
      <p>Utilize os botões acima para acender ou apagar a lâmpada.</p>
    </main>
    <script>
      function acenderLampada() {
        document.getElementById("lampada").src = "lampada-acesa.jpg";
        document.getElementById("lampada").alt = "Lâmpada acesa";
      }

      function apagarLampada() {
        document.getElementById("lampada").src = "lampada-apagada.jpg";
        document.getElementById("lampada").alt = "Lâmpada apagada";
      }
    </script>
  </body>
</html>
```

```css
/* CSS Externo */
body {
  font-family: Arial, sans-serif;
  background-color: #e0e0e0;
  margin: 0;
  padding: 20px;
  box-sizing: border-box;
  text-align: center;
}

header {
  margin-bottom: 20px;
}

h1 {
  color: #003087;
}

main {
  max-width: 800px;
  margin: 0 auto;
}

img {
  width: 200px;
  height: auto;
  margin: 20px 0;
}

.botoes {
  display: flex;
  justify-content: center;
  gap: 10px;
}

button {
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #0056b3;
}

p {
  font-size: 18px;
  color: #333;
}

/* Media Queries para Design Responsivo */
@media (max-width: 600px) {
  img {
    width: 150px;
  }

  button {
    width: 100%;
    padding: 12px;
    font-size: 14px;
  }

  .botoes {
    flex-direction: column;
  }

  p {
    font-size: 16px;
  }
}
```

---

### Explicação do Exemplo

#### 1. **Estrutura HTML**

- **Tags Utilizadas**:
  - `<header>` e `<h1>`: Definirem o título da página, estilizado com CSS.
  - `<main>`: Contém a imagem da lâmpada, os botões e um parágrafo explicativo.
  - `<img id="lampada">`: Exibe a imagem da lâmpada, inicialmente no estado apagado (`lampada-apagada.jpg`).
  - `<button>`: Dois botões com eventos `onclick` que chamam funções JavaScript (`acenderLampada` e `apagarLampada`).
  - `<p>`: Instrução para o usuário.
- **Semântica**: Uso de tags semânticas (`<header>`, `<main>`) para melhorar a acessibilidade e a organização, conforme discutido no texto sobre HTML5.
- **Meta Viewport**: Garante que a página seja responsiva, ajustando-se a diferentes tamanhos de tela (ex.: 360x640, comum em smartphones, conforme `grafico-telas.jpg`).

#### 2. **Estilização com CSS**

- **CSS Externo** (`estilos.css`):
  - **Corpo da Página**: Fundo cinza claro (`#e0e0e0`), centralizado com `text-align: center`.
  - **Título**: Cor azul escura (`#003087`), conectando-se ao exemplo anterior de estilização.
  - **Imagem**: Tamanho fixo de 200px, ajustado para 150px em telas menores via media query.
  - **Botões**: Estilizados com fundo azul, bordas arredondadas e efeito de hover; dispostos em linha (`flex`) em telas maiores e empilhados (`flex-direction: column`) em telas menores.
  - **Parágrafo**: Fonte de 18px, reduzida para 16px em telas menores.
- **Responsividade**: A media query `@media (max-width: 600px)` adapta a página para telas pequenas, como 360x640 (13,16% de uso no Brasil, conforme `grafico-telas.jpg`), ajustando o tamanho da imagem, botões e texto.
- **Layout Fluido**: O uso de `max-width: 800px` e `margin: 0 auto` no `<main>` reflete o conceito de layout fluido (`layout-fluido.jpg`), garantindo adaptação proporcional.

#### 3. **Interatividade com JavaScript**

- **Funções**:
  - `acenderLampada()`: Altera o atributo `src` da imagem para `lampada-acesa.jpg` e atualiza o atributo `alt` para acessibilidade.
  - `apagarLampada()`: Reverte a imagem para `lampada-apagada.jpg` e ajusta o `alt`.
- **Manipulação do DOM**: Usa `document.getElementById("lampada")` para acessar e modificar o elemento `<img>`.
- **Eventos**: Os botões utilizam o evento `onclick` para disparar as funções, demonstrando o suporte do JavaScript a eventos, conforme descrito no texto.
- **Acessibilidade**: O atributo `alt` é atualizado dinamicamente para garantir que leitores de tela descrevam o estado atual da lâmpada.

#### 4. **Conexão com Textos Anteriores**

- **JavaScript no Frontend**: O exemplo ilustra a manipulação do DOM e eventos, atendendo ao foco do texto em interatividade no lado cliente.
- **Design Responsivo**: A media query e o layout fluido conectam-se aos conceitos de `layout-fluido.jpg` e `grafico-telas.jpg`, garantindo usabilidade em dispositivos variados.
- **HTML5**: A estrutura usa tags semânticas (`<header>`, `<main>`) e o atributo `alt` para acessibilidade, alinhando-se com as inovações do HTML5 (`html5-1.jpg`).
- **Boas Práticas**: O CSS externo é usado para separar estrutura e estilo, conforme recomendado no texto sobre CSS.

---

### Como Testar

1. **Configuração**:

   - Crie uma pasta para o projeto.
   - Salve o código HTML como `index.html` e o CSS como `estilos.css`.
   - Adicione duas imagens na mesma pasta: `lampada-acesa.jpg` (lâmpada acesa) e `lampada-apagada.jpg` (lâmpada apagada). Você pode encontrar imagens semelhantes no W3Schools ou usar placeholders (ex.: de sites como Unsplash).
   - Abra `index.html` em um navegador, usando um servidor local (ex.: **Live Server** no VS Code ou XAMPP) para garantir que as imagens carreguem corretamente.

2. **Interação**:

   - A página inicia com a lâmpada apagada (`lampada-apagada.jpg`).
   - Clique no botão **"Acender"** para mudar para `lampada-acesa.jpg`.
   - Clique no botão **"Apagar"** para voltar ao estado inicial.
   - Redimensione a janela do navegador para testar a responsividade (ex.: em telas menores que 600px, os botões se empilham verticalmente).

3. **Validação**:
   - Confirme que a imagem muda corretamente ao clicar nos botões.
   - Verifique a responsividade em diferentes tamanhos de tela (ex.: simule 360x640 em ferramentas de desenvolvedor do navegador).
   - Teste a acessibilidade com um leitor de tela para garantir que o atributo `alt` é atualizado.

---

### Respostas às Perguntas Implícitas do Texto

1. **Como usar JavaScript para alterar imagens?**

   - O exemplo usa `document.getElementById` para acessar a tag `<img>` e altera seu atributo `src` em resposta aos eventos de clique, demonstrando manipulação do DOM.

2. **Como explorar eventos com JavaScript?**

   - Os botões utilizam o evento `onclick` para disparar funções que alteram a imagem, ilustrando o suporte a eventos do usuário.

3. **Por que praticar com atividades práticas?**

   - Este exemplo permite aos estudantes experimentar a integração de HTML, CSS e JavaScript, consolidando conceitos como manipulação do DOM, eventos e responsividade.

4. **Como garantir boa usabilidade?**
   - O layout responsivo, com media queries e unidades fluidas, adapta a página a diferentes dispositivos (conforme `grafico-telas.jpg`).
   - A acessibilidade é reforçada com o atributo `alt` dinâmico.
   - A separação de HTML (estrutura), CSS (estilo) e JavaScript (comportamento) segue as boas práticas, facilitando manutenção.

---

### Conclusão

Este exemplo prático demonstra como o **JavaScript** pode ser integrado ao **HTML** e **CSS** para criar uma página web interativa e responsiva. A manipulação da imagem da lâmpada via eventos de clique ilustra o poder do JavaScript no frontend, enquanto o CSS externo garante um design adaptável e esteticamente agradável. A aplicação reflete os conceitos discutidos nos textos anteriores, como responsividade (`layout-fluido.jpg`), diversidade de dispositivos (`grafico-telas.jpg`) e interatividade do HTML5 (`html5-5.jpg`).
