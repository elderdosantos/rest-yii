rest-yii
========

Exemplo de uma api rest simples.
CRUD de usuários.
O model Usuário deve ser criado, o controller foi feito apenas para demonstrar a organização do projeto.
A parte de models não tem diferença nenhuma à que estão acostumados a trabalhar.

= Como Usar?
As requisições devem ser enviadas para a api utilizando o padrão de rotas do rest.
Seguindo esses padrões as requisições devem ser:
- Para listar todos os usuários
Requisição tipo GET para a url http://seu-dominio/usuarios
- Para inserir um usuário:
Requisição tipo POST para a url http://seu-dominio/usuarios
- Para apagar um usuario:
Requisição tipo DELETE para a url http://seu-dominio/usuarios/id-do-usuario-que-sera-deletado
- Para atualizar (fazer update) um usuário
Requisição tipo PUT para a url http://seu-dominio/usuarios/id-do-usuario-que-sera-atualizado
- Para ver os dados de um usuario
Requisição tipo GET para a url http://seu-dominio/usuarios/id-do-usuario-que-sera-visualizado

