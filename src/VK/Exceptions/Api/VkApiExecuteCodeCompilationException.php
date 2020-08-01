<?php
/*
 * Created by Evgeny Ursul <eugene.ursul@gmail.com> at 02.08.2020 2:45
 */

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VkApiExecuteCodeCompilationException extends VKApiException {
	
	/**
	 * VkApiExecuteCodeCompilationException constructor.
	 *
	 * @param VkApiError $error
	 */
	public function __construct(VkApiError $error) {
		parent::__construct(12, 'VKScript code compilation error', $error);
	}
}