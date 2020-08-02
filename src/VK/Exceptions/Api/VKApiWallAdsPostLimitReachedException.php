<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiWallAdsPostLimitReachedException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(224, 'Too many ads posts', $error);
	}
}
