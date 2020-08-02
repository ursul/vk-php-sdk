<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMobileNotActivatedException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(146, 'The mobile number of the user is unknown', $error);
	}
}
