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




### Requisitos

- PHP 7.4+
- MySQL
- Apache
- Composer

### Passos

1. Clone o repositório:

    ```bash
    git clone https://github.com/JoaoRajao/Cge-notes.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd cgenotes
    ```

3.  Crie o banco de dados e as tabelas necessárias utilizando o script SQL abaixo. Usuário: Root Senha:vazia

    ```sql
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
    ```

4. Inicie o servidor Apache e acesse o projeto no navegador:

    ```bash
    http://localhost/cgenotes
    ```

## Uso

### Tela principal

1. Navegue até `http://localhost/cgenotes/index.php` para ver a tela home.
2.Escolha cadastro no cabeçalho do site

### Registro de Usuário

1. Navegue até `http://localhost/cgenotes/register.php` para registrar um novo usuário.
2. Preencha o formulário de registro e clique em "Cadastrar". Você será redirecionado para a tela de login.

### Login

1. Navegue até `http://localhost/cgenotes/login.php` para fazer login.
2. Preencha o formulário de login e clique em "Entrar". Você será redirecionado para o dashboard onde pode gerenciar seus lembretes.

### Gerenciamento de Lembretes

1. No dashboard, você pode criar, editar e excluir lembretes.
2. Use o formulário de criação para adicionar novos lembretes.
3. Clique em "Editar" ao lado de um lembrete para modificar suas informações.
4. Clique em "Excluir" para remover um lembrete.

## Contribuição

Se você deseja contribuir para este projeto, por favor, faça um fork do repositório e envie um pull request com suas melhorias.

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
