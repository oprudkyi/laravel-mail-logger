<?php
/**
 * This file is part of Oprudkyi\LaravelMailLogger package.
 *
 * (c) 2016 Oleksii Prudkyi <Oleksii.Prudkyi@gmail.com>
 */
namespace Oprudkyi\LaravelMailLogger;

use \Swift_Plugins_Logger;
use \Log;

class MailLoggerPlugin implements Swift_Plugins_Logger 
{
	/**
     * Add a log entry.
     *
     * @param string $entry
     */
    public function add($entry)
    {
		Log::info($entry);
    }

    /**
     * Not implemented.
     */
    public function clear()
    {
    }

    /**
     * Not implemented.
     */
    public function dump()
    {
    }
}
