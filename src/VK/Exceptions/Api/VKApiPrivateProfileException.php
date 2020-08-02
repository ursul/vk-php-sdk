<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiPrivateProfileException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(30, 'This profile is private', $error);
	}
}
