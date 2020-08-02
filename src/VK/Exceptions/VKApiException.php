<?php

namespace VK\Exceptions;

use Exception;
use VK\Client\VKApiError;

class VKApiException extends Exception
{
	protected int $error_code;
	protected string $description;
	protected ?string $error_message;
	protected VKApiError $error;
	
    public function __construct(int $error_code, string $description, VKApiError $error)
    {
        $this->error_code = $error_code;
        $this->description = $description;
        $this->error_message = $error->getErrorMsg();
        $this->error = $error;
        
        parent::__construct($error->getErrorMsg(), $error_code);
    }
    
    public function getErrorCode(): int
    {
        return $this->error_code;
    }
	
	public function getDescription(): string
	{
		return $this->description;
	}
	
	public function getErrorMessage(): string
	{
		return $this->error_message;
	}
	
	public function getError(): VKApiError
	{
		return $this->error;
	}
}
