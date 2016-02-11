<?php
declare(strict_types=1);

/*
 * This file is part of the UCSDMath package.
 *
 * (c) UCSD Mathematics | Math Computing Support <mathhelp@math.ucsd.edu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UCSDMath\CronScheduler;

/**
 * CronScheduler is the default implementation of {@link CronSchedulerInterface} which
 * provides routine cron methods that are commonly used in frameworks.
 *
 * @author Daryl Eisner <deisner@ucsd.edu>
 *
 * @api
 */
class CronScheduler extends AbstractCronScheduler implements CronSchedulerInterface
{
    /**
     * Constants.
     *
     * @var string VERSION  A version number
     *
     * @api
     */
    const VERSION = '1.6.0';

    // --------------------------------------------------------------------------

    /**
     * Properties.
     */

    // --------------------------------------------------------------------------

    /**
     * Constructor.
     *
     * @api
     */
    public function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------------
}
