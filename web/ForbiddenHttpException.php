<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\web;

/**
 * ForbiddenHttpException represents a "Forbidden" HTTP exception with status code 403.
 *
 * @author Dan Schmidt <danschmidt5189@gmail.com>
 * @since 2.0
 */
class ForbiddenHttpException extends HttpException
{
	/**
	 * Constructor.
	 * @param string $message error message
	 * @param integer $code error code
	 * @param \Exception $previous The previous exception used for the exception chaining.
	 */
	public function __construct($message = null, $code = 0, \Exception $previous = null)
	{
		parent::__construct(403, $message, $code, $previous);
	}
}
