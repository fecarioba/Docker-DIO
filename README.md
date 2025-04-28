# Docker-DIO

# Projeto de Inserção de Dados com PHP, MySQL e Nginx

Este projeto demonstra como configurar um sistema simples para inserir dados aleatórios em um banco de dados MySQL utilizando PHP, com um servidor Nginx configurado para gerenciar o tráfego. O projeto inclui arquivos de configuração de Nginx e Docker, além do código PHP para a interação com o banco de dados.

## Componentes

1. **Banco de Dados (MySQL)**: A tabela `dados` armazena informações sobre alunos, incluindo dados gerados aleatoriamente e o nome do host do sistema.
2. **PHP**: O script PHP gera dados aleatórios e os insere na tabela `dados` do banco de dados.
3. **Nginx**: Usado como um servidor de proxy reverso para direcionar tráfego para diferentes servidores de aplicação.
4. **Docker**: Configuração básica de contêiner para rodar o Nginx.

## Estrutura do Projeto

O projeto é composto pelos seguintes arquivos:

- **`dockerfile`**: Arquivo de configuração para construir uma imagem Docker com Nginx.
- **`nginx.conf`**: Arquivo de configuração do Nginx.
- **`index.php`**: Código PHP para inserir dados no banco de dados.
- **`banco.sql`**: Script SQL para criar a tabela `dados` no banco de dados MySQL.

## Requisitos

Antes de executar o projeto, certifique-se de que você possui as seguintes ferramentas instaladas:

- **PHP** (versão 7.0 ou superior)
- **MySQL** ou **MariaDB**
- **Docker** (para rodar Nginx)
- **Composer** (se precisar instalar dependências PHP adicionais)

## Configuração

### 1. Configuração do Banco de Dados

Execute o script SQL a seguir no seu banco de dados MySQL para criar a tabela `dados`:

```sql
CREATE TABLE dados (
    AlunoID int PRIMARY KEY, -- ID único do aluno
    Nome varchar(50) NOT NULL, -- Nome do aluno
    Sobrenome varchar(50) NOT NULL, -- Sobrenome do aluno
    Endereco varchar(150), -- Endereço do aluno
    Cidade varchar(50), -- Cidade onde o aluno reside
    Host varchar(50) NOT NULL UNIQUE, -- Nome do host do aluno
    DataRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data e hora do registro
);
