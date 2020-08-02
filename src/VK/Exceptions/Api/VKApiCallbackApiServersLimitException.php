<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiCallbackApiServersLimitException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(2000, 'Servers number limit is reached', $error);
	}
}
