<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMarketCommentsClosedException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1401, 'Comments for this market are closed', $error);
	}
}
