<?php
require 'init.php';

$app = new App();

$columns = $app->add('Columns');

$left = $columns->addColumn();
$right = $columns->addColumn();

$right->add(['Message', 'Welcome to the Party, Pal!', 'info'])->text->addParagraph('Our party has a bring your own drink policy, so be sure to grab some beer or other adult beverage of your choice.');

$form = $left->add('Form');
$form->setModel(new Guest($app->db));
$form->onSubmit(function($form) {
    
    // save guest data to db
    $form->model->save();
    $fullName = $form->model['first_name'] . ' ' . $form->model['last_name'];

    $sid = "ACbaba07b1f1e1425c9ed026ee3125cd9c"; // Your Account SID from www.twilio.com/console
    $token = "6f51b7ccefff94a95b0d38b094f2d129"; // Your Auth Token from www.twilio.com/console

    $client = new Twilio\Rest\Client($sid, $token);
    $message = $client->messages->create(
        '+12103177547', // Text this number
        array(
            'from' => '+18303553639', // From a valid Twilio number
            'body' => 'Guest ' . $fullName . ' (' . $form->model['phone'] . ') will be coming, and bringing '. $form->model['drink_qty'] .' drinks'
        )
    );
    return $form->success('Thank You! We will be waiting for you, ' . $form->model['first_name']);
});