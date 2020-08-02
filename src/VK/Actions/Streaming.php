<?php

namespace VK\Actions;

use VK\Actions\Enums\StreamingMonthlyTier;
use VK\Exceptions\VKApiException;
use VK\Exceptions\VKClientException;

class Streaming
{
	/**
	 * Allows to receive data for the connection to Streaming API.
	 *
	 * @param string $access_token
	 * @throws VKClientException
	 * @throws VKApiException
	 * @return mixed
	 */
	public function getServerUrl(string $access_token)
	{
		return $this->request->post('streaming.getServerUrl', $access_token);
	}

	/**
	 * @param string $access_token
	 * @param array $params 
	 * - @var StreamingMonthlyTier monthly_tier
	 * @throws VKClientException
	 * @throws VKApiException
	 * @return mixed
	 */
	public function setSettings(string $access_token, array $params = [])
	{
		return $this->request->post('streaming.setSettings', $access_token, $params);
	}
}
