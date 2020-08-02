<?php

namespace VK\Client;

class VKApiError
{
	protected const KEY_ERROR_CODE = 'error_code';
	protected const KEY_ERROR_MSG = 'error_msg';
	protected const KEY_CAPTCHA_SID = 'captcha_sid';
	protected const KEY_CAPTCHA_IMG = 'captcha_img';
	protected const KEY_CONFIRMATION_TEXT = 'confirmation_text';
	protected const KEY_REDIRECT_URI = 'redirect_uri';
	protected const KEY_REQUEST_PARAMS = 'request_params';
	
	protected ?int $error_code;
	protected ?string $error_msg;
	protected ?string $captcha_sid;
	protected ?string $captcha_img;
	protected ?string $confirmation_text;
	protected ?string $redirect_uri;
	protected ?array $request_params;
	
	public function __construct(array $error)
	{
		$this->error_code = isset($error[static::KEY_ERROR_CODE]) ? (int) $error[static::KEY_ERROR_CODE] : null;
		$this->error_msg = isset($error[static::KEY_ERROR_MSG]) ? (string) $error[static::KEY_ERROR_MSG] : null;
		$this->captcha_sid = isset($error[static::KEY_CAPTCHA_SID]) ? (string) $error[static::KEY_CAPTCHA_SID] : null;
		$this->captcha_img = isset($error[static::KEY_CAPTCHA_IMG]) ? (string) $error[static::KEY_CAPTCHA_IMG] : null;
		$this->confirmation_text = isset($error[static::KEY_CONFIRMATION_TEXT]) ? (string) $error[static::KEY_CONFIRMATION_TEXT] : null;
		$this->redirect_uri = isset($error[static::KEY_REDIRECT_URI]) ? (string) $error[static::KEY_REDIRECT_URI] : null;
		$this->request_params = isset($error[static::KEY_REQUEST_PARAMS]) ? ((array) $error[static::KEY_REQUEST_PARAMS]) : null;
	}
	
	public function getErrorCode(): ?int
	{
		return $this->error_code;
	}
	
	public function getErrorMsg(): ?string
	{
		return $this->error_msg;
	}
	
	public function getCaptchaSid(): ?string
	{
		return $this->captcha_sid;
	}
	
	public function getCaptchaImg(): ?string
	{
		return $this->captcha_img;
	}
	
	public function getConfirmationText(): ?string
	{
		return $this->confirmation_text;
	}
	
	public function getRedirectUri(): ?string
	{
		return $this->redirect_uri;
	}
	
	public function getRequestParams(): ?array
	{
		return $this->request_params;
	}
}
