<?php
namespace App\Utils\Jttp\Exception;

/**
 * MalformedJttpException
 *
 * This exception should trigger an HTTP 400 response in your application code.
 *
*/
class MalformedJttpException extends \LogicException implements JttpExceptionInterface
{

}