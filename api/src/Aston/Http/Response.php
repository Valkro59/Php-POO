<?php

namespace Aston\Http;

class Response
{
    private $statusCode;
    private $headers = [];
    private $body;

    public function __construct($body = null, $statusCode = 200)
    {
    $this->setBody($body)->setStatusCode($statusCode);
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return Response
     */
    public function setStatusCode(int $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function setBody($body): Response
    {
        $this->body = $body;
        return $this;
    }

    protected function getBody()
    {
        return $this->body;
    }

    public function setHeader(string $key, string $value): Response
    {
        $this->headers[$key] = $value;
        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function redirect(string $url, $statusCode = 302)
    {
        $this->setStatusCode($statusCode);
        $this->setHeader('Location', $url);
        return $this;
    }

    public function generate()
    {
        http_response_code($this->getStatusCode());

        foreach ($this->getHeaders() as $key => $value) {
            header(sprintf('%s: %s', $key, $value));
        }
        return $this->getBody();
    }


}
