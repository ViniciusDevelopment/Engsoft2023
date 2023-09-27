# Relatório Especificação de Requisitos SKILLSYNC

## Engenharia de software 2023.2 | Universidade Federal do Tocantins - Palmas, 2023

## Introdução

O projeto desenvolvido na disciplina Engenharia de Software do semestre 2023.2 é dividido em etapas. Primeiramente, os integrantes descrevem os casos expandidos de uso e user stories dos requisitos funcionais do sistema. Foi combinado a utilização da plataforma GitHub para gerenciar e controlar as versões do projeto, além do método Kanban para gestão ágil, por meio da ferramenta Trello. Todo o trabalho será desenvolvido no formato markdown.

## Escopo do projeto

### Descrição do projeto
Desenvolver uma plataforma de prestação de serviços que conecta prestadores de serviços a usuários, permitindo que os prestadores ofereçam seus serviços e os usuários solicitem os mesmos. A plataforma deve permitir que os prestadores de serviços criem perfis com informações pessoais, habilidades e preços, além de possibilitar a criação de perfis de usuários com informações de contato e preferências. Os usuários devem ser capazes de buscar e filtrar prestadores com base em critérios como localização e classificações, enviar solicitações de serviços e visualizar históricos de transações. Além disso, o sistema deve suportar a avaliação e revisão de prestadores e oferecer funcionalidades de pagamento seguro.

### Objetivos

* Conectar prestadores de serviços a usuários, facilitando a oferta e solicitação de serviços.
* Permitir que prestadores de serviços criem perfis detalhados com informações pessoais, habilidades e preços.
* Possibilitar aos usuários a criação de perfis com informações de contato e preferências.
* Oferecer recursos de busca e filtragem de prestadores com base em critérios como localização e classificações.
* Permitir que os usuários enviem solicitações de serviços de forma eficiente.
* Manter registros de transações para que os usuários possam acessar seu histórico.
* Facilitar a avaliação e revisão de prestadores de serviços.
* Garantir um sistema de pagamento seguro para todas as transações.
* Organizar o desenvolvimento do projeto em iterações definidas.

### Requisitos Funcionais
Os **Requisitos Funcionais** são uma lista dos recursos e funcionalidades específicas que o sistema, produto ou serviço deve oferecer. Isso pode incluir funcionalidades como login de usuário, solicitação de serviços, geração de relatórios, etc.

### Requisitos não funcionais
Requisitos que não estão diretamente relacionados a funcionalidades específicas, mas são igualmente importantes. Isso pode incluir requisitos de desempenho, segurança, escalabilidade, usabilidade, entre outros.
**RNF01 - Usabilidade:**<br/>

* **RNF02 - Desempenho:** <br/>

* **RNF03 - Segurança:**<br/>

* **RNF04 - Escalabilidade:**<br/>

* **RNF05 - Confiabilidade:** <br/>

* **RNF06 - Manutenibilidade:**<br/>

* **RNF07 - Compatibilidade do Navegador:**<br/>

* **RNF08 - Acessibilidade:** <br/>

* **RNF09 - Disponibilidade:**<br/>

* **RNF10 - Proteção de Dados:** <br/>

### Atores
**Usuário:** Este ator possui um nível de acesso básico dentro da aplicação. Suas principais ações incluem visualizar os serviços disponíveis e solicitar a prestação desses serviços.

**Prestador de Serviço:** Este ator tem todas as funcionalidades de um usuário, com a adição de privilégios adicionais. Além de poder visualizar e solicitar serviços, o prestador de serviço tem a capacidade de adicionar e gerenciar os serviços que oferece. Isso inclui a criação, edição e exclusão de serviços, bem como a definição de preços e informações detalhadas sobre os serviços prestados.

Esses dois atores desempenham papéis distintos no sistema SkillSync, refletindo as diferentes necessidades e responsabilidades de cada grupo de usuários.
### Cronograma

|Período|Ações|
| --------------- | ----------------------------------------------------------------------------------- |
|Semana 1| Inicio do desenvolvimento do Relatório Especificação de Requisitos.|
|Semana 2| Conclusão e apresentação do Relatório Especificação de Requisitos.|
|Semana 3| Inicio do desenvolimento dos requisitos da 1º iteração.|
|Semana 4| Conclusão do desenvolvimento da 1º iteração e apresentação dos resultados obtidos.|

### Metodologia de Desenvolvimento
O Kanban será usado para organizar e gerenciar o fluxo de trabalho da equipe. Criamos um quadro Kanban que representa o progresso do projeto, com colunas como "A fazer", "Em progresso" e "Concluído". As tarefas do Backlog serão adicionadas ao quadro e movidas conforme o progresso.
O desenvolvimento seguirá a arquitetura MVC (Model-View-Controller) em PHP. Cada iteração abordará um conjunto específico de requisitos funcionais e será implementada seguindo os princípios do MVC.
No final de cada iteração, a equipe realizará uma retrospectiva para avaliar o processo e identificar áreas de melhoria. Os aprendizados serão aplicados nas próximas iterações.
Após a conclusão de cada iteração, haverá uma revisão interna e externa para garantir a qualidade do código e da funcionalidade implementada. Os feedbacks serão incorporados para refinamento contínuo.

### Tecnologias e Ferramentas

Neste projeto, serão utilizadas várias tecnologias e ferramentas para o desenvolvimento, divididas entre o back-end, front-end e o sistema de gerenciamento de banco de dados (SGBD).

**Back-End:**<br/>
* Linguagem de Programação PHP: O back-end será desenvolvido utilizando PHP para implementar a lógica de negócios.
* Web Server: Um servidor web, como o Apache, será configurado para hospedar a aplicação PHP.

**Front-End:**<br/>
* HTML (HyperText Markup Language): Para criar a estrutura da interface do usuário e as páginas da web.
* CSS (Cascading Style Sheets): Para estilizar e formatar as páginas da web, garantindo uma aparência atraente e responsiva.
* JavaScript: Será usado para tornar a interface do usuário interativa e dinâmica, lidando com eventos do lado do cliente.

**Banco de Dados:**<br/>
* PostgreSQL: Será usado como o Sistema de Gerenciamento de Banco de Dados (SGBD) principal. O PostgreSQL é um sistema de banco de dados relacional robusto e altamente escalável.

### Critérios de Aceitação
Os critérios de aceitação para este projeto incluem:

* Todas as funcionalidades especificadas nos requisitos funcionais estão implementadas e funcionando corretamente.
* A plataforma passou por testes de qualidade e os bugs foram corrigidos.
* A documentação está completa e bem organizada.
* A equipe apresentou o projeto de forma clara e demonstrou todas as funcionalidades.


### Entregáveis
Os principais entregáveis deste projeto incluem:

*  **Documentação de Requisitos:** Especificação detalhada dos requisitos funcionais e não funcionais do sistema.<br/>
*  **Documentação de Design:** Descrição da arquitetura de software e design da plataforma.<br/>
*  **Código Fonte:** O código-fonte do sistema hospedado no GitHub.<br/>
*  **Relatórios de Progresso:** Relatórios de progresso semanais ou quinzenais para acompanhamento.<br/>
*  **Apresentação Final:** Uma apresentação que destaca as funcionalidades e realizações do projeto.<br/>

### Equipe de Projeto
 [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)<br/>
 <br/>[Raphael Sales de Souza](https://github.com/raphaelsales)<br/>
 <br/>[Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)<br/>
<br/>[Jorge Antonio Motta Braga](https://github.com/jorgespark11)<br/>
<br/>[Wanderson Melo](https://github.com/sadMello)<br/>
<br/>[Pedro Trivelato](https://github.com/Ptrivelato)<br/>
<br/>[Loenis Fernandes](https://github.com/loenisjunior)<br/>

###
## Épicos

### Épico 1: Gerenciamento de Usuário -> RF01, RF02, R03, RF10, RF12.
### Épico 2: Gerenciamento de Serviços -> RF03, RF04, RF08, RF11.
### Épico 3: Gerenciamento de Solicitações de serviços -> RF05, RF06, RF13.
### Épico 4: Avaliação de serviços -> RF09, RF14.

## Iteração 1

- [X] RF01 -  Cadastrar prestador de serviço. [Raphael Sales de Souza](https://github.com/raphaelsales) Revisado por  [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)
- [X] RF02 - Cadastrar usuário. [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/) Revisado por [Raphael Sales de Souza](https://github.com/raphaelsales)
- [X] RF03 -  Realizar Login.  [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/) Revisado por [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)
- [X] RF04 -  Cadastrar serviços. [Pedro Trivelato](https://github.com/Ptrivelato) Revisado por [Jorge Antonio Motta Braga](https://github.com/jorgespark11)
- [X] RF05 -  Buscar serviços por critérios. [Jorge Antonio Motta Braga](https://github.com/jorgespark11) Revisado por [Pedro Trivelato](https://github.com/Ptrivelato)
- [X] RF06 - Enviar solicitação de serviço. [Jorge Antonio Motta Braga](https://github.com/jorgespark11) Revisado por [Wanderson Melo](https://github.com/sadMello)
- [X] RF07 - Responder solicitação de serviço. [Wanderson Melo](https://github.com/sadMello) Revisado por [Jorge Antonio Motta Braga](https://github.com/jorgespark11)

<br/>

## Iteração 2


- [X] RF08 - Realizar o pagamento seguro pelo serviço prestado [Wanderson Melo](https://github.com/sadMello) Revisado por [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)
- [X] RF09 - Avaliar e revisar prestadores de serviço.  [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/) Revisado por [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)
- [X] RF10 -  Manter perfis de prestadores de serviço atualizados. [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/) Revisado por [Wanderson Melo](https://github.com/sadMello)
- [X] RF11 - Notificar usuários sobre atualizações em solicitações de serviço. [Jorge Antonio Motta Braga](https://github.com/jorgespark11) Revisado por [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)
- [X] RF12 -  Permitir que os usuários editem seus perfis. [Jorge Antonio Motta Braga](https://github.com/jorgespark11) Revisado por [Jorge Antonio Motta Braga](https://github.com/jorgespark11)
- [X] RF13 -   Implementar funcionalidade de pesquisa avançada de prestadores de serviço. [Pedro Trivelato](https://github.com/Ptrivelato) Revisado por [Raphael Sales de Souza](https://github.com/raphaelsales)
- [X] RF14 -Oferecer suporte a diferentes métodos de pagamento.  [Raphael Sales de Souza](https://github.com/raphaelsales) Revisado por [Pedro Trivelato](https://github.com/Ptrivelato)
<br/>

---
## **RF01 - Cadastrar prestador de serviço**

<br/>

#### Autor: [Raphael Sales de Souza](https://github.com/raphaelsales)

#### Revisor: [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)

<br/>


| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF01 - Cadastrar prestador de serviço;                                                       |
| Resumo          | Cadastrar um prestador de serviço ao sistema; |
| Ator principal  | Prestador de serviço;                                                    |
| Ator secundário | -                                                                                   |
| Pré-condição    | -                          |
| Pós-condição    |                                          |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O prestador digita seus dados cadastrais nos campos adequados.            |
| Passo 2 | Após preencher seus dados o prestador deve marcar a opção 'sou um prestador de serviços'. |
| Passo 3 | Ao clicar no botão 'cadastrar' no final do formulário, o prestador de serviços é cadastrado. |

<br/>

#### Campos do formulário

| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Nome  | Sim          | Sim       | Texto        |
| Email             | Sim          | Sim       | Email         |
| Senha            | Sim          | Sim       | Password        |
| Confirmar senha  | Sim          | Não       | Password        |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Cadastrar | Cadastra um novo prestador de serviço          | Não possui       |
| Realizar login             | Redireciona o prestador para a tela de login          | Não possui       |

<br/>

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Cadastro realizado com sucesso | Informa que o cadastro foi efetuado com sucesso  | Texto   |
| Erro ao realizar o cadastro | Informa que ocorreu um erro durante o cadastro  | Texto   |
| Senha e confirmar senha não conferem | Informa a senha e a confirmação da senha estão diferentes  | Texto   |

<br/>

### US01 - Cadastrar prestador de serviço

**Prestador de serviços**

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto **um prestador de serviços** eu preciso ser capaz de **criar uma conta** para que **eu possa oferecer meus seerviços** | O **prestador de serviços** deve poder se cadastrar no sistema.|

<br />

### Prototipação de telas
**Tela de cadastro com marcação da opção 'Sou um prestador de serviços'**

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/b6d7912e-bb58-4063-9207-737a786b53a0)


<br />
---

## **RF02 - Cadastrar usuário**

<br/>

#### Autor: [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)

#### Revisor: [Raphael Sales de Souza](https://github.com/raphaelsales)

<br/>

| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF02 - Cadastrar usuário;                                                       |
| Resumo          | Cadastrar um usuário no sistema; |
| Ator principal  | Usuário;                                                    |
| Ator secundário | -                                                                                   |
| Pré-condição    | -                          |
| Pós-condição    |                                                                                    |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O usuário digita seus dados cadastrais nos campos adequados.            |
| Passo 2 | Ao clicar no botão 'cadastrar' no final do formulário, o usuário é cadastrado. |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Cadastrar | Cadastra um novo usuário          | Não possui       |
| Realizar login             | Redireciona o usuário para a tela de login          | Não possui       |

<br/>

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Cadastro realizado com sucesso | Informa que o cadastro foi efetuado com sucesso  | Texto   |
| Erro ao realizar o cadastro | Informa que ocorreu um erro durante o cadastro  | Texto   |
| Senha e confirmar senha não conferem | Informa a senha e a confirmação da senha estão diferentes  | Texto   |
<br/>



| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF01 - Cadastrar prestador de serviço;                                                       |
| Resumo          | Cadastrar um prestador de serviço ao sistema; |
| Ator principal  | Prestador de serviço;                                                    |
| Ator secundário | -                                                                                   |
| Pré-condição    | -                          |
| Pós-condição    |                                          |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O prestador digita seus dados cadastrais nos campos adequados.            |
| Passo 2 | Após preencher seus dados o prestador deve marcar a opção 'sou um prestador de serviços'. |
| Passo 3 | Ao clicar no botão 'cadastrar' no final do formulário, o prestador de serviços é cadastrado. |

<br/>

#### Campos do formulário

| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Nome  | Sim          | Sim       | Texto        |
| Email             | Sim          | Sim       | Email         |
| Senha            | Sim          | Sim       | Password        |
| Confirmar senha  | Sim          | Não       | Password        |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Cadastrar | Cadastra um novo prestador de serviço          | Não possui       |
| Realizar login             | Redireciona o prestador para a tela de login          | Não possui       |

<br/>

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Cadastro realizado com sucesso | Informa que o cadastro foi efetuado com sucesso  | Texto   |
| Erro ao realizar o cadastro | Informa que ocorreu um erro durante o cadastro  | Texto   |
| Senha e confirmar senha não conferem | Informa a senha e a confirmação da senha estão diferentes  | Texto   |

<br/>

### US01 - Cadastrar prestador de serviço

**Prestador de serviços**

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto **um prestador de serviços** eu preciso ser capaz de **criar uma conta** para que **eu possa oferecer meus seerviços** | O **prestador de serviços** deve poder se cadastrar no sistema.|

<br />

### Prototipação de telas
**Tela de cadastro com marcação da opção 'Sou um prestador de serviços'**

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/b6d7912e-bb58-4063-9207-737a786b53a0)


<br />
---
