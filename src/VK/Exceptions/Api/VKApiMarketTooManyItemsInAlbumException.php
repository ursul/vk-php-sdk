<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiMarketTooManyItemsInAlbumException extends VKApiException
{
	public function __construct(VkApiError $error)
	{
		parent::__construct(1406, 'Too many items in album', $error);
	}
}
