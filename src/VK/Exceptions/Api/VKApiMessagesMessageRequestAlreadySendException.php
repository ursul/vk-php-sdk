<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesMessageRequestAlreadySendException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(939, 'Message request already send', $error);
	}
}
