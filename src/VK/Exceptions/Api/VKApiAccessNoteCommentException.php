<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiAccessNoteCommentException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(182, 'You can\'t comment this note', $error);
	}
}
