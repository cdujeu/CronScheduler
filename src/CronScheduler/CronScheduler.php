<?php

/*
 * This file is part of the UCSDMath package.
 *
 * (c) 2015-2016 UCSD Mathematics | Math Computing Support <mathhelp@math.ucsd.edu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace UCSDMath\CronScheduler;

/**
 * CronScheduler is the default implementation of {@link CronSchedulerInterface} which
 * provides routine CronScheduler methods that are commonly used in the framework.
 *
 * {@link AbstractCronScheduler} is basically a base class for various Cron routines
 * which this class extends.
 *
 * Method list: (+) @api, (-) protected or private visibility.
 *
 * (+) CronSchedulerInterface __construct();
 * (+) void __destruct();
 *
 * @author Daryl Eisner <deisner@ucsd.edu>
 */
class CronScheduler extends AbstractCronScheduler implements CronSchedulerInterface
{
    /**
     * Constants.
     *
     * @var string VERSION The version number
     *
     * @api
     */
    const VERSION = '1.7.0';

    //--------------------------------------------------------------------------

    /**
     * Properties.
     */

    //--------------------------------------------------------------------------

    /**
     * Constructor.
     *
     * @api
     */
    public function __construct()
    {
        parent::__construct();
    }

    //--------------------------------------------------------------------------

    /**
     * Destructor.
     *
     * @api
     */
    public function __destruct()
    {
        parent::__destruct();
    }

    //--------------------------------------------------------------------------
}
