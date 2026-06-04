# 🛒 Sistema de Banco de Dados para Loja (MySQL)

Este repositório contém a estrutura completa de modelagem de dados para um sistema de gestão de loja, desenvolvido em **MySQL**. O projeto simula o ecossistema de um comércio, controlando desde o cadastro de clientes até o fluxo financeiro.

## 🗄️ Estrutura das Tabelas

O banco foi modelado de forma relacional para garantir a organização e integridade das informações, sendo dividido nos seguintes arquivos:

* **`loja_cliente.sql`:** Armazena os dados cadastrais dos clientes.
* **`loja_estado.sql` e `loja_município.sql`:** Tabelas normalizadas para gerenciar a localização, evitando repetição de dados.
* **`loja_contasreceber.sql`:** Controle do fluxo financeiro, parcelas e valores a receber da loja.
* **`loja_routines.sql` e `loja_projetoclientes.sql`:** Consultas estruturadas, automações e relatórios de clientes.

## 🛠️ Tecnologias e Conceitos Aplicados
* **SGBD:** MySQL (Workbench)
* **Conceitos:** Chaves Primárias (PK), Chaves Estrangeiras (FK), Relacionamentos entre tabelas e Normalização de dados.
