<?php
/*
* App Core Class
* Creates URL & loads core controller
* URL FORMAT - /controller/method/params
*/

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        if (!empty($url) && file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->currentController = ucfirst($url[0]);
            unset($url[0]);
        }

        require_once("../app/controllers/{$this->currentController}.php");
        $this->currentController = new $this->currentController;

        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        $urlPath = trim($_SERVER['REQUEST_URI'], '/');
        if (!empty($urlPath)) {
            $urlPathQueryArray = explode("?", $urlPath);
            $urlPath = $urlPathQueryArray[0];
            $url = explode('/', $urlPath);
            return $url;
        }
        return [];
    }
}
