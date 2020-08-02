<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiParamNoteIdException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(180, 'Note not found', $error);
	}
}
