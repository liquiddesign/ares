<?php

namespace Ares;

use Tracy\Debugger;
use Tracy\ILogger;

/**
 * @method \Nette\Http\Request getHttpRequest()
 * @method void sendPayload()
 * @method \Nette\Application\UI\Presenter getPresenter()
 */
trait HandleLoadAresTrait
{
	/**
	 * @throws \Nette\Application\AbortException
	 */
	public function handleLoadAres(): void
	{
		$ic = $this->getHttpRequest()->getPost('ic');

		if (!$ic) {
			$this->sendPayload();
		}

		try {
			$subjekt = Ares::loadDataByIc($ic);
			$sidlo = $subjekt->getSidlo();

			$this->getPresenter()->payload->result = [
				'name' => $subjekt->getObchodniJmeno(),
				'dic' => $subjekt->getDic(),
				'city' => $sidlo->getNazevObce(),
				'zip' => $sidlo->getPsc(),
				'street' => $sidlo->getNazevUlice() . ' ' . $sidlo->getCisloDomovni(),
			];
		} catch (IcNotFoundException $e) {
			$this->getPresenter()->getHttpResponse()->setCode(404);
		} catch (\Throwable $e) {
			Debugger::log($e, ILogger::EXCEPTION);

			$this->getPresenter()->getHttpResponse()->setCode(400);
		}

		$this->getPresenter()->sendPayload();
	}
}
