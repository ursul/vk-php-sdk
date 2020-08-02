<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMessagesCantFwdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(921, 'Can\'t forward these messages', $error);
	}
}
