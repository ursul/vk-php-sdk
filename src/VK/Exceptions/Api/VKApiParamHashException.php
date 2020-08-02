<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamHashException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(121, 'Invalid hash', $error);
	}
}
