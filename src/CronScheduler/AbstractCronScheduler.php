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
 * This service groups a common code base implementation that CronScheduler extends.
 *
 * Method list: (+) @api, (-) protected or private visibility.
 *
 * (+) CronSchedulerInterface __construct();
 * (+) void __destruct();
 *
 * @author Daryl Eisner <deisner@ucsd.edu>
 */
abstract class AbstractCronScheduler implements CronSchedulerInterface, ServiceFunctionsInterface
{
    /**
     * Constants.
     *
     * @var string VERSION A version number
     *
     * @api
     */
    const VERSION = '1.7.0';

    //--------------------------------------------------------------------------

    /**
     * Properties.
     *
     * @static CronSchedulerInterface $instance        A static instance CronSchedulerInterface
     * @static int                    $objectCount     A static count of CronSchedulerInterface
     * @var    array                  $storageRegister A stored set of data structures used by this class
     */
    protected static $instance    = null;
    protected static $objectCount = 0;
    protected $storageRegister    = [];

    //--------------------------------------------------------------------------

    /**
     * Constructor.
     *
     * @api
     */
    public function __construct()
    {
        static::$instance = new static;
        static::$objectCount++;
    }

    //--------------------------------------------------------------------------

    /**
     * Destructor.
     *
     * @api
     */
    public function __destruct()
    {
        static::$objectCount--;
    }

    //--------------------------------------------------------------------------

    /**
     * Method implementations inserted:
     *
     * Method list: (+) @api, (-) protected or private visibility.
     *
     * (+) array all();
     * (+) object init();
     * (+) string version();
     * (+) bool isString($str);
     * (+) bool has(string $key);
     * (+) string getClassName();
     * (+) int getInstanceCount();
     * (+) array getClassInterfaces();
     * (+) mixed getConst(string $key);
     * (+) bool isValidUuid(string $uuid);
     * (+) bool isValidEmail(string $email);
     * (+) bool isValidSHA512(string $hash);
     * (+) mixed __call($callback, $parameters);
     * (+) bool doesFunctionExist($functionName);
     * (+) bool isStringKey(string $str, array $keys);
     * (+) mixed get(string $key, string $subkey = null);
     * (+) mixed getProperty(string $name, string $key = null);
     * (+) object set(string $key, $value, string $subkey = null);
     * (+) object setProperty(string $name, $value, string $key = null);
     * (-) Exception throwExceptionError(array $error);
     * (-) InvalidArgumentException throwInvalidArgumentExceptionError(array $error);
     */
    use ServiceFunctions;

    //--------------------------------------------------------------------------
}
