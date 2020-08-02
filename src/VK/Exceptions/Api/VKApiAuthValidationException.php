<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAuthValidationException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(17, 'Validation required', $error);
	}
}
