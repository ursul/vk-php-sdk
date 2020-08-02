<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesKeyboardInvalidException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(911, 'Keyboard format is invalid', $error);
	}
}
