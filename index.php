/*
########## INTRODUÇÃO ##########

No Git, existem três áreas principais que são usadas para gerenciar as alterações em um repositório:
    - Área de trabalho (Working Directory): é a área onde os arquivos do projeto são armazenados e editados. É a área onde você realiza as mudanças nos arquivos.
    - Índice (Staging Area): é uma área intermediária entre a área de trabalho e o repositório. Ele armazena as mudanças que você deseja incluir em um próximo commit. O índice é atualizado com o comando "git add".
    - Repositório (Repository): é o local onde o histórico completo das alterações em um projeto é armazenado. Ele contém todos os commits e referências a eles, como branches e tags.

O fluxo de trabalho padrão no Git envolve o seguinte processo:
	- Fazer alterações na área de trabalho.
	- Adicionar as mudanças ao índice usando o comando "git add".
	- Confirmar as mudanças em um novo commit usando o comando "git commit".
	- Enviar o commit para o repositório remoto, se aplicável, usando o comando "git push".

O Git permite que você navegue entre as três áreas para visualizar o estado atual do projeto e gerenciar as alterações que você deseja incluir em um próximo commit. Isso oferece uma grande flexibilidade e controle sobre o processo de desenvolvimento e ajuda a garantir que todas as mudanças sejam registradas de forma precisa e organizada.


########## COMANDOS ##########

Comando [git init] é usado para iniciar um repositório git local, ou seja, você transforma o diretório/pasta em um repositório git.

Comando [git status] é usado para verificar o status do nosso repositório. É através dele que verificamos quais arquivos estão sendo monitorados e quais não estão.

Comando [git add <fileName>] é usado para adicionar o arquivo no índice (staging area). Ou seja, após realizar as mudanças no arquivo e realizar o comando, o arquivo sai da Área de Trabalho (Working Directory) e vai para o Índice (Stage Area).

Comando [git add *] é usado para adicionar todos os arquivos no índice (staging area).

Comando [git commit –m ‘mensagem aqui’] é usado para salvar as alterações no índice para o repositório local, adicionando uma mensagem de confirmação. A partir desse momento, você gerou uma nova versão para os arquivos que estavam no Índice (Staging Area).

Comando [git remote add origin linkRepositorio] é usado para gerenciar os repositórios remotos associados a um repositório Git local. A palavra “origin” é o nome dado para o repositório, pode ser qualquer nome mas o padrão é “origin”.
    - git remote -v: lista as conexões remotas existentes, exibindo o nome de cada conexão e sua URL correspondente;
	- git remote add <name> <url>: adiciona um novo repositório remoto à lista de conexões, especificando um nome e uma URL (o mesmo citado acima);
	- git remote rename <old> <new>: renomeia uma conexão remota existente, alterando o nome de um repositório remoto;
	- git remote remove <name>: remove uma conexão remota existente, removendo a referência a um repositório remoto do repositório local.

Comando [git push] é usado para enviar o conteúdo da pasta para o servidor. Ou seja, sai do Índice (Stage Area) e vai para o Repositório.

Comando [git pull] é usado para atualizar seu repositório local com o repositório do gitHub (ou qualquer outro servidor). Normalmente, é usado quando está trabalhando em equipe, logo, deve ser usado antes de qualquer alteração que você for fazer.

Comando [git clone <linkRepositorio>] é usado para clonar um repositório. Ao fazer esse comando, o git faz o download da pasta do projeto, ou seja, não tem necessidade de criar uma pasta para clonar, o git faz isso de forma automática.


########## GIT COM INTERFACE GRÁFICA ##########

Para usar o Git com uma interface gráfica (GUI), você pode escolher entre várias opções disponíveis:
	- GitHub Desktop;
	- Sourcetree;
	- GitKraken;
	- entre outros.

*/