# easybib/silex-elastica

This is a service provider for [Silex](http://silex-project.org) which makes
access to [Elasticsearch](http://www.elasticsearch.org) available through
[Elastica](http://elastica.io).

## Getting Started

Set up the dependency on this package using [Composer](http://packagist.org/about-composer).
Once you have a Silex application skeleton you can register the service provider
and set Elastica options:

```php
$app->register(new Easybib\Service\Elastica\ElasticaServiceProvider(), array(
    'elastica.client_options' => array(
        'host' => 'localhost',
        'port' => 9200,
    ),
));
```

The full set of options is available on the [Elastica documentation](http://elastica.io).

## Dependencies ##

- PHP >= 5.3.2
- Elastica >= 0.90.2

## Copyright ##
[Imagine Easy Solutions, LLC](http://www.imagineeasy.com)

## Author ##

- [Nils Adermann](http://www.naderman.de) ([twitter](http://twitter.com/naderman))

## License ##

The code is available under the [2 Clause BSD](LICENSE) license.
