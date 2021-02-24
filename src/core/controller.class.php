<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\core;

class Controller
{
    protected $controller  = null;	// stores the called controller name
    protected $action 	   = null;	// stores the called action name
    protected $currentUser = null;  // store current logged in user here

    protected $params = [];			// stores useful params for views rendering

    public function __construct($controller, $action)
    {
        $this->controller = $controller;
        $this->action = $action;

    }

    /**
     * Check a valid login is available for this current session
     * @return Boolean 		true if the user logged in otherwise false
     */
    public function loggedIn()
    {
        return ( isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true);
    }

    /**
     * Render the correct views for the controller and action, using the params array to extract variables for the views
     */
    public function render()
    {
        // generate the views path
        $viewPath = VIEWSPATH.$this->controller.DIRECTORY_SEPARATOR.$this->action.'.php';

        // check the file exists
        if(!file_exists($viewPath))
        {
            // redirect to error page 404 because not found
            redirect('index.php?c=errors&a=error404&error=noViewPath');
        }

        // extract the params array to get all needed variables for the views
        extract($this->params);

        // just include the views here, it's like putting the code of the php file by copy paste on this position.
        include $viewPath;
    }

    /**
     * Setter for params, which will be used for the render method
     * @param  String $key   Key in the param array
     * @param  Mixed  $value Key value
     */
    protected function setParam($key, $value = null)
    {
        $this->params[$key] = $value;
    }

    public function __destruct()
    {
        $this->controller = null;
        $this->action = null;
        $this->params = null;
    }
}