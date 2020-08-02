<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiGroupAuthException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(27, 'Group authorization failed', $error);
	}
}
