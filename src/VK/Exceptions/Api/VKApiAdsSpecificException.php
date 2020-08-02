<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAdsSpecificException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(603, 'Some ads error occured', $error);
	}
}
