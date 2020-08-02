<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiPrettyCardsTooManyCardsException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1901, 'Too many cards', $error);
	}
}
