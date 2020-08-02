<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamDocTitleException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1152, 'Invalid document title', $error);
	}
}
