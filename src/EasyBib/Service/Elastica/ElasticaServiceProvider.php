<?php
/*
 * This file is part of easybib/silex-elastica
 *
 * (c) Imagine Easy Solutions, LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author   Nils Adermann <naderman@naderman.de>
 * @license  BSD-2-Clause
 * @link     http://www.easybib.com
 */

namespace EasyBib\Service\Elastica;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Exposes an Elastica client through Pimple to Silex
 */
class ElasticaServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
    }

    public function boot(Application $app)
    {
    }
}
