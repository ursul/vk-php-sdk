<?php

namespace VK\Exceptions\Api;

use Exception;
use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class ExceptionMapper
{
	public static function parse(VkApiError $error): Exception
	{
		return match ($error->getErrorCode())
		{
			1 => new VKApiUnknownException($error),
			2 => new VKApiDisabledException($error),
			3 => new VKApiMethodException($error),
			4 => new VKApiSignatureException($error),
			5 => new VKApiAuthException($error),
			6 => new VKApiTooManyException($error),
			7 => new VKApiPermissionException($error),
			8 => new VKApiRequestException($error),
			9 => new VKApiFloodException($error),
			10 => new VKApiServerException($error),
			11 => new VKApiEnabledInTestException($error),
			12 => new VkApiExecuteCodeCompilationException($error),
			13 => new VkApiExecuteCodeExecutionException($error),
			14 => new VKApiCaptchaException($error),
			15 => new VKApiAccessException($error),
			16 => new VKApiAuthHttpsException($error),
			17 => new VKApiAuthValidationException($error),
			18 => new VKApiUserDeletedException($error),
			20 => new VKApiMethodPermissionException($error),
			21 => new VKApiMethodAdsException($error),
			23 => new VKApiMethodDisabledException($error),
			24 => new VKApiNeedConfirmationException($error),
			25 => new VKApiNeedTokenConfirmationException($error),
			27 => new VKApiGroupAuthException($error),
			28 => new VKApiAppAuthException($error),
			29 => new VKApiRateLimitException($error),
			30 => new VKApiPrivateProfileException($error),
			100 => new VKApiParamException($error),
			101 => new VKApiParamApiIdException($error),
			113 => new VKApiParamUserIdException($error),
			150 => new VKApiParamTimestampException($error),
			200 => new VKApiAccessAlbumException($error),
			201 => new VKApiAccessAudioException($error),
			203 => new VKApiAccessGroupException($error),
			214 => new VKApiWallAddPostException($error),
			219 => new VKApiWallAdsPublishedException($error),
			220 => new VKApiWallTooManyRecipientsException($error),
			222 => new VKApiWallLinksForbiddenException($error),
			224 => new VKApiWallAdsPostLimitReachedException($error),
			300 => new VKApiAlbumFullException($error),
			500 => new VKApiVotesPermissionException($error),
			600 => new VKApiAdsPermissionException($error),
			603 => new VKApiAdsSpecificException($error),
			
			default => new VKApiException(
				$error->getErrorCode(),
				$error->getErrorMsg(),
				$error
			),
		};
	}
}
