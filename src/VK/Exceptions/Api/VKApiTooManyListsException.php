<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiTooManyListsException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1170, 'Too many feed lists', $error);
	}
}
