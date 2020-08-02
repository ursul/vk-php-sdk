<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAppsSubscriptionInvalidStatusException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1257, 'Subscription is in invalid status', $error);
	}
}
