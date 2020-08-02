<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiFriendsListIdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(171, 'Invalid list id', $error);
	}
}
