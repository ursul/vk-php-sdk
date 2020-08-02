<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiBlockedException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(19, 'Content blocked', $error);
	}
}
