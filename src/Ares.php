<?php

namespace Ares;

use Ares\Client\Api\EkonomickeSubjektyApi;
use Ares\Client\ApiException;
use Ares\Client\Model\EkonomickySubjekt;
use GuzzleHttp\Client;
use Tracy\Debugger;
use Tracy\ILogger;

abstract class Ares
{
	/**
	 * @param non-empty-string $ic
	 * @throws \Ares\Client\ApiException
	 * @throws \Ares\HttpException
	 * @throws \Ares\IcNotFoundException
	 * @throws \Throwable
	 */
	public static function loadDataByIc(string $ic): EkonomickySubjekt
	{
		$client = new EkonomickeSubjektyApi(new Client([
			'base_uri' => 'https://ares.gov.cz',
			'timeout' => 5.0,
		]));

		try {
			return $client->vratEkonomickySubjekt($ic);
		} catch (ApiException $e) {
			if ($e->getCode() === 404) {
				throw new IcNotFoundException($ic);
			}

			throw new HttpException($e->getMessage(), $e->getCode());
		} catch (\Throwable $e) {
			Debugger::log($e, ILogger::EXCEPTION);

			throw $e;
		}
	}
}
