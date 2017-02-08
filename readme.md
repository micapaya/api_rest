# API REST

## description

Projet d'api rest développé à Pop School, durant la session 2016-2017
	
	L'api fournit une liste d'utilisateurs.


## installation
		
		composer install

## utilisation

		GET /users/
					
					/* renvoit la liste des utilisateurs */

		GET /users/{id}
					
					/* renvoit le détail d'un utilisateur */

		POST /users/
					
					/* ajoute un utilisateur */

		PUT /users/{id}
					
					/* ajoute ou modifie un utilisateur

		DELETE /users/{id}
					
					/* supprime un utilisateur */