<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesMessageRequestAlreadySentException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(939, 'Message request already sent', $error);
	}
}
