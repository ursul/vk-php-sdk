<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAccessCommentException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(183, 'Access to comment denied', $error);
	}
}
