<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiStoryIncorrectReplyPrivacyException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1602, 'Incorrect reply privacy', $error);
	}
}
