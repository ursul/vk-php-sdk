<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAccessException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(15, 'Access denied', $error);
	}
}
