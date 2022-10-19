# laravel-full

Pequena API para cadastro de eletrodomésticos contendo recursos para criação, listagem, edição e remoção de registros. Utilizando Laravel e VueJS.

# Funcionalidades e Tecnologias

  - CRUD via API para integraćão dos eletrodomésticos.
  - Tratamento de erros.
  - Validação dos dados inseridos com Laravel Request.
  - Separação do código em camadas coerentes.
  - Ambiente docker, é clicar e botar pra rodar!
  - Mensagens amigáveis ao usuário.
  - VueRouter;


# Vantagens
  - Orientado a objetos.
  - Pode ser adaptado para o desenvolvimento de apps híbridos.
  - Padrão MVC.

### Instalação

Tenha instalado o docker e docker-compose em sua máquina para rodar este projeto.

Em seguida, configure o ambiente com o comando:

```sh
docker-compose up -d
```

Quando o comando for finalizado, acesse o container principal da máquina:
```sh
docker exec -it apache-server /bin/bash
```

Em seguida, certifique-se de estar no diretório de trabalho principal:
```sh
cd /var/www/html/
```

Para ter certeza de que todos os pacotes do composer foram instalados, rode o comando do composer novamente e configure o .env
```sh
composer install
cp .env.example .env
```

Agora, instale os pacotes do npm e rode o webpack para comećar interagir com o sistema
```sh
npm install && npm run watch
```

Agora você já pode abrir no seu navegador o sistema e comećar a interagir:
```sh
http://signup.localhost:8000/
```


**Free Software, Hell Yeah!**
