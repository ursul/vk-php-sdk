<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAuthException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(5, 'User authorization failed', $error);
	}
}
