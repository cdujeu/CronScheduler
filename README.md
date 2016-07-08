# CronScheduler
<table border="0">
  <tr>
    <td width="310"><img height="160" width="310"alt="UCSDMath - Mathlink" src="https://github.com/ucsdmath/Testing/blob/master/ucsdmath-logo.png"></td>
    <td><h3>A Development Project in PHP</h3><p><strong>UCSDMath</strong> provides a testing framework for general internal Intranet software applications for the UCSD, Department of Mathematics. This is used for development and testing only. [not for production]</p>

<table style="width:550px;"><tr>
    <td width="120">Travis CI</td>
    <td width="250">SensioLabs</td>
    <td width="180">Dependencies</td>
</tr><tr>
    <td width="120">
        <a href="https://travis-ci.org/ucsdmath/CronScheduler">
        <img style="float: left; margin: 0px 0px 15px 15px;" src="https://travis-ci.org/ucsdmath/CronScheduler.svg?branch=master"></a></td>
    <td width="250" align="center">
        <a href="https://insight.sensiolabs.com/projects/4aedd26d-d2cc-4d93-b9f9-701f61f7bff9">
        <img src="https://insight.sensiolabs.com/projects/4aedd26d-d2cc-4d93-b9f9-701f61f7bff9/big.png" style="float: right; margin: 0px 0px 15px 15px;" width="212" height="51"></a></td>
    <td width="180">
        <a href="https://www.versioneye.com/php/ucsdmath:cron-scheduler">
        <img style="float: left; margin: 0px 0px 15px 15px;" src="https://www.versioneye.com/php/ucsdmath:cron-scheduler/badge.png?branch=master"></a></td>
</tr></table></td></tr></table>

|Scrutinizer|Latest|PHP|Usage|Development|Code Quality|License|
|-----------|------|---|-----|-----------|------------|-------|
|[![Build Status](https://scrutinizer-ci.com/g/ucsdmath/CronScheduler/badges/build.png?b=master)](https://scrutinizer-ci.com/g/ucsdmath/CronScheduler/build-status/master)|[![Latest Stable Version](https://poser.pugx.org/ucsdmath/cron-scheduler/v/stable)](https://packagist.org/packages/ucsdmath/cron-scheduler)|[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.0-8892BF.svg)](https://php.net/)|[![Total Downloads](https://poser.pugx.org/ucsdmath/cron-scheduler/downloads)](https://packagist.org/packages/ucsdmath/cron-scheduler)|[![Latest Unstable Version](https://poser.pugx.org/ucsdmath/cron-scheduler/v/unstable)](https://packagist.org/packages/ucsdmath/cron-scheduler)|[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ucsdmath/CronScheduler/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ucsdmath/CronScheduler/?branch=master)|[![License](https://poser.pugx.org/ucsdmath/cron-scheduler/license)](https://packagist.org/packages/ucsdmath/cron-scheduler)|

CronScheduler is in development to become a cron scheduler class for future projects.  Not currently used in production.
Many features of this component have not been developed but are planned for future implementation.  UCSDMath components are written to be adapters of great developments such as Symfony, Twig, Doctrine, etc. This is a learning and experimental library only.

Copy this software from:
- [Packagist.org](https://packagist.org/packages/ucsdmath/CronScheduler)
- [Github.com](https://github.com/ucsdmath/CronScheduler)

## Installation using [Composer](http://getcomposer.org/)
You can install the class ```CronScheduler``` with Composer and Packagist by
adding the ucsdmath/cron-scheduler package to your composer.json file:

```
"require": {
    "php": "^7.0",
    "ucsdmath/cron-scheduler": "dev-master"
},
```
Or you can add the class directly from the terminal prompt:

```bash
$ composer require ucsdmath/cron-scheduler
```

## Usage

``` php
$config = new \UCSDMath\CronScheduler\CronScheduler();
```

## Documentation

No documentation site available at this time.
<!-- [Check out the documentation](http://math.ucsd.edu/~deisner/documentation/CronScheduler/) -->

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email deisner@ucsd.edu instead of using the issue tracker.

## Credits

- [Daryl Eisner](https://github.com/UCSDMath)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
