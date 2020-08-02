<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiPollsAccessWithoutVoteException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(253, 'Access denied, please vote first', $error);
	}
}
