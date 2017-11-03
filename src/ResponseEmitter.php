<?php
declare(strict_types = 1);
/**
 * Weave Zend Diactoros PSR7 Adaptor Response Emitter.
 */

namespace Weave\Http\ZendDiactoros;

use Psr\Http\Message\ResponseInterface as Response;

/**
 * Weave Zend Diactoros Response Emitter Adaptor.
 */
class ResponseEmitter implements \Weave\Http\ResponseEmitterInterface
{
	/**
	 * Output to the client the contents of the provided PSR7 Response object.
	 *
	 * @param Response $response The response object to emit to the client.
	 *
	 * @return null
	 */
	public function emit(Response $response)
	{
		$emitter = new \Zend\Diactoros\Response\SapiEmitter();
		$emitter->emit($response);
	}
}