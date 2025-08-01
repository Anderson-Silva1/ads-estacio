# Estudo Avançado sobre o Framework Tailwind CSS

O **Tailwind CSS**, lançado em 2017 por Adam Wathan, é um framework CSS **utility-first** (baseado em utilitários) que revolucionou o desenvolvimento front-end ao permitir a criação de interfaces web diretamente no HTML, sem a necessidade de escrever CSS personalizado. Ele é open-source, altamente personalizável e focado em **mobile-first**, oferecendo classes utilitárias pré-definidas que controlam layout, cores, tipografia, espaçamentos e mais. Este estudo detalha o Tailwind CSS, suas características, instalação, principais funcionalidades, exemplos práticos, personalização, vantagens, limitações e comparações com **Bootstrap** e **Foundation**, atendendo à sua solicitação de explicar e exemplificar ao máximo.

---

## **1. Introdução ao Tailwind CSS**

O Tailwind CSS é um framework que adota a filosofia **utility-first**, onde cada classe CSS corresponde a uma propriedade específica (ex.: `bg-blue-500` para fundo azul, `p-4` para padding). Diferentemente de frameworks como Bootstrap e Foundation, que oferecem componentes pré-estilizados (botões, navbars, modais), o Tailwind fornece blocos de construção granulares, permitindo designs personalizados sem sair do HTML. Sua abordagem elimina a necessidade de criar classes CSS complexas, reduzindo o tamanho do código CSS final e acelerando o desenvolvimento.

### **1.1. Características Principais**

- **Utility-First**: Classes utilitárias para estilizar diretamente no HTML (ex.: `flex`, `text-center`, `mt-4`).
- **Mobile-First**: Classes responsivas com prefixos como `sm:`, `md:`, `lg:` para diferentes breakpoints.
- **Just-In-Time (JIT)**: Gera apenas as classes usadas no projeto, reduzindo o tamanho do CSS final.
- **Personalização**: Configuração via arquivo `tailwind.config.js` para ajustar cores, fontes, breakpoints, etc.
- **Sem Componentes Pré-estilizados**: Oferece flexibilidade total, mas exige construção manual de componentes.
- **Integração com Frameworks**: Compatível com React, Vue, Angular, Laravel, Next.js, entre outros.
- **Acessibilidade**: Suporta práticas de acessibilidade com classes utilitárias e integração com bibliotecas como Headless UI.
- **Comunidade e Ecossistema**: Ampla adoção (88.900+ estrelas no GitHub em julho de 2025) e recursos como Tailwind UI e Flowbite.

### **1.2. Comparação com Bootstrap e Foundation**

| **Aspecto**              | **Tailwind CSS**                         | **Bootstrap**                           | **Foundation**                             |
| ------------------------ | ---------------------------------------- | --------------------------------------- | ------------------------------------------ |
| **Abordagem**            | Utility-first                            | Component-based                         | Component-based                            |
| **Pré-processador**      | PostCSS                                  | SASS (v4+)                              | SASS                                       |
| **Dependências**         | Nenhuma (JIT elimina runtime JS)         | Popper.js (v5), jQuery (v4)             | jQuery                                     |
| **Sintaxe**              | Classes utilitárias (ex.: `bg-blue-500`) | Classes funcionais (ex.: `btn-primary`) | Classes funcionais (ex.: `button primary`) |
| **Grid**                 | Grid flexível com classes utilitárias    | 12 colunas, 5-6 breakpoints             | XY Grid (12 colunas, vertical/horizontal)  |
| **Temas**                | Personalização via `tailwind.config.js`  | Temas via Bootswatch/SASS               | Personalização via SASS, sem temas prontos |
| **E-mails Responsivos**  | Não possui ferramenta específica         | Não possui ferramenta específica        | Foundation for Emails                      |
| **Curva de Aprendizado** | Moderada (exige conhecimento de CSS)     | Baixa (sintaxe simples)                 | Moderada (SASS e XY Grid)                  |
| **Comunidade**           | Grande e crescente                       | Muito grande                            | Moderada                                   |

**Fonte**: Adaptado de informações em [tailwindcss.com](https://tailwindcss.com) e [strapi.io](https://strapi.io).[](https://en.wikipedia.org/wiki/Tailwind_CSS)[](https://strapi.io/blog/bootstrap-vs-tailwind-css-a-comparison-of-top-css-frameworks)

---

## **2. Instalação e Configuração**

O Tailwind CSS pode ser instalado de várias formas, dependendo do projeto. A abordagem recomendada é usar o **Tailwind CLI** ou integrá-lo como um plugin **PostCSS**.

### **2.1. Via CDN (para prototipagem)**

Inclua o Tailwind via CDN para testes rápidos:

```html
<link
  href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css"
  rel="stylesheet"
/>
```

**Nota**: O CDN não suporta personalização ou JIT, sendo indicado apenas para protótipos.

### **2.2. Via npm (recomendado para produção)**

1. Instale o Tailwind CSS e dependências:
   ```bash
   npm install -D tailwindcss postcss autoprefixer
   npx tailwindcss init
   ```
2. Configure o arquivo `tailwind.config.js`:
   ```javascript
   module.exports = {
     content: ["./src/**/*.{html,js,jsx,ts,tsx}"],
     theme: {
       extend: {},
     },
     plugins: [],
   };
   ```
3. Crie um arquivo CSS (ex.: `input.css`) e adicione as diretivas do Tailwind:
   ```css
   @tailwind base;
   @tailwind components;
   @tailwind utilities;
   ```
4. Compile o CSS com o Tailwind CLI:
   ```bash
   npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
   ```
5. Inclua o CSS compilado no HTML:
   ```html
   <link href="/dist/output.css" rel="stylesheet" />
   ```

### **2.3. Integração com Frameworks**

O Tailwind é compatível com frameworks como **React**, **Vue**, **Next.js**, **Laravel**, e outros. Exemplo com **Next.js**:

```bash
npx create-next-app my-project
cd my-project
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```

Configure o `tailwind.config.js` e adicione as diretivas ao CSS, como acima.[](https://flowbite.com/docs/getting-started/introduction/)

### **2.4. Dependências**

- **Node.js e npm**: Necessários para instalação via Tailwind CLI.
- **PostCSS**: Usado para processar o Tailwind e aplicar otimizações.
- **Autoprefixer**: Adiciona prefixos de navegador automaticamente.

### **2.5. Just-In-Time (JIT)**

Desde a versão 3, o modo JIT é padrão, gerando apenas as classes usadas no projeto, reduzindo o tamanho do CSS final. Ele escaneia os arquivos HTML/JSX/Vue especificados em `content` no `tailwind.config.js` e gera estilos sob demanda.

---

## **3. Sistema de Grid**

O Tailwind CSS não possui um sistema de grid fixo como o Bootstrap (12 colunas) ou o Foundation (XY Grid). Em vez disso, ele usa classes utilitárias baseadas em **Flexbox** e **CSS Grid** para layouts flexíveis e responsivos.

### **3.1. Características do Grid**

- **Flexbox**: Classes como `flex`, `flex-row`, `flex-col`, `justify-center`, `items-center` para layouts flexíveis.
- **CSS Grid**: Classes como `grid`, `grid-cols-2`, `gap-4` para grids personalizados.
- **Breakpoints Responsivos**: Prefixos como `sm:`, `md:`, `lg:` para ajustar layouts por tamanho de tela.
- **Container Queries**: Suporte a classes como `@container` para estilizar com base no tamanho do contêiner pai (v4+).[](https://tailwindcss.com/docs/responsive-design)
- **Gutters**: Classes como `gap-4` controlam espaçamentos entre itens.

### **3.2. Exemplo de Grid com Flexbox**

```html
<div class="flex flex-col md:flex-row gap-4 p-4">
  <div class="bg-blue-500 text-white p-4 rounded">Item 1</div>
  <div class="bg-green-500 text-white p-4 rounded">Item 2</div>
  <div class="bg-red-500 text-white p-4 rounded">Item 3</div>
</div>
```

**Explicação**:

- `flex flex-col`: Layout em coluna em telas pequenas.
- `md:flex-row`: Muda para linha em telas médias (≥768px).
- `gap-4`: Espaçamento de 1rem entre itens.
- `p-4`: Padding interno de 1rem.

### **3.3. Exemplo de Grid com CSS Grid**

```html
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-4">
  <div class="bg-blue-500 text-white p-4 rounded">Coluna 1</div>
  <div class="bg-green-500 text-white p-4 rounded">Coluna 2</div>
  <div class="bg-red-500 text-white p-4 rounded">Coluna 3</div>
</div>
```

**Explicação**:

- `grid grid-cols-1`: Uma coluna em telas pequenas.
- `sm:grid-cols-2`: Duas colunas em telas pequenas (≥576px).
- `md:grid-cols-3`: Três colunas em telas médias (≥768px).
- `gap-4`: Espaçamento de 1rem entre colunas.

### **3.4. Exemplo com Container Queries**

```html
<div class="@container">
  <div class="grid grid-cols-1 @sm:grid-cols-2 gap-4">
    <img src="photo1.jpg" class="aspect-square @sm:aspect-[3/2] object-cover" />
    <img src="photo2.jpg" class="aspect-square @sm:aspect-[3/2] object-cover" />
  </div>
</div>
```

**Explicação**:

- `@container`: Define o elemento como um contêiner.
- `@sm:grid-cols-2`: Aplica duas colunas quando o contêiner atinge o tamanho `sm`.[](https://tailwindcss.com/)

---

## **4. Componentes Principais**

O Tailwind CSS não fornece componentes pré-estilizados como Bootstrap ou Foundation, mas permite criar componentes personalizados combinando classes utilitárias. A biblioteca **Tailwind UI** (paga) e **Flowbite** (open-source) oferecem componentes prontos baseados em Tailwind.

### **4.1. Botões**

```html
<button
  class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600"
>
  Clique Aqui
</button>
```

**Explicação**:

- `bg-blue-500`: Fundo azul.
- `text-white`: Texto branco.
- `font-semibold`: Fonte semi-negrito.
- `py-2 px-4`: Padding vertical (0.5rem) e horizontal (1rem).
- `rounded`: Bordas arredondadas.
- `hover:bg-blue-600`: Fundo azul mais escuro ao passar o mouse.

### **4.2. Navbar**

```html
<nav class="bg-gray-800 text-white p-4">
  <div class="container mx-auto flex justify-between items-center">
    <a href="#" class="text-xl font-bold">Logo</a>
    <div class="hidden md:flex space-x-4">
      <a href="#" class="hover:text-gray-300">Início</a>
      <a href="#" class="hover:text-gray-300">Serviços</a>
      <a href="#" class="hover:text-gray-300">Contato</a>
    </div>
    <button class="md:hidden" onclick="toggleMenu()">
      <svg
        class="w-6 h-6"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4 6h16M4 12h16m-7 6h7"
        />
      </svg>
    </button>
  </div>
</nav>
<script>
  function toggleMenu() {
    document.querySelector(".md\\:flex").classList.toggle("hidden");
  }
</script>
```

**Explicação**:

- `bg-gray-800`: Fundo cinza escuro.
- `container mx-auto`: Centraliza o conteúdo com largura máxima.
- `flex justify-between items-center`: Alinha itens horizontalmente com espaço entre eles.
- `hidden md:flex`: Esconde o menu em telas pequenas, exibe em telas médias.
- `space-x-4`: Espaçamento horizontal de 1rem entre links.

### **4.3. Modal**

```html
<!-- Botão para abrir o modal -->
<button
  class="bg-blue-500 text-white py-2 px-4 rounded"
  onclick="document.getElementById('myModal').classList.remove('hidden')"
>
  Abrir Modal
</button>
<!-- Modal -->
<div
  id="myModal"
  class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center"
>
  <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
    <h2 class="text-xl font-bold mb-4">Modal de Exemplo</h2>
    <p class="mb-4">Conteúdo do modal aqui.</p>
    <button
      class="bg-red-500 text-white py-2 px-4 rounded"
      onclick="document.getElementById('myModal').classList.add('hidden')"
    >
      Fechar
    </button>
  </div>
</div>
```

**Explicação**:

- `hidden`: Oculta o modal por padrão.
- `fixed inset-0`: Posiciona o modal sobre toda a tela.
- `bg-black bg-opacity-50`: Fundo semi-transparente.
- `max-w-md w-full`: Largura máxima do modal com responsividade.

### **4.4. Formulários**

```html
<form class="space-y-4 max-w-md mx-auto p-4">
  <div>
    <label for="name" class="block text-sm font-medium text-gray-700"
      >Nome</label
    >
    <input
      id="name"
      type="text"
      class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
      required
    />
  </div>
  <div>
    <label for="email" class="block text-sm font-medium text-gray-700"
      >E-mail</label
    >
    <input
      id="email"
      type="email"
      class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
      required
    />
  </div>
  <button
    type="submit"
    class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600"
  >
    Enviar
  </button>
</form>
```

**Explicação**:

- `space-y-4`: Espaçamento vertical de 1rem entre elementos.
- `max-w-md mx-auto`: Centraliza o formulário com largura máxima.
- `focus:ring-blue-500`: Adiciona um anel azul ao focar nos inputs.

### **4.5. Card Component**

```html
<div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
  <img src="image.jpg" alt="Imagem" class="w-full h-48 object-cover" />
  <div class="p-4">
    <h3 class="text-lg font-semibold">Título do Card</h3>
    <p class="text-gray-600">Descrição breve do conteúdo do card.</p>
    <a href="#" class="mt-2 inline-block text-blue-500 hover:underline"
      >Saiba Mais</a
    >
  </div>
</div>
```

**Explicação**:

- `max-w-sm`: Largura máxima do card.
- `shadow-lg`: Sombra grande para destaque.
- `h-48 object-cover`: Imagem com altura fixa e cobertura total.

---

## **5. Personalização com Tailwind**

O Tailwind é altamente personalizável através do arquivo `tailwind.config.js` e suporta extensões via plugins e diretivas CSS.

### **5.1. Configuração do Tema**

Modifique cores, fontes, breakpoints, etc., no `tailwind.config.js`:

```javascript
module.exports = {
  content: ["./src/**/*.{html,js,jsx,ts,tsx}"],
  theme: {
    extend: {
      colors: {
        customBlue: "#1e40af",
      },
      fontSize: {
        xxl: "2.5rem",
      },
      spacing: {
        18: "4.5rem",
      },
    },
  },
  plugins: [],
};
```

**Exemplo de Uso**:

```html
<div class="bg-customBlue text-xxl p-18">Conteúdo personalizado</div>
```

### **5.2. Classes Arbitrárias**

Use notação de colchetes para valores personalizados:

```html
<div class="w-[150px] h-[100px] bg-[#ff5733] rounded-[10px]"></div>
```

**Explicação**:

- `w-[150px]`: Largura personalizada de 150px.
- `bg-[#ff5733]`: Cor de fundo hexadecimal personalizada.[](https://tailwindcss.com/docs/adding-custom-styles)

### **5.3. Diretiva @apply**

Combine classes utilitárias em estilos personalizados:

```css
.custom-button {
  @apply bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600;
}
```

**Uso**:

```html
<button class="custom-button">Botão Personalizado</button>
```

### **5.4. Plugins**

Crie utilitários personalizados com plugins:

```javascript
const plugin = require("tailwindcss/plugin");

module.exports = {
  plugins: [
    plugin(function ({ addUtilities }) {
      addUtilities({
        ".custom-shadow": {
          boxShadow: "0 10px 20px rgba(0,0,0,0.3)",
        },
      });
    }),
  ],
};
```

**Uso**:

```html
<div class="custom-shadow">Elemento com sombra personalizada</div>
```

---

## **6. Vantagens e Limitações**

### **6.1. Vantagens**

- **Rapidez no Desenvolvimento**: Classes utilitárias eliminam a necessidade de CSS personalizado. [geeksforgeeks.org](https://www.geeksforgeeks.org/css/introduction-to-tailwind-css/)
- **Flexibilidade**: Permite designs únicos sem dependência de componentes pré-estilizados.
- **Responsividade**: Classes responsivas simplificam layouts para diferentes dispositivos.
- **Tamanho Reduzido**: O modo JIT gera apenas o CSS necessário, resultando em arquivos menores (geralmente <10kB em produção). [v2.tailwindcss.com](https://v2.tailwindcss.com/)
- **Manutenção**: Mudanças locais não afetam outros elementos, ao contrário de CSS global.
- **Integração com Frameworks**: Compatível com React, Vue, Next.js, Laravel, etc. [flowbite.com/docs](https://flowbite.com/docs/getting-started/introduction/)

### **6.2. Limitações**

- **Curva de Aprendizado**: Exige familiaridade com CSS e memorização de classes utilitárias.
- **HTML Verboso**: Muitas classes no HTML podem parecer desorganizadas em projetos grandes. [ionos.com](https://www.ionos.com/digitalguide/websites/web-development/tailwind-css-overview/)
- **Sem Componentes Prontos**: Diferentemente de Bootstrap e Foundation, exige construção manual de componentes.
- **Dependência de Conhecimento CSS**: Iniciantes sem base em CSS podem ter dificuldade. [kinsta.com](https://kinsta.com/blog/tailwind-css/)
- **Separação de Interesses**: Misturar estilos e HTML pode violar o princípio de separação de interesses. [ionos.com](https://www.ionos.com/digitalguide/websites/web-development/tailwind-css-overview/)

---

## **7. Casos de Uso**

O Tailwind CSS é ideal para:

- **Prototipagem Rápida**: Criar interfaces rapidamente com classes utilitárias.
- **Projetos Personalizados**: Designs únicos sem restrições de estilos pré-definidos.
- **Aplicações Web**: Integração com frameworks como React e Next.js para dashboards e sistemas dinâmicos.
- **Landing Pages**: Criação de páginas promocionais com layouts responsivos.
- **Equipes com Designers UX**: Permite implementar designs complexos com precisão.

### **7.1. Exemplo de Caso de Uso: Landing Page**

Crie uma landing page com um hero section, seção de recursos e formulário de inscrição:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/dist/output.css" rel="stylesheet" />
    <title>Landing Page com Tailwind</title>
  </head>
  <body class="font-sans">
    <!-- Hero Section -->
    <header class="bg-gray-900 text-white py-16">
      <div class="container mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">
          Bem-vindo ao Nosso Produto
        </h1>
        <p class="text-lg md:text-xl mb-6">
          Solução inovadora para suas necessidades.
        </p>
        <a
          href="#signup"
          class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600"
          >Inscreva-se</a
        >
      </div>
    </header>

    <!-- Seção de Recursos -->
    <section class="py-12 bg-gray-100">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Nossos Recursos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-2">Recurso 1</h3>
            <p class="text-gray-600">Descrição do recurso 1.</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-2">Recurso 2</h3>
            <p class="text-gray-600">Descrição do recurso 2.</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-2">Recurso 3</h3>
            <p class="text-gray-600">Descrição do recurso 3.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Formulário de Inscrição -->
    <section id="signup" class="py-12">
      <div class="container mx-auto px-4 max-w-md">
        <h2 class="text-3xl font-bold text-center mb-8">Inscreva-se Agora</h2>
        <form class="space-y-4">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700"
              >Nome</label
            >
            <input
              id="name"
              type="text"
              class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
              required
            />
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700"
              >E-mail</label
            >
            <input
              id="email"
              type="email"
              class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
              required
            />
          </div>
          <button
            type="submit"
            class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 w-full"
          >
            Enviar
          </button>
        </form>
      </div>
    </section>
  </body>
</html>
```

**Explicação**:

- **Hero Section**: Usa classes como `bg-gray-900`, `text-4xl`, `md:text-6xl` para um cabeçalho impactante e responsivo.
- **Seção de Recursos**: Grid com `grid-cols-1 md:grid-cols-3` para layout de uma ou três colunas dependendo da tela.
- **Formulário**: Formulário centralizado com `max-w-md mx-auto` e validação visual com `focus:ring-blue-500`.

---

## **8. Ecossistema e Ferramentas**

O Tailwind CSS possui um ecossistema rico que complementa suas funcionalidades:

- **Tailwind UI**: Biblioteca paga de componentes e templates (React, Vue, HTML).[](https://tailwindcss.com/plus)
- **Flowbite**: Biblioteca open-source de componentes interativos (botões, modais, navbars).[](https://flowbite.com/docs/getting-started/introduction/)
- **Headless UI**: Componentes sem estilo para integração com Tailwind, focando em acessibilidade.
- **Tailwind CSS IntelliSense**: Extensão para VS Code que oferece sugestões de classes.[](https://www.freecodecamp.org/news/what-is-tailwind-css-a-beginners-guide/)
- **PurgeCSS**: Integrado ao JIT para remover classes não utilizadas, otimizando o CSS final.

---

## **9. Conclusão**

O **Tailwind CSS** é um framework revolucionário que prioriza flexibilidade e rapidez no desenvolvimento front-end. Sua abordagem **utility-first** permite criar designs personalizados diretamente no HTML, eliminando a necessidade de CSS personalizado em muitos casos. Comparado ao **Bootstrap**, que oferece componentes prontos e é ideal para prototipagem rápida, e ao **Foundation**, que destaca-se pelo XY Grid e suporte a e-mails, o Tailwind brilha em projetos que exigem designs únicos e integração com frameworks modernos. Apesar da curva de aprendizado e da verbosidade no HTML, sua eficiência, responsividade e personalização o tornam uma escolha poderosa para desenvolvedores experientes e equipes de design.

---

## **Recursos Adicionais**

- **Site Oficial**: [https://tailwindcss.com](https://tailwindcss.com)
- **Documentação**: [https://tailwindcss.com/docs](https://tailwindcss.com/docs)
- **Tailwind UI**: [https://tailwindui.com](https://tailwindui.com)
- **Flowbite**: [https://flowbite.com](https://flowbite.com)
- **Repositório GitHub**: [https://github.com/tailwindlabs/tailwindcss](https://github.com/tailwindlabs/tailwindcss)
- **Comunidade**: Discord, Twitter (@tailwindcss), e fóruns como Stack Overflow.

---

## **Exercícios Práticos**

1. Crie uma **navbar responsiva** com um menu hamburger que aparece em telas pequenas.
2. Desenvolva um **card de produto** com imagem, título, descrição e botão, usando classes responsivas.
3. Implemente um **formulário de login** com validação visual e layout centralizado.
4. Personalize o tema do Tailwind para incluir uma paleta de cores personalizada e um novo breakpoint (`3xl: 1600px`).
5. Crie uma **galeria de imagens** usando CSS Grid com layout que muda de 1 para 4 colunas conforme o tamanho da tela.

Se precisar de mais exemplos, detalhes sobre algum componente específico ou ajuda com os exercícios, é só avisar!
