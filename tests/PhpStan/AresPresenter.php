<?php

declare(strict_types=1);

namespace Ares\Tests\PhpStan;

use Ares\HandleLoadAresTrait;
use Nette\Application\UI\Presenter;

/**
 * Presenter existuje jen kvůli statické analýze: PHPStan analyzuje traity pouze
 * v kontextu tříd, které je používají, takže bez tohoto použití by tělo
 * HandleLoadAresTrait nebylo nikdy zkontrolované.
 */
final class AresPresenter extends Presenter
{
	use HandleLoadAresTrait;
}
