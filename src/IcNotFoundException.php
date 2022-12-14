<?php

namespace Ares;

use Throwable;

class IcNotFoundException extends \Exception
{
	public function __construct(string $message = 'IC not found', int $code = 0, ?Throwable $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}
}
