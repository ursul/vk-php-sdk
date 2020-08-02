<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesEditKindDisallowedException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(920, 'Can\'t edit this kind of message', $error);
	}
}
