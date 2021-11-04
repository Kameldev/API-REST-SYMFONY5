<?php
namespace App\Utils\Jttp\Exception;

/**
 * InternalJttpException
 *
 * This exception means an HTTP 500 error, but remember your application should avoid it.
 *
*/
class InternalJttpException extends \LogicException implements JttpExceptionInterface
{

}