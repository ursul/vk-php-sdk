<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiServerException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(10, 'Internal server error', $error);
	}
}
