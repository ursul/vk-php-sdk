<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAccessGroupException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(203, 'Access to group denied', $error);
	}
}
