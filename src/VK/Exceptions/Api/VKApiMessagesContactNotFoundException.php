<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesContactNotFoundException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(936, 'Contact not found', $error);
	}
}
