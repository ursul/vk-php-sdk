<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiFloodException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(9, 'Flood control', $error);
	}
}
