<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAccessVideoException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(204, 'Access denied', $error);
	}
}
