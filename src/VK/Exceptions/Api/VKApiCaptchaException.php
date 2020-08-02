<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiCaptchaException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(14, 'Captcha needed', $error);
	}
}
