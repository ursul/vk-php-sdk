<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMarketTooManyItemsException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1405, 'Too many items', $error);
	}
}
