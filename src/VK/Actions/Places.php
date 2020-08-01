<?php
/*
 * Created by Evgeny Ursul <eugene.ursul@gmail.com> at 02.08.2020 2:41
 */

namespace VK\Actions;

use VK\Client\VKApiRequest;

class Places
{
	/**
	 * @var VKApiRequest
	 */
	private $request;
	
	/**
	 * Notes constructor.
	 *
	 * @param VKApiRequest $request
	 */
	public function __construct(VKApiRequest $request) {
		$this->request = $request;
	}
}