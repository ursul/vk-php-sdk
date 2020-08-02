<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiWallTooManyRecipientsException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(220, 'Too many recipients', $error);
	}
}
