# Projeto 01

* Vulnerável - Sistema de autenticação
* API REST


## Organização do projeto

### Controllers

* Autenticação
* Views

### Models

### Views

* login
* register

## Possiveis walkthrougth

### Executar web server local no diretorio fonte

```bash
php -S <addr>:<port> -t .
```

### Conexão com MySQL local

Se usar WSL2 com o MySQL
```bash
ip route 

nc <ip-route> 3306 -v -z
Connection to <ip-route> 3306 port [tcp/mysql] succeeded!
```

### Executar os serviços em containers

```bash
sudo docker compose up --build
```