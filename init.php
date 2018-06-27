<?php
require 'vendor/autoload.php';

class App extends \atk4\ui\App {
    function __construct($is_admin = false) {
        parent::__construct('Party App');

        // Depending on the use, select appropriate layout
        if ($is_admin) {
            $this->initLayout('Admin');
            $this->layout->menuLeft->addItem(['Dashboard', 'icon'=>'birthday cake'],['dashboard']);
            $this->layout->menuLeft->addItem(['Guests', 'icon'=>'users'],['admin']);
        } else {
            $this->initLayout('Centered');
        }
        $this->dbConnect(isset($_ENV['CLEARDB_DATABASE_URL']) ? $_ENV['CLEARDB_DATABASE_URL'] : 'mysql://root:@localhost/party-time');
    }
}
class Guest extends \atk4\data\Model {
    public $table = 'guests';
    function init() {
        parent::init();

        $this->addFields([
            ['first_name', 'required'=>true],
            ['last_name', 'required'=>true],
            ['email', 'required'=>true],
            'phone'
        ]);
        $this->addField('age', ['required'=>true]);
        $this->addField('gender', ['enum'=>['male','female']]);
        $this->addField('drink_qty', ['ui'=>['hint','BYOB Policy requires you to bring drinks!']]);
    }
}
class Dashboard extends \atk4\ui\View {
    public $defaultTemplate = __DIR__.'/dashboard.html';

    function setModel($m){
        $model = parent::setModel($m);
        $this->template['guests'] = $model->action('count')->getOne();
        $this->template['drinks'] = $model->action('fx',['sum','drink_qty'])->getOne();
        return $model;
    }
}