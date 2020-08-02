<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiUserDeletedException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(18, 'User was deleted or banned', $error);
	}
}
