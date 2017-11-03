<?php
declare(strict_types = 1);
/**
 * Weave Zend Diactoros PSR7 Adaptor Request Factory.
 */

namespace Weave\Http\ZendDiactoros;

use \Zend\Diactoros\ServerRequestFactory;

/**
 * Weave Request Factory to return Zend Diactoros Request instances.
 */
class RequestFactory implements \Weave\Http\RequestFactoryInterface
{
	/**
	 * Create and return a PSR7 ServerRequestInterface complient object instance from global data.
	 *
	 * @return Request A new Request object based on global data.
	 */
	public function newIncomingRequest()
	{
		return ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
	}
}