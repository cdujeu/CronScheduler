<?php

/*
 * This file is part of the UCSDMath package.
 *
 * Copyright 2016 UCSD Mathematics | Math Computing Support <mathhelp@math.ucsd.edu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace UCSDMath\CronScheduler;

/**
 * CronSchedulerInterface is the interface implemented by all CronScheduler classes.
 *
 * Method list: (+) @api.
 *
 * @author Daryl Eisner <deisner@ucsd.edu>
 *
 * @api
 */
interface CronSchedulerInterface
{
    /**
     * Constants.
     *
     * @var string REQUIRED_PHP_VERSION  A minimum PHP version setting
     * @var string DEFAULT_CHARSET       A character encoding for the system
     * @var string CRLF                  A carriage return line feed
     * @var string DEFAULT_TIMEZONE      A local timezone for the server (as set in the ini.php)
     */
    const REQUIRED_PHP_VERSION = '7.0.0';
    const DEFAULT_CHARSET      = 'UTF-8';
    const CRLF                 = "\r\n";
    const DEFAULT_TIMEZONE     = 'America/Los_Angeles';
    const REQUIRE_HTTPS        = true;

    //--------------------------------------------------------------------------
}
