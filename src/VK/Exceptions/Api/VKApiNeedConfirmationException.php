<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiNeedConfirmationException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(24, 'Confirmation required', $error);
	}
}
