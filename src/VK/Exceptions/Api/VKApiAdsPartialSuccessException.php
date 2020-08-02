<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAdsPartialSuccessException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(602, 'Some part of the request has not been completed', $error);
	}
}
