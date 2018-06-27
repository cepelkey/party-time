<?php

require 'init.php';

$app = new App(true);

// check that admin user is logged-in
$app->add(new \atk4\login\Auth())->setModel(new \atk4\login\Model\User($app->db));

$app->add(new Dashboard())->setModel(new Guest($app->db));
