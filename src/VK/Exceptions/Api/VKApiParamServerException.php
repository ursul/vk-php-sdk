<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamServerException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(118, 'Invalid server', $error);
	}
}
