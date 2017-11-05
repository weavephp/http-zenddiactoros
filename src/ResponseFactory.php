<?php
declare(strict_types = 1);
/**
 * Weave Zend Diactoros PSR7 Adaptor Request Factory.
 */

namespace Weave\Http\ZendDiactoros;

/**
 * Weave Response Factory to return Zend Diactoros Response instances.
 */
class ResponseFactory implements \Weave\Http\ResponseFactoryInterface
{
	/**
	 * Generate and return a fresh Response instance.
	 *
	 * @return Response
	 */
	public function newResponse()
	{
		return new \Zend\Diactoros\Response();
	}
}
