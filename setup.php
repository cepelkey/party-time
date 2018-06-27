<?php
require 'init.php';

$app = new App(true);
$app->add('\atk4\schema\MigratorConsole')
    ->migrateModels([
        new \atk4\login\Model\User($app->db), 
    ]);
    $app->add('CRUD')->setModel(new \atk4\login\Model\User($app->db));

/*
$sid = "ACbaba07b1f1e1425c9ed026ee3125cd9c"; // Your Account SID from www.twilio.com/console
$token = "6f51b7ccefff94a95b0d38b094f2d129"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '8881231234', // Text this number
  array(
    'from' => '9991231234', // From a valid Twilio number
    'body' => 'Hello from Twilio!'
  )
);

print $message->sid;
*/
