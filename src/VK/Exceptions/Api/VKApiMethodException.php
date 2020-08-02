<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMethodException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(3, 'Unknown method passed', $error);
	}
}
