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
 * @link     http://www.imagineeasy.com
 */

namespace EasyBib\Service\Elastica;

use Elastica\Client;
use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Exposes an Elastica client through Pimple to Silex
 */
class ElasticaServiceProvider implements ServiceProviderInterface
{
    /** @var string */
    protected $prefix;

    /**
     * Creates the service provider with a prefix name
     *
     * @param string $prefix All pimple keys will be prefixed with this
     */
    public function __construct($prefix = 'elastica')
    {
        if (empty($prefix)) {
            throw new \InvalidArgumentException("The specified prefix is not valid");
        }

        $this->prefix = $prefix;
    }

    /**
     * {@inheritDoc}
     */
    public function register(Application $app)
    {
        $prefix = $this->prefix;

        if (!isset($app["$prefix.client_options"])) {
            $app["$prefix.client_options"] = array();
        }

        $app["$prefix"] = $app->share(function () use ($app, $prefix) {
            return new Client($app["$prefix.client_options"]);
        });
    }

    /**
     * {@inheritDoc}
     */
    public function boot(Application $app)
    {
    }
}
