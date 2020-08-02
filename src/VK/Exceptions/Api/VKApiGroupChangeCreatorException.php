<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiGroupChangeCreatorException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(700, 'Cannot edit creator role', $error);
	}
}
