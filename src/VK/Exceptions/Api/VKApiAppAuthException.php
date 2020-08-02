<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAppAuthException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(28, 'Application authorization failed', $error);
	}
}
