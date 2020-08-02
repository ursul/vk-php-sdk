<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesTooOldPtsException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(907, 'Value of ts or pts is too old', $error);
	}
}
