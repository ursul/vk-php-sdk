<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesPrivacyException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(902, 'Can\'t send messages to this user due to their privacy settings', $error);
	}
}
