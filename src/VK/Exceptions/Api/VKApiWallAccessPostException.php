<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiWallAccessPostException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(210, 'Access to wall\'s post denied', $error);
	}
}
