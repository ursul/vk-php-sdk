<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesChatNotAdminException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(925, 'You are not admin of this chat', $error);
	}
}
