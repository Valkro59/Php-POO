<?php

namespace Aston\Http;

class Request
{
    /**
     * @var string
     */
    private $uri;

    /**
     * @var mixed
     */
    private $rawBody;

    public function __construct(string $uri = null)
    {
        if ($uri == null) {
            $uri = $_SERVER['REQUEST_URI'];
        }
        $this->setUri($uri);
    }

    /**
     * @return string
     */
    public function getUri() : string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return Request
     */
    public function setUri(string $uri) : Request
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * @return string (GET, POST, PUT, DELETE, HEADER, ...)
     */
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function isMethod(string $method): bool
    {
        return $this->getMethod() === $method;
    }

    public function getPost(string $key, $default = null)
    {
        return isset($_POST[$key]) ? $_POST[$key] : $default;
    }

    public function getParam(string $key, $default = null)
    {
        return isset($_GET[$key]) ? $_GET[$key] : $default;
    }

    /**
     * @return mixed
     */
    public function getRawBody()
    {
        if ($this->rawBody == null) {
            $this->rawBody = file_get_contents('php://input');
        }
        return $this->rawBody;
    }

    /**
     * @param mixed $rawBody
     * @return Request
     */
    public function setRawBody($rawBody)
    {
        $this->rawBody = $rawBody;
        return $this;
    }


}