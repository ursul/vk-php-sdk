<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiGroupHostNeed2faException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(704, 'User needs to enable 2FA for this action', $error);
	}
}
