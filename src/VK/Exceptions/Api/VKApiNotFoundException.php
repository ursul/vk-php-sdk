<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiNotFoundException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(104, 'Not found', $error);
	}
}
