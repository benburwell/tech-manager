<?php
class AppController extends Controller {
    var $components = array('Acl', 'Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session');
    var $publicControllers = array('pages');

    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->actionPath = 'controllers/';
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'performances', 'action' => 'schedule');
        $this->Auth->loginRedirect = array('controller' => 'performances', 'action' => 'index');
         
        if (in_array(low($this->params['controller']), $this->publicControllers)) {
	    	$this->Auth->allow();
      	}
    }
}
?>
