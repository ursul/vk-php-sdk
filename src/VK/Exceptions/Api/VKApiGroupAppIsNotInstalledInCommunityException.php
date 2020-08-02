<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiGroupAppIsNotInstalledInCommunityException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(711, 'Application is not installed in community', $error);
	}
}
