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

use UCSDMath\Functions\ServiceFunctions;
use UCSDMath\Functions\ServiceFunctionsInterface;

/**
 * AbstractCronScheduler provides an abstract base class implementation of {@link CronSchedulerInterface}.
 * Primarily, this service provides the fundamental configuration required by applications.
 *
 * This component library is used to service for cron scheduling.
 *
 * Method list: (+) @api, (-) protected or private visibility.
 *
 * (+) CronSchedulerInterface __construct();
 *
 * @author Daryl Eisner <deisner@ucsd.edu>
 */
abstract class AbstractCronScheduler implements CronSchedulerInterface, ServiceFunctionsInterface
{
    /**
     * Constants.
     *
     * @var string VERSION  A version number
     *
     * @api
     */
    const VERSION = '1.7.0';

    // --------------------------------------------------------------------------

    /**
     * Properties.
     *
     * @var    array                  $storageRegister  A set of validation stored data elements
     * @static CronSchedulerInterface $instance         A CronSchedulerInterface
     * @static int                    $objectCount      A CronSchedulerInterface count
     */
    protected $storageRegister = array();
    protected static $instance = null;
    protected static $objectCount = 0;

    // --------------------------------------------------------------------------

    /**
     * Constructor.
     *
     * @api
     */
    public function __construct()
    {
        static::$instance = $this;
        static::$objectCount++;
    }

    // --------------------------------------------------------------------------

    /**
     * Method implementations inserted:
     *
     * (+) all();
     * (+) init();
     * (+) get($key);
     * (+) has($key);
     * (+) version();
     * (+) getClassName();
     * (+) getConst($key);
     * (+) set($key, $value);
     * (+) isString($str);
     * (+) getInstanceCount();
     * (+) getClassInterfaces();
     * (+) __call($callback, $parameters);
     * (+) getProperty($name, $key = null);
     * (+) doesFunctionExist($functionName);
     * (+) isStringKey($str, array $keys);
     * (+) throwExceptionError(array $error);
     * (+) setProperty($name, $value, $key = null);
     * (+) throwInvalidArgumentExceptionError(array $error);
     */
    use ServiceFunctions;

    // --------------------------------------------------------------------------
}
