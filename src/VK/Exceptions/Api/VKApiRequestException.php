<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiRequestException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(8, 'Invalid request', $error);
	}
}
