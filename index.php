<?php
require 'init.php';

$app = new App();

$columns = $app->add('Columns');

$left = $columns->addColumn();
$right = $columns->addColumn();

$right->add(['Message', 'Welcome to the Party, Pal!', 'info'])->text->addParagraph('Our party has a bring your own drink policy, so be sure to grab some beer or other adult beverage of your choice.');

$left->add('Form')->setModel(new Guest($app->db));