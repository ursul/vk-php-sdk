<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiSignatureException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(4, 'Incorrect signature', $error);
	}
}
