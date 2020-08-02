<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiFriendsAddInEnemyException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(175, 'Cannot add this user to friends as they have put you on their blacklist', $error);
	}
}
