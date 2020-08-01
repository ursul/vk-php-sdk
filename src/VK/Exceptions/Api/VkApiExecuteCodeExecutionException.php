<?php
/*
 * Created by Evgeny Ursul <eugene.ursul@gmail.com> at 02.08.2020 2:47
 */

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VkApiExecuteCodeExecutionException extends VKApiException {
	
	/**
	 * VkApiExecuteCodeExecutionException constructor.
	 *
	 * @param VkApiError $error
	 */
	public function __construct(VkApiError $error) {
		parent::__construct(13, 'VKScript code execution error', $error);
	}
}