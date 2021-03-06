<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiInsufficientFundsException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(147, 'Application has insufficient funds', $error);
	}
}
