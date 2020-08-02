<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesTooManyPostsException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(940, 'Too many posts in messages', $error);
	}
}
