<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$users = [
		'lorem',
		'ipsum',
		'foo',
		'bar',
		'baz',
];

$app = new Silex\Application();

$app->get('/', function () {
	return <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<pre>
		<strong>
		GET /api/users/
		</strong>		

					* revoie la doc *
					<hr>

		<strong>
		GET /api/users/
		</strong>
					
					* renvoie la liste des utilisateurs *
					<hr>

		<strong>
		GET /api/users/{id}
		</strong>

					* renvoit le détail d'un utilisateur *
					<hr>

		<strong>
		POST /api/users/
		</strong>
					
					* ajoute un utilisateur *
					<hr>

		<strong>
		PUT /api/users/{id}
		</strong>
					
					* ajoute ou modifie un utilisateur *
					<hr>

		<strong>
		DELETE /api/users/{id}
		</strong>

					* supprime un utilisateur *
					<hr>

		</pre>
	</body>
</html>
EOT;
});

$app->get('/api/users', function () use ($users) {
	return json_encode($users, false);
});

$app->run();
