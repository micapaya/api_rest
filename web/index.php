<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$users = [
		['id' => 0, 'name' => 'lorem'],
		['id' => 1, 'name' => 'ipsum'],
		['id' => 2, 'name' => 'foo'],
];

$app = new Silex\Application();

//activate debogage mode
$app['debug'] = true;

$app->get('/', function () {
	return <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
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
	return json_encode($users, true);
});

$app->get('/api/users/{id}', function($id) use ($users) {
	return json_encode($users[$id]);
});

$app->post('/api/users/', function(Request $request) use ($users){
	 $name = $request->get('name');

	 $nextIndex = count($users);

	 $users[] = [
	 	'id' => 0,
	 	'name' => $name,
	 ];

	 $lastId = count($users) -1;

	 return $lastId;
});


$app->delete('/api/users/{id}',function($id) use ($users) {
	unset($users[$id]);
	return new Response('',204);
});

$app->run();
