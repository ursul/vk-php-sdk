<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamPageIdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(140, 'Page not found', $error);
	}
}
