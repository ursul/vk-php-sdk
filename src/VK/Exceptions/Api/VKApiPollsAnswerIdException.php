<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiPollsAnswerIdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(252, 'Invalid answer id', $error);
	}
}
