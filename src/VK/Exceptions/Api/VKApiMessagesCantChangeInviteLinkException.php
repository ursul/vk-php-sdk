<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesCantChangeInviteLinkException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(931, 'You can\'t change invite link for this chat', $error);
	}
}
