<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAccessPageException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(141, 'Access to page denied', $error);
	}
}
