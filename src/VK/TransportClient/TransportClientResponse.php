<?php

namespace VK\TransportClient;

class TransportClientResponse
{
	private ?int $http_status;
	private ?array $headers;
	private ?string $body;
	
    public function __construct(?int $http_status, ?array $headers, ?string $body)
    {
        $this->http_status = $http_status;
        $this->headers = $headers;
        $this->body = $body;
    }
    
    public function getBody(): ?string
    {
        return $this->body;
    }
    
    public function getHttpStatus(): ?int
    {
        return $this->http_status;
    }
    
    public function getHeaders(): ?array
    {
        return $this->headers;
    }
}
