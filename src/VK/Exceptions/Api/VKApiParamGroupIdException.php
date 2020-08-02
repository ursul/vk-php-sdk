<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamGroupIdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(125, 'Invalid group id', $error);
	}
}
