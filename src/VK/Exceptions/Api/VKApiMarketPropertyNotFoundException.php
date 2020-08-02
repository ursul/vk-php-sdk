<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMarketPropertyNotFoundException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1417, 'Property not found', $error);
	}
}
