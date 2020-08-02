<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMethodPermissionException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(20, 'Permission to perform this action is denied for non-standalone applications', $error);
	}
}
