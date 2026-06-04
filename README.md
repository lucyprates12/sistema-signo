# 🛒 Sistema de Banco de Dados para Loja

Este repositório contém a estrutura de modelagem de dados para um sistema de gestão de loja, desenvolvido em **MySQL**. O projeto simula o ecossistema de um comércio, controlando desde o cadastro de clientes e localização até o fluxo financeiro.

## 🗄️ Estrutura do Banco de Dados

O banco foi modelado de forma relacional para garantir a integridade das informações. Ele está dividido nos seguintes módulos:

* **Clientes (`loja_cliente.sql`):** Armazena os dados cadastrais dos clientes da loja.
* **Localização (`loja_estado.sql` e `loja_municipio.sql`):** Tabelas normalizadas para gerenciar estados e municípios, evitando redundância de dados.
* **Financeiro (`loja_contasreceber.sql`):** Controle de fluxo de caixa, parcelas e valores que a loja tem a receber.
* **Consultas e Rotinas (`loja_routines.sql` e `loja_projetoclientes.sql`):** Automações e consultas estruturadas para relatórios.

## 🛠️ Tecnologias Utilizadas
* **SGBD:** MySQL
* **Conceitos aplicados:** Chaves Primárias (PK), Chaves Estrangeiras (FK), Normalização de Dados e Relacionamentos.
