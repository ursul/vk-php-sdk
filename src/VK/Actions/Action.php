<?php
/*
 * Created by Evgeny Ursul <eugene.ursul@gmail.com> at 02.08.2020 4:22
 */

namespace VK\Actions;

use VK\Client\VKApiRequest;

abstract class Action
{
	protected VKApiRequest $request;
	
	public function __construct(VKApiRequest $request)
	{
		$this->request = $request;
	}
}