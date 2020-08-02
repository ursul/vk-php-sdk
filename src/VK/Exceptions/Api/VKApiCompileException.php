<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiCompileException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(12, 'Unable to compile code', $error);
	}
}
