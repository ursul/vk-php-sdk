<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiUnknownException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1, 'Unknown error occurred', $error);
	}
}
