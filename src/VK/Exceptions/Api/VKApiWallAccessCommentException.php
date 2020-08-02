<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiWallAccessCommentException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(211, 'Access to wall\'s comment denied', $error);
	}
}
