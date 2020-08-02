<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamDocAccessException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1153, 'Access to document is denied', $error);
	}
}
