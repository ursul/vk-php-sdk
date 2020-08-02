<?php

namespace VK\Actions;

use VK\Exceptions\VKApiException;
use VK\Exceptions\VKClientException;

class Search
{
	/**
	 * Allows the programmer to do a quick search for any substring.
	 *
	 * @param string $access_token
	 * @param array $params 
	 * - @var string q: Search query string.
	 * - @var integer offset: Offset for querying specific result subset
	 * - @var integer limit: Maximum number of results to return.
	 * - @var array[string] filters
	 * - @var array[string] fields
	 * - @var boolean search_global
	 * @throws VKClientException
	 * @throws VKApiException
	 * @return mixed
	 */
	public function getHints(string $access_token, array $params = [])
	{
		return $this->request->post('search.getHints', $access_token, $params);
	}
}
