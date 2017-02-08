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

$app->get('/doc', function () {
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
		GET /users/
		</strong>
					
					* renvoit la liste des utilisateurs *
					<hr>

		<strong>
		GET /users/{id}
		</strong>

					* renvoit le détail d'un utilisateur *
					<hr>

		<strong>
		POST /users/
		</strong>
					
					* ajoute un utilisateur *
					<hr>

		<strong>
		PUT /users/{id}
		</strong>
					
					* ajoute ou modifie un utilisateur *
					<hr>

		<strong>
		DELETE /users/{id}
		</strong>

					* supprime un utilisateur *
					<hr>

		</pre>
	</body>
</html>
EOT;
});

$app->get('/users', function () use ($users) {
	return json_encode($users, false);
});

$app->run();
