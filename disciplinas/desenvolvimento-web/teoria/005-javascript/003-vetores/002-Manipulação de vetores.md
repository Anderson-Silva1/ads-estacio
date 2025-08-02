# Manipulação de Vetores em JavaScript

A manipulação de vetores (**arrays**) em JavaScript é uma operação fundamental que permite acessar, modificar, adicionar, remover e transformar elementos de forma eficiente. Este documento detalha os métodos mais utilizados e mais importantes da classe `Array`, com exemplos práticos, casos de uso e considerações técnicas.

---

## 1\. Acesso e Exibição de Elementos

### Acesso por Índice

O acesso a elementos individuais é feito usando a notação de colchetes (`[índice]`). O primeiro elemento tem o índice **0**.

- **Sintaxe**: `vetor[índice]`
- **Como Funciona**: O JavaScript acessa diretamente a posição de memória do elemento, garantindo uma operação de tempo constante ($O(1)$).
- **Caso de Uso**: Recuperar um item específico de uma lista, como o primeiro ou o último elemento.

<!-- end list -->

```javascript
const alunos = ["Alex", "Anna", "João"];
console.log(alunos[0]); // Saída: "Alex"
console.log(alunos[2]); // Saída: "João"
console.log(alunos[5]); // Saída: undefined (índice inexistente)
```

### Propriedade `length`

A propriedade `length` retorna a quantidade de elementos no vetor. Ela pode ser usada para redimensionar o vetor.

- **Sintaxe**: `vetor.length`
- **Como Funciona**: Reduzir o `length` remove elementos do final. Aumentá-lo adiciona posições `undefined`.
- **Caso de Uso**: Truncar uma lista para exibir apenas os primeiros resultados ou limpar um vetor.

<!-- end list -->

```javascript
const primos = [2, 3, 5, 7, 11];
console.log(primos.length); // Saída: 5

// Reduzindo o tamanho
primos.length = 3;
console.log(primos); // Saída: [2, 3, 5]
```

### Iteração com Laços de Repetição

O laço **`for...of`** é a forma mais moderna e legível de iterar sobre os elementos de um vetor.

```javascript
const frutas = ["Laranja", "Uva", "Limão"];
for (const fruta of frutas) {
  console.log(fruta);
}
```

---

## 2\. Métodos para Adicionar Elementos

### `push()`

Adiciona um ou mais elementos ao **final** do vetor. É um método **mutável** que modifica o vetor original e retorna o novo `length`.

- **Sintaxe**: `vetor.push(elemento1, elemento2, ...)`
- **Como Funciona**: Adiciona o novo elemento na próxima posição disponível. É uma operação muito eficiente ($O(1)$).
- **Caso de Uso**: Adicionar um novo item a um carrinho de compras ou uma nova tarefa a uma lista de pendências.

<!-- end list -->

```javascript
const alunos = ["Alex", "Anna", "João"];
alunos.push("Helena");
console.log(alunos); // Saída: ["Alex", "Anna", "João", "Helena"]
```

### `unshift()`

Adiciona um ou mais elementos ao **início** do vetor. É um método **mutável** que desloca os elementos existentes para a direita.

- **Sintaxe**: `vetor.unshift(elemento1, elemento2, ...)`
- **Como Funciona**: Todos os elementos existentes são reindexados, o que pode ser menos eficiente para vetores grandes.
- **Caso de Uso**: Inserir um elemento com alta prioridade no início de uma fila ou uma nova notificação no topo de uma lista.

<!-- end list -->

```javascript
const frutas = ["Laranja", "Uva"];
frutas.unshift("Limão");
console.log(frutas); // Saída: ["Limão", "Laranja", "Uva"]
```

### `splice()` (Adição)

Permite adicionar elementos em uma posição específica sem remover nada, especificando `0` como o número de elementos a remover.

- **Sintaxe**: `vetor.splice(índice, 0, elemento1, ...)`
- **Como Funciona**: Localiza o `índice` e insere os novos elementos, deslocando os subsequentes.
- **Caso de Uso**: Inserir um elemento em uma lista ordenada.

<!-- end list -->

```javascript
const alunos = ["Alex", "Anna", "João"];
alunos.splice(2, 0, "Helena");
console.log(alunos); // Saída: ["Alex", "Anna", "Helena", "João"]
```

---

## 3\. Métodos para Remoção de Elementos

### `pop()`

Remove o **último** elemento do vetor e retorna o elemento removido. É um método **mutável**.

- **Sintaxe**: `vetor.pop()`
- **Como Funciona**: Remove o elemento que está no índice `length - 1` e atualiza o `length`. É uma operação eficiente ($O(1)$).
- **Caso de Uso**: Processar itens de uma pilha (LIFO - Last-In, First-Out).

<!-- end list -->

```javascript
const frutas = ["Laranja", "Uva", "Limão"];
const removida = frutas.pop();
console.log(frutas); // Saída: ["Laranja", "Uva"]
console.log(removida); // Saída: "Limão"
```

### `shift()`

Remove o **primeiro** elemento do vetor e retorna o elemento removido. É um método **mutável** que reindexa os demais elementos.

- **Sintaxe**: `vetor.shift()`
- **Como Funciona**: Move cada elemento para o índice anterior, o que pode ser lento para vetores grandes.
- **Caso de Uso**: Processar itens de uma fila (FIFO - First-In, First-Out).

<!-- end list -->

```javascript
const frutas = ["Laranja", "Uva", "Limão"];
const removida = frutas.shift();
console.log(frutas); // Saída: ["Uva", "Limão"]
console.log(removida); // Saída: "Laranja"
```

### `splice()` (Remoção)

Remove um número específico de elementos a partir de um índice e retorna um novo vetor com os elementos removidos.

- **Sintaxe**: `vetor.splice(índice, númeroDeElementos)`
- **Como Funciona**: Remove os elementos especificados e preenche o espaço movendo os elementos restantes.
- **Caso de Uso**: Remover um intervalo de elementos de uma lista, como excluir itens obsoletos.

<!-- end list -->

```javascript
const alunos = ["Alex", "Anna", "João", "Helena"];
const removidos = alunos.splice(1, 2);
console.log(alunos); // Saída: ["Alex", "Helena"]
console.log(removidos); // Saída: ["Anna", "João"]
```

---

## 4\. Métodos para Transformação (Imutáveis)

Esses métodos **não modificam o vetor original** e são a base da programação funcional.

### `map()`

Cria um **novo vetor** aplicando uma função a cada elemento.

- **Sintaxe**: `vetor.map(funcao)`
- **Como Funciona**: Itera sobre o vetor original e armazena o resultado da função em um novo vetor.
- **Caso de Uso**: Converter unidades, formatar dados ou extrair uma propriedade de um array de objetos.

<!-- end list -->

```javascript
const notas = [8, 9, 7];
const notasAjustadas = notas.map((nota) => nota + 1);
console.log(notasAjustadas); // Saída: [9, 10, 8]
```

### `filter()`

Cria um **novo vetor** com os elementos que satisfazem uma condição.

- **Sintaxe**: `vetor.filter(funcaoDeTeste)`
- **Como Funciona**: Para cada elemento, a `funcaoDeTeste` retorna `true` (inclui) ou `false` (ignora).
- **Caso de Uso**: Selecionar produtos em estoque, filtrar usuários ativos ou remover itens nulos.

<!-- end list -->

```javascript
const notas = [8, 5, 7, 9];
const aprovados = notas.filter((nota) => nota >= 7);
console.log(aprovados); // Saída: [8, 7, 9]
```

### `reduce()`

Reduz o vetor a um único valor, aplicando uma função acumuladora.

- **Sintaxe**: `vetor.reduce(funcaoAcumuladora, valorInicial)`
- **Como Funciona**: A função acumuladora processa cada elemento, e o resultado de cada iteração se torna o valor inicial da próxima.
- **Caso de Uso**: Calcular a soma total, a média ou agrupar dados em um único objeto.

<!-- end list -->

```javascript
const notas = [8, 9, 7];
const soma = notas.reduce((total, nota) => total + nota, 0);
console.log(soma); // Saída: 24
```

---

## 5\. Métodos para Busca e Verificação

### `includes()`

Verifica se um elemento existe no vetor, retornando `true` ou `false`.

- **Sintaxe**: `vetor.includes(elemento)`
- **Como Funciona**: Percorre o vetor usando uma comparação estrita (`===`) e para na primeira correspondência.
- **Caso de Uso**: Validar se um item já foi adicionado a uma lista para evitar duplicatas.

<!-- end list -->

```javascript
const frutas = ["Laranja", "Uva", "Limão"];
console.log(frutas.includes("Uva")); // Saída: true
console.log(frutas.includes("Maçã")); // Saída: false
```

### `find()` e `findIndex()`

- `find()`: Retorna o **primeiro elemento** que satisfaz uma condição.

- `findIndex()`: Retorna o **índice** do primeiro elemento que satisfaz a condição.

- **Sintaxe**: `vetor.find(funcaoDeTeste)` / `vetor.findIndex(funcaoDeTeste)`

- **Como Funciona**: Iteram sobre o vetor e retornam o primeiro elemento/índice para o qual a `funcaoDeTeste` retorna `true`. A iteração é interrompida.

- **Caso de Uso**: Localizar o primeiro objeto que atenda a uma propriedade específica.

<!-- end list -->

```javascript
const notas = [8, 5, 7];
const primeiraAprovada = notas.find((nota) => nota >= 7);
console.log(primeiraAprovada); // Saída: 8

const indiceAprovada = notas.findIndex((nota) => nota >= 7);
console.log(indiceAprovada); // Saída: 0
```

### `every()` e `some()`

- `every()`: Retorna `true` se **todos** os elementos passarem no teste.

- `some()`: Retorna `true` se **pelo menos um** elemento passar no teste.

- **Sintaxe**: `vetor.every(funcaoDeTeste)` / `vetor.some(funcaoDeTeste)`

- **Como Funciona**: Interrompem a iteração assim que encontram um resultado que invalide (para `every`) ou valide (para `some`) a condição.

- **Caso de Uso**: Validar se todos os campos de um formulário são válidos (`every`) ou verificar se há pelo menos um item disponível em um inventário (`some`).

<!-- end list -->

```javascript
const notas1 = [8, 9, 7];
const todasAprovadas = notas1.every((nota) => nota >= 7);
console.log(todasAprovadas); // Saída: true
```

---

## 6\. Métodos de Ordenação e Reversão

### `sort()`

Ordena os elementos do vetor **no local**. Para ordenar números, é necessário fornecer uma função de comparação.

- **Sintaxe**: `vetor.sort([funcaoComparacao])`
- **Como Funciona**: Por padrão, ordena como strings. A função de comparação `(a, b) => a - b` é usada para ordenar números em ordem crescente.
- **Caso de Uso**: Organizar uma lista de nomes em ordem alfabética ou ordenar produtos por preço.

<!-- end list -->

```javascript
const frutas = ["Uva", "Laranja", "Limão"];
frutas.sort();
console.log(frutas); // Saída: ["Laranja", "Limão", "Uva"]

const notas = [8, 10, 7];
notas.sort((a, b) => a - b);
console.log(notas); // Saída: [7, 8, 10]
```

### `reverse()`

Inverte a ordem dos elementos do vetor **no local**.

- **Sintaxe**: `vetor.reverse()`
- **Como Funciona**: Troca a posição dos elementos, fazendo o primeiro se tornar o último, e vice-versa.
- **Caso de Uso**: Exibir uma lista de mensagens da mais recente para a mais antiga.

<!-- end list -->

```javascript
const frutas = ["Laranja", "Uva", "Limão"];
frutas.reverse();
console.log(frutas); // Saída: ["Limão", "Uva", "Laranja"]
```

---

## 7\. Métodos Adicionais

### `forEach()`

Executa uma função para cada elemento do vetor. **Não retorna um novo vetor**.

- **Sintaxe**: `vetor.forEach(funcao(elemento, indice, vetor))`
- **Caso de Uso**: Iterar sobre uma lista para realizar uma ação, como imprimir no console.

<!-- end list -->

```javascript
const frutas = ["maçã", "banana", "laranja"];
frutas.forEach((fruta) => console.log(fruta));
```

### `flat()` e `flatMap()`

- `flat()`: Cria um **novo vetor** a partir de um vetor aninhado, "achando" a estrutura para uma profundidade específica.
- `flatMap()`: Combina `map()` e `flat()`, o que é mais eficiente para mapear e achatar ao mesmo tempo.
- **Sintaxe**: `vetor.flat([profundidade])` / `vetor.flatMap(funcao)`
- **Caso de Uso**: Simplificar estruturas de dados aninhadas ou transformar um array de frases em um array de palavras.

<!-- end list -->

```javascript
const aninhado = [1, 2, [3, 4]];
console.log(aninhado.flat()); // Saída: [1, 2, 3, 4]

const frases = ["Olá mundo", "JavaScript é ótimo"];
const palavras = frases.flatMap((frase) => frase.split(" "));
console.log(palavras); // Saída: ["Olá", "mundo", "JavaScript", "é", "ótimo"]
```

### `at()`

Permite acessar elementos do vetor usando índices positivos ou negativos.

- **Sintaxe**: `vetor.at(índice)`
- **Caso de Uso**: Acessar o último elemento de um vetor com `vetor.at(-1)`, o que é mais legível que `vetor[vetor.length - 1]`.

<!-- end list -->

```javascript
const cores = ["vermelho", "verde", "azul"];
console.log(cores.at(-1)); // Saída: "azul"
```

---

## 8\. Boas Práticas

- **Prefira a Imutabilidade**: Use métodos como `map()`, `filter()` e `slice()` para evitar efeitos colaterais.
- **Evite `delete`**: Utilize `splice()`, `pop()` ou `shift()` para remover elementos de forma consistente.
- **Use `const`**: Use `const` para vetores que não terão sua referência alterada, garantindo maior segurança no código.
- **Escolha o Método Certo**:
  - **Transformar**: `map()`
  - **Filtrar**: `filter()`
  - **Agregar**: `reduce()`
  - **Buscar**: `includes()` ou `find()`/`findIndex()`
