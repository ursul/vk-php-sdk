<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMarketVariantNotFoundException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1416, 'Variant not found', $error);
	}
}
