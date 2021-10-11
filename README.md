# Trainee2021.2
# MyCão Pet Shop
## Projeto Trainee, Code Jr, Grupo #, 2021.2

Desenvolvedores:
- Fulano 1
- Fulano 2
- Fulano 3
- Fulano 4


Scrum Master:

- Maycon Douglas

## GIT TUTORIAL
### Primeira configuração

- Pelo terminal entre na pasta onde irá guardar o projeto: cd /caminho/para/a/pasta, depois inicialize o git na pasta com o comando: git init 

- Outro jeito de fazer o citado acima: clique com o botão direito na pasta e selecione "Git Bash Here" para abrir o terminal do git

- Crie um clone do repositório: git clone link-para-o-repositorio

- Entre na pasta criada pelo comando clone: cd /caminho/para/a/pasta/nova

- Crie sua branch usando como o padrão o nome da feature que você está a desenvolver: git checkout -b frontend_painel_adm

- Após criada a branch você será redirecionado automaticamente a ela, neste espaço que você desenvolverá sua parte do projteto

### Rotina
- Adicione as alterações feitas: git add .

- Cheque em qual branch está e quais alterações foram adicionadas: git status

- Dê um commit com uma mensagem especificando as alterações realizadas: git commit -m "mensagem especificando o que foi feito"

- Envie o commit feito para sua branch: git push origin suabranch

### Quando estiver tudo prontinho
- Volte para a main: git checkout main

- Atualize a main: git pull

- Volte para a sua branch: git checkout nomedabranch

- Mescle a main com a sua branch : git merge main

- Confirme o merge (apenas quando solicitado pelo Scrum Master): git push origin suabranch

- Espera a confirmação do seu SCRUM 

- Volte para a main: git checkout main

- Mescle a main com as alterações enviadas para sua branch (apenas quando solicitado pelo SM): git merge suabranch

- Confirme o merge (apenas quando solicitado pelo SM): git push origin main

### Comandos básicos
- Para atualizar a main: git pull

- Para atualizar alguma branch: git pull origin branch

- Ver informações da branch: git status

- Para trocar de branch: git checkout branch_desejada

- Adicionar todas as alterações feitas: git add .

- Adicionar alteração específica: git add arquivo-especifico

- Para mesclar sua branch com a master (estando dentro da sua branch): git merge main

- Para confirmar o merge: git push origin suabranch
