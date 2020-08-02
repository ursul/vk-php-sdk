<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiActionFailedException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(106, 'Unable to process action', $error);
	}
}
