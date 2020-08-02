<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiSaveFileException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(105, 'Couldn\'t save file', $error);
	}
}
