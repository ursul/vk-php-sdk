<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAccessAudioException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(201, 'Access denied', $error);
	}
}
