<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamDocIdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1150, 'Invalid document id', $error);
	}
}
