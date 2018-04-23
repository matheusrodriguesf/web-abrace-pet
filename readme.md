# Abrace Pets

## Instruções para rodar o projeto

1. Instale o docker no computador:
	- Para Linux (Ubuntu), utilize esse tutorial: https://docs.docker.com/install/linux/docker-ce/ubuntu/.
	- Para Windows, utilize esse tutorial: https://docs.docker.com/docker-for-windows/install/.

2. Instale o docker-compose:
	- Para Windows, não é preciso instalar. Caso não tenha sido instalado acesse o site abaixo.
	- Para linux, acesse o site: https://docs.docker.com/compose/install/#install-compose.

3. Clone este repositorio:
	- Utilize o comando: `git clone https://github.com/matheusrodriguesf/web-abrace-pet.git`.

4. Acesse a pasta do projeto para subir os containers:
	- No linux é so executar o comando no terminal, dentro da pasta do projeto: `docker-compose up -d`.
	- No Windows acesse a pasta do projeto pelo PowerShell e rode o mesmo comando acima.

5. Subindo o dump e rodando o compose:
	- No Linux execute os comandos : `docker exec -it webabracepet_php_1 bash` e `sh install.sh`.
	- No Windos execute esse comando pelo PowerShell.

6. Acesse o site pelo endereço `http://localhost` ou `127.0.0.1`.
