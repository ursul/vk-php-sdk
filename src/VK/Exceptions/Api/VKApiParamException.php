<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(100, 'One of the parameters specified was missing or invalid', $error);
	}
}
