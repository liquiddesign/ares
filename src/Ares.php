<?php

namespace Ares;

use GuzzleHttp\Client;

abstract class Ares
{
	/**
	 * @param string $ic
	 * @return array{
	 *     'name': string|null,
	 *     'dic': string|null,
	 *     'city': string|null,
	 *	   'zip': string|null,
	 *	   'street': string|null,
	 * }
	 * @throws \GuzzleHttp\Exception\GuzzleException|\Ares\HttpException|\Ares\IcNotFoundException
	 */
	public static function loadDataByIc(string $ic): array
	{
		$aresIcoFin = '';
		$aresDicFin = '';
		$aresCompanyFin = '';
		$aresStreetFin = '';
		$aresCP1Fin = '';
		$aresCP2Fin = '';
		$aresCityFin = '';
		$aresPSCFin = '';

		$client = new Client([
			'base_uri' => 'http://wwwinfo.mfcr.cz/cgi-bin/ares/',
			'timeout' => 5.0,
		]);

		$response = $client->get('darv_bas.cgi?ico=' . $ic);

		if ($response->getStatusCode() !== 200) {
			throw new HttpException('Invalid response from ARES.');
		}

		$xml = @\simplexml_load_string($response->getBody());

		if (!$xml) {
			throw new HttpException('Invalid XML from ARES');
		}

		/** @var array<string> $ns */
		$ns = $xml->getDocNamespaces();
		$data = $xml->children($ns['are']);
		$el = $data->children($ns['D'])->VBAS;

		if (\strval($el->ICO) !== $ic) {
			throw new IcNotFoundException();
		}

		$aresIcoFin = \strval($el->ICO);
		unset($aresIcoFin);

		$aresDicFin = \strval($el->DIC);
		$aresCompanyFin = \strval($el->OF);
		$aresStreetFin = \strval($el->AA->NU);
		$aresCP1Fin = \strval($el->AA->CD);
		$aresCP2Fin = \strval($el->AA->CO);

		$aresCPFin = $aresCP2Fin !== '' ? $aresCP1Fin . '/' . $aresCP2Fin : $aresCP1Fin;
		unset($aresCPFin);

		$aresCityFin = \strval($el->AA->N);
		$aresPSCFin = \strval($el->AA->PSC);

		return [
			'name' => $aresCompanyFin,
			'dic' => $aresDicFin,
			'city' => $aresCityFin,
			'zip' => $aresPSCFin,
			'street' => $aresStreetFin . ' ' . $aresCP2Fin,
		];
	}
}
