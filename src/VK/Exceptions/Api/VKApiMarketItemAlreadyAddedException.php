<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMarketItemAlreadyAddedException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1404, 'Item already added to album', $error);
	}
}
