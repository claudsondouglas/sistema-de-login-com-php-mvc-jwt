# Sistema de login com JWT
Não to com muito tempo pra descrever direitinho agora.
é um sistema de login com MVC.

## Design

📁 `app:` é onde fica toda a lógica da aplicação
-- 📁 `Controllers` responsável por receber uma **requisição** e retornar uma **resposta**.
-- 📁 `Facades` responsável por abstrair os pacotes e diminuir o acoplamento e dependência.
-- 📁 `Middlewares` camada responsável por colocar regras na **requisição**
---- 📄 `AuthenticationMiddleware` verifica se existem token e se ele é válido.
-- 📁`Repository` responsável por fazer a ligação entre a **aplicação** e o **banco de dados**.
---- 📄 `Repository` classe base com regras que vai ser estendida por outras classes repositório.
---- 📄 `UserRepository` responsável por pegar os dados dos usuários.
📁`cache` (ainda preciso corrigir)
📁`public` é aqui onde fica o index.php, pois toda a lógica só fica acessível pelo servidor
📁`routes` responsável por ler a url e executar um **controller**
---- 📄 `Web`
📁`views` ficam os arquivos das views, usando o [twig](https://twig.symfony.com/doc/3.x/)

## Pacotes
`league/routes` para o roteador
`laminas/laminas-diactoros` para request e response dentro dos controllers
`firebase/php-jwt` para gerar e validar os json web tokens
`twig/twig` como template engine para formar a view

# DOCKER PHP MYSQL
tentando brincar com o docker ✌

- nginx 1.23 (latest)
- php 8.1
- mysql 8.0 (latest)
---
# Instalação
Instale o docker, baixe o repositório e rode o seguinte comando no bash
```docker-compose up -d --build```

após rodar o comando acesse http://teste.localhost/
