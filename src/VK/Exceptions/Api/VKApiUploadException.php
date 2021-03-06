<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiUploadException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(22, 'Upload error', $error);
	}
}
