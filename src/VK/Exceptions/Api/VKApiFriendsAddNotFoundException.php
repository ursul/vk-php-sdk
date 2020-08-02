<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiFriendsAddNotFoundException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(177, 'Cannot add this user to friends as user not found', $error);
	}
}
