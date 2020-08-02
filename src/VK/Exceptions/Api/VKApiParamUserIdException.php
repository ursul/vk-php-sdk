<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamUserIdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(113, 'Invalid user id', $error);
	}
}
