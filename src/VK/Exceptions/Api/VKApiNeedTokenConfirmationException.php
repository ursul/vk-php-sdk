<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiNeedTokenConfirmationException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(25, 'Token confirmation required', $error);
	}
}
