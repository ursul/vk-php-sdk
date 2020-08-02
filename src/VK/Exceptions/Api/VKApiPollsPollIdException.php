<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiPollsPollIdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(251, 'Invalid poll id', $error);
	}
}
