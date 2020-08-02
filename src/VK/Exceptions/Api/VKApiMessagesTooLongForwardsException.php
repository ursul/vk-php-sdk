<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesTooLongForwardsException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(913, 'Too many forwarded messages', $error);
	}
}
