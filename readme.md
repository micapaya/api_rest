# API REST

## description

Projet d'api rest développé à Pop School, durant la session 2016-2017
	
	L'api fournit une liste d'utilisateurs.


## installation
		
		composer install

## utilisation

		GET /api/users/
					
					/* renvoit la liste des utilisateurs */

		GET /api/users/{id}
					
					/* renvoit le détail d'un utilisateur */

		POST /api/users/
					
					/* ajoute un utilisateur */

		PUT /api/users/{id}
					
					/* ajoute ou modifie un utilisateur

		DELETE /api/users/{id}
					
					/* supprime un utilisateur */