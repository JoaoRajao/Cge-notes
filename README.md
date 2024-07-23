# CGE Notes

CGE Notes é uma aplicação para anotar tudo o que você estiver pensando. Anote seus pensamentos, crie histórias inspiradoras e emocionantes!

## Funcionalidades

- O usuário pode criar uma nota
- O usuário pode editar uma nota
- O usuário pode excluir uma nota
- Cada usuário pode gerenciar suas próprias notas
- Autenticação de usuário (login e logout)
- Redirecionamento para a tela de login após o registro
- Prevenção de cadastro de e-mails duplicados

## Tecnologias Utilizadas

- PHP
- MySQL
- Bootstrap
- HTML/CSS
- JavaScript (jQuery)


## Instalação

### Requisitos

- PHP 7.4+
- MySQL
- Apache
- Composer

### Passos

1. Clone o repositório:

```bash
git clone https://github.com/seuusuario/cgenotes.git

2. Navegue até o diretório do projeto:

```bash
cd cgenotes

4.  Crie o banco de dados e as tabelas necessárias utilizando o script SQL abaixo.

```bash
CREATE DATABASE IF NOT EXISTS cgenotes;

USE cgenotes;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE lembretes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL,
    data_limite DATE NOT NULL,
    usuario_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

5. Inicie o servidor Apache e acesse o projeto no navegador:
http://localhost/cgenotes


Uso
Registro de Usuário
Navegue até http://localhost/cgenotes/register.php para registrar um novo usuário.
Preencha o formulário de registro e clique em "Cadastrar". Você será redirecionado para a tela de login.
Login
Navegue até http://localhost/cgenotes/login.php para fazer login.
Preencha o formulário de login e clique em "Entrar". Você será redirecionado para o dashboard onde pode gerenciar seus lembretes.
Gerenciamento de Lembretes
No dashboard, você pode criar, editar e excluir lembretes.
Use o formulário de criação para adicionar novos lembretes.
Clique em "Editar" ao lado de um lembrete para modificar suas informações.
Clique em "Excluir" para remover um lembrete.