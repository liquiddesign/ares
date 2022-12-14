<?php

namespace Ares;

use Throwable;

class HttpException extends \Exception
{
	public function __construct(string $message = "Can't process response", int $code = 0, ?Throwable $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}
}
