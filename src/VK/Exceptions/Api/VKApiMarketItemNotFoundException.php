<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMarketItemNotFoundException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1403, 'Item not found', $error);
	}
}
