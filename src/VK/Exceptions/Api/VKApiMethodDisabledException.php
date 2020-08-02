<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMethodDisabledException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(23, 'This method was disabled', $error);
	}
}
