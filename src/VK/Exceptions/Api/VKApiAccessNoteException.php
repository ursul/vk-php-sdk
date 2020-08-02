<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAccessNoteException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(181, 'Access to note denied', $error);
	}
}
