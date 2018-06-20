<?php

namespace Aston\Http;

class Router
{
    /**
     * @var array
     */
   private $routes = [];
    /**
     * @var
     */
   private $request;

   public function setRoute(Route $route): Route
   {
        $this->routes[$route->getPattern()] = $route;
        return $this;
   }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     * @return Router
     */
    public function setRoutes(array $routes): Router
    {
        foreach ($routes as $route){
        $this->setRoutes($route);
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     * @return Router
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    public function match()
    {
        $url = $this->getrequest()->getUrl();
        $method = $this->getRequest()->getMethod;

        foreach ($this->getRoutes() as $pattern => $route){
            if (preg_match('#^'.$pattern.'$#',$url ) && $route->hasMethod($method)){
                $action = $route->getAction();
                $action();
            }
        }
        return false;
    }

}