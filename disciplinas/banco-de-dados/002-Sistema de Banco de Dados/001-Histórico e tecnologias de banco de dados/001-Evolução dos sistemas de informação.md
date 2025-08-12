# Evolução dos Sistemas de Informação

A evolução dos sistemas de informação espelha os avanços tecnológicos ao longo do tempo, revolucionando o armazenamento, gerenciamento e acesso a dados. Esta seção explora essa transformação histórica, desde os primórdios até o cenário atual na era da web, com explicações detalhadas e baseadas nas imagens fornecidas.

## Primórdios dos Sistemas de Informação

Antes da era digital, os sistemas de informação eram baseados em registros manuais, com dados armazenados em papéis organizados em pastas. Esse método, embora funcional, era demorado e suscetível a erros. Com a introdução dos computadores, emergiram os sistemas de arquivos, uma primeira tentativa de digitalização. Nessa abordagem, os dados eram diretamente integrados aos programas de aplicação. A imagem abaixo ilustra essa relação: à esquerda, um cilindro representa "Arquivos de dados", conectado por uma seta roxa a um conjunto de retângulos à direita, denominados "Programas de Aplicação com Gerência de Arquivos". Acima, um retângulo maior com a legenda "Dados junto aos Programas" destaca a dependência entre dados e programas.

![A imagem é um diagrama que ilustra a relação entre arquivos de dados e programas de aplicação com gerenciamento de arquivos. No lado esquerdo, há um cilindro representando "Arquivos de dados", que está conectado por uma seta roxa a um grupo de retângulos no lado direito, representando "Programas de Aplicação com Gerência de Arquivos". Acima, um retângulo maior contém a legenda "Dados junto aos Programas", sugerindo que os dados estão integrados ou associados aos programas de aplicação. O diagrama destaca a interação entre o armazenamento de dados e o uso por programas que gerenciam arquivos.](./assets/imagem_manipulacao-BD.png)

Nesse modelo, cada programa precisava incorporar um módulo específico para gerenciar os arquivos de dados, resultando em duplicação de código e aumentando o risco de inconsistências, especialmente quando múltiplos programas acessavam os mesmos arquivos. Essa limitação tornou o sistema ineficiente e difícil de manter.

## Surgimento dos Sistemas de Banco de Dados

A partir dos anos 1960, os sistemas de banco de dados (SBD) surgiram como uma solução para os problemas dos sistemas de arquivos. Eles introduziram a independência entre dados e programas, delegando a gestão dos arquivos de dados a um software intermediário chamado sistema de gerência de banco de dados (SGBD). A imagem a seguir exemplifica essa nova arquitetura:

![Sistema gerenciador de banco de dados](./assets/sgbd.png)

O SGBD atua como um "middleware", servindo como uma camada intermediária que separa os programas de aplicação do acesso direto aos dados armazenados. Essa separação permite que os programas se concentrem nas lógicas e funcionalidades da aplicação, enquanto o SGBD lida com tarefas complexas, como acesso, manipulação e segurança dos dados. Essa modularização é a essência da independência entre dados e programas, marcando uma evolução significativa em relação aos sistemas de arquivos.

> **Comentário:** É crucial diferenciar o sistema de banco de dados (SBD), que abrange o SGBD, os programas de aplicação e os bancos de dados em si, do SGBD, que é o componente específico responsável pela gestão dos dados. Essa distinção reflete a abordagem integrada e especializada dos SBD.

## Estágio Atual: Sistemas de Informação na Web

A revolução da World Wide Web, iniciada no final do século XX, transformou os sistemas de informação com a popularização das interfaces web. Novas linguagens de programação e métodos de armazenamento emergiram, expandindo o papel do SGBD como middleware. A imagem abaixo sintetiza esse estágio contemporâneo:

![Teste](./assets/middleware.png)

Atualmente, os sistemas de informação na web lidam com uma diversidade de fontes de dados, indo além dos dados estruturados típicos dos bancos tradicionais. O conceito de big data reflete o manejo de volumes enormes de informações em múltiplos formatos, localizações e com alta velocidade de geração. As aplicações web, acessíveis em dispositivos que vão de smartphones a supercomputadores, dependem da computação em nuvem (cloud computing) e de servidores de aplicação. O SGBD, nesse contexto, funciona como um pilar essencial, facilitando a integração e o acesso a esses dados complexos em um ambiente digital interconectado.

Essa evolução representa uma transição de sistemas manuais e interdependentes para arquiteturas modulares, escaláveis e adaptadas às demandas tecnológicas e de dados do século XXI.
