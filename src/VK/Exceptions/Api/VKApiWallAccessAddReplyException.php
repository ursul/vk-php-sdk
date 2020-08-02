<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiWallAccessAddReplyException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(213, 'Access to status replies denied', $error);
	}
}
