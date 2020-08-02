<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiTooManyException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(6, 'Too many requests per second', $error);
	}
}
