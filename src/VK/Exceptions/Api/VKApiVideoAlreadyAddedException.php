<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiVideoAlreadyAddedException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(800, 'This video is already added', $error);
	}
}
