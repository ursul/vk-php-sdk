<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamApiIdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(101, 'Invalid application API ID', $error);
	}
}
