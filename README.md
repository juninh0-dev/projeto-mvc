# 📘 Aula 01 – Introdução ao MVC

## 📌 O que é MVC?

MVC é um **padrão de arquitetura de software** que separa uma aplicação em três partes principais:

- **Model (Modelo)**
- **View (Visão)**
- **Controller (Controlador)**

O objetivo do MVC é **organizar o código**, facilitar a manutenção, o entendimento e o crescimento do sistema.

---

## 🧠 Por que usar MVC?

Usar MVC traz vários benefícios:

- Código mais organizado
- Separação de responsabilidades
- Facilita manutenção e correções
- Torna o trabalho em equipe mais eficiente
- Deixa o projeto mais escalável

---

## 🧩 Estrutura do MVC

### 🔹 Model (Modelo)
Responsável pela **regra de negócio** e pelos **dados** da aplicação.

Exemplos:
- Classes
- Conexão com banco de dados
- Validações
- Cálculos e regras do sistema

📌 O Model **não sabe** nada sobre telas ou requisições.

---

### 🔹 View (Visão)
Responsável pela **interface com o usuário**.

Exemplos:
- Páginas HTML
- Telas do sistema
- Formulários
- Exibição de dados

📌 A View **apenas mostra os dados**, sem lógica de negócio.

---

### 🔹 Controller (Controlador)
Responsável por **receber as ações do usuário** e decidir o que fazer.

Funções do Controller:
- Receber dados de formulários
- Chamar o Model
- Enviar dados para a View
- Controlar o fluxo da aplicação

📌 Ele é o **intermediário** entre Model e View.

---

## 🔄 Funcionamento do MVC (Fluxo)

1. O usuário interage com a **View**
2. A ação é enviada para o **Controller**
3. O Controller chama o **Model**
4. O Model processa os dados
5. O Controller retorna os dados para a **View**
6. A View exibe o resultado ao usuário

---

## 📁 Exemplo de Estrutura de Pastas

```text
📦 projeto
 ┣ 📂 controllers
 ┣ 📂 models
 ┣ 📂 views
 ┣ 📂 config
 ┗ index.php
