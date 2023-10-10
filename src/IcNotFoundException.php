<?php

namespace Ares;

use Throwable;

class IcNotFoundException extends \Exception
{
	public function __construct(string $ic, int $code = 404, ?Throwable $previous = null)
	{
		parent::__construct("IC '$ic' not found.", $code, $previous);
	}
}
