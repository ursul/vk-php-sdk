<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiVotesException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(503, 'Not enough votes', $error);
	}
}
