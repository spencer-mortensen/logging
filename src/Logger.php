<?php

/**
 * Copyright (C) 2018 Spencer Mortensen
 *
 * This file is part of Logging.
 *
 * Logging is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Logging is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Logging. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Spencer Mortensen <spencer@lens.guide>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL-3.0
 * @copyright 2018 Spencer Mortensen
 */

namespace SpencerMortensen\Logging;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

abstract class Logger implements LoggerInterface
{
	abstract public function log($severity, $message, array $context = []);

	public function emergency($message, array $context = [])
	{
		$this->log(LogLevel::EMERGENCY, $message, $context);
	}

	public function alert($message, array $context = [])
	{
		$this->log(LogLevel::ALERT, $message, $context);
	}

	public function critical($message, array $context = [])
	{
		$this->log(LogLevel::CRITICAL, $message, $context);
	}

	public function error($message, array $context = [])
	{
		$this->log(LogLevel::ERROR, $message, $context);
	}

	public function warning($message, array $context = [])
	{
		$this->log(LogLevel::WARNING, $message, $context);
	}

	public function notice($message, array $context = [])
	{
		$this->log(LogLevel::NOTICE, $message, $context);
	}

	public function info($message, array $context = [])
	{
		$this->log(LogLevel::INFO, $message, $context);
	}

	public function debug($message, array $context = [])
	{
		$this->log(LogLevel::DEBUG, $message, $context);
	}
}
