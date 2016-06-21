#Tree of dependencies:
```
symfony/config v3.1.1 Symfony Config Component
|--php >=5.5.9
`--symfony/filesystem ~2.8|~3.0
   `--php >=5.5.9
gpupo/common-sdk 2.0.4 Componente de uso comum entre SDKs para integração a partir de aplicações PHP com Restful webservices
|--codeclimate/php-test-reporter @dev
|  |--ext-curl *
|  |--php >=5.3
|  |--satooshi/php-coveralls 1.0.*
|  |  |--ext-json *
|  |  |--ext-simplexml *
|  |  |--guzzle/guzzle ^2.8|^3.0
|  |  |  |--ext-curl *
|  |  |  |--php >=5.3.3
|  |  |  `--symfony/event-dispatcher >=2.1
|  |  |     `--php >=5.5.9
|  |  |--php >=5.3.3
|  |  |--psr/log ^1.0
|  |  |--symfony/config ^2.1|^3.0
|  |  |  |--php >=5.5.9
|  |  |  `--symfony/filesystem ~2.8|~3.0
|  |  |     `--php >=5.5.9
|  |  |--symfony/console ^2.1|^3.0
|  |  |  |--php >=5.5.9
|  |  |  `--symfony/polyfill-mbstring ~1.0
|  |  |     `--php >=5.3.3
|  |  |--symfony/stopwatch ^2.0|^3.0
|  |  |  `--php >=5.5.9
|  |  `--symfony/yaml ^2.0|^3.0
|  |     `--php >=5.5.9
|  `--symfony/console >=2.0
|     |--php >=5.5.9
|     `--symfony/polyfill-mbstring ~1.0
|        `--php >=5.3.3
|--gpupo/cache *
|  |--gpupo/common *
|  |  |--doctrine/common ~2.5.1
|  |  |  |--doctrine/annotations 1.*
|  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/cache 1.*
|  |  |  |  `--php ~5.5|~7.0
|  |  |  |--doctrine/collections 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/inflector 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/lexer 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  `--php >=5.3.2
|  |  `--php ^5.6 || ^7.0
|  |--php ^5.6 || ^7.0
|  `--psr/cache 1.0.0
|     `--php >=5.3.0
|--gpupo/common *
|  |--doctrine/common ~2.5.1
|  |  |--doctrine/annotations 1.*
|  |  |  |--doctrine/lexer 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  `--php >=5.3.2
|  |  |--doctrine/cache 1.*
|  |  |  `--php ~5.5|~7.0
|  |  |--doctrine/collections 1.*
|  |  |  `--php >=5.3.2
|  |  |--doctrine/inflector 1.*
|  |  |  `--php >=5.3.2
|  |  |--doctrine/lexer 1.*
|  |  |  `--php >=5.3.2
|  |  `--php >=5.3.2
|  `--php ^5.6 || ^7.0
|--monolog/monolog *
|  |--php >=5.3.0
|  `--psr/log ~1.0
|--php ^5.6 || ^7.0
|--phpunit/phpunit ~5.4
|  |--ext-dom *
|  |--ext-json *
|  |--ext-pcre *
|  |--ext-reflection *
|  |--ext-spl *
|  |--myclabs/deep-copy ~1.3
|  |  `--php >=5.4.0
|  |--php ^5.6 || ^7.0
|  |--phpspec/prophecy ^1.3.1
|  |  |--doctrine/instantiator ^1.0.2
|  |  |  `--php >=5.3,<8.0-DEV
|  |  |--php ^5.3|^7.0
|  |  |--phpdocumentor/reflection-docblock ^2.0|^3.0.2
|  |  |  |--php >=5.5
|  |  |  |--phpdocumentor/reflection-common ^1.0@dev
|  |  |  |  `--php >=5.5
|  |  |  |--phpdocumentor/type-resolver ^0.2.0
|  |  |  |  |--php >=5.5
|  |  |  |  `--phpdocumentor/reflection-common ^1.0
|  |  |  |     `--php >=5.5
|  |  |  `--webmozart/assert ^1.0
|  |  |     `--php >=5.3.3
|  |  |--sebastian/comparator ^1.1
|  |  |  |--php >=5.3.3
|  |  |  |--sebastian/diff ~1.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/exporter ~1.2
|  |  |     |--php >=5.3.3
|  |  |     `--sebastian/recursion-context ~1.0
|  |  |        `--php >=5.3.3
|  |  `--sebastian/recursion-context ^1.0
|  |     `--php >=5.3.3
|  |--phpunit/php-code-coverage ^4.0
|  |  |--php ^5.6 || ^7.0
|  |  |--phpunit/php-file-iterator ~1.3
|  |  |  `--php >=5.3.3
|  |  |--phpunit/php-text-template ~1.2
|  |  |  `--php >=5.3.3
|  |  |--phpunit/php-token-stream ^1.4.2
|  |  |  |--ext-tokenizer *
|  |  |  `--php >=5.3.3
|  |  |--sebastian/code-unit-reverse-lookup ~1.0
|  |  |  `--php >=5.6
|  |  |--sebastian/environment ^1.3.2
|  |  |  `--php >=5.3.3
|  |  `--sebastian/version ~1.0|~2.0
|  |     `--php >=5.6
|  |--phpunit/php-file-iterator ~1.4
|  |  `--php >=5.3.3
|  |--phpunit/php-text-template ~1.2
|  |  `--php >=5.3.3
|  |--phpunit/php-timer ^1.0.6
|  |  `--php >=5.3.3
|  |--phpunit/phpunit-mock-objects ^3.2
|  |  |--doctrine/instantiator ^1.0.2
|  |  |  `--php >=5.3,<8.0-DEV
|  |  |--php ^5.6 || ^7.0
|  |  |--phpunit/php-text-template ^1.2
|  |  |  `--php >=5.3.3
|  |  `--sebastian/exporter ^1.2
|  |     |--php >=5.3.3
|  |     `--sebastian/recursion-context ~1.0
|  |        `--php >=5.3.3
|  |--sebastian/comparator ~1.1
|  |  |--php >=5.3.3
|  |  |--sebastian/diff ~1.2
|  |  |  `--php >=5.3.3
|  |  `--sebastian/exporter ~1.2
|  |     |--php >=5.3.3
|  |     `--sebastian/recursion-context ~1.0
|  |        `--php >=5.3.3
|  |--sebastian/diff ~1.2
|  |  `--php >=5.3.3
|  |--sebastian/environment ^1.3 || ^2.0
|  |  `--php >=5.3.3
|  |--sebastian/exporter ~1.2
|  |  |--php >=5.3.3
|  |  `--sebastian/recursion-context ~1.0
|  |     `--php >=5.3.3
|  |--sebastian/global-state ~1.0
|  |  `--php >=5.3.3
|  |--sebastian/object-enumerator ~1.0
|  |  |--php >=5.6
|  |  `--sebastian/recursion-context ~1.0
|  |     `--php >=5.3.3
|  |--sebastian/resource-operations ~1.0
|  |  `--php >=5.6.0
|  |--sebastian/version ~1.0|~2.0
|  |  `--php >=5.6
|  `--symfony/yaml ~2.1|~3.0
|     `--php >=5.5.9
|--psr/log ~1.0
|--sebastian/peek-and-poke 1.0.x@dev
|  `--php >=5.6.0
|--symfony/console ~3.1
|  |--php >=5.5.9
|  `--symfony/polyfill-mbstring ~1.0
|     `--php >=5.3.3
`--twig/twig *
   `--php >=5.2.7
gpupo/submarino-sdk 2.4.0 SDK Não Oficial para integração a partir de aplicações PHP com as APIs do Submarino Marketplace
|--ext-bcmath *
|--ext-curl *
|--gpupo/common-sdk ~2
|  |--codeclimate/php-test-reporter @dev
|  |  |--ext-curl *
|  |  |--php >=5.3
|  |  |--satooshi/php-coveralls 1.0.*
|  |  |  |--ext-json *
|  |  |  |--ext-simplexml *
|  |  |  |--guzzle/guzzle ^2.8|^3.0
|  |  |  |  |--ext-curl *
|  |  |  |  |--php >=5.3.3
|  |  |  |  `--symfony/event-dispatcher >=2.1
|  |  |  |     `--php >=5.5.9
|  |  |  |--php >=5.3.3
|  |  |  |--psr/log ^1.0
|  |  |  |--symfony/config ^2.1|^3.0
|  |  |  |  |--php >=5.5.9
|  |  |  |  `--symfony/filesystem ~2.8|~3.0
|  |  |  |     `--php >=5.5.9
|  |  |  |--symfony/console ^2.1|^3.0
|  |  |  |  |--php >=5.5.9
|  |  |  |  `--symfony/polyfill-mbstring ~1.0
|  |  |  |     `--php >=5.3.3
|  |  |  |--symfony/stopwatch ^2.0|^3.0
|  |  |  |  `--php >=5.5.9
|  |  |  `--symfony/yaml ^2.0|^3.0
|  |  |     `--php >=5.5.9
|  |  `--symfony/console >=2.0
|  |     |--php >=5.5.9
|  |     `--symfony/polyfill-mbstring ~1.0
|  |        `--php >=5.3.3
|  |--gpupo/cache *
|  |  |--gpupo/common *
|  |  |  |--doctrine/common ~2.5.1
|  |  |  |  |--doctrine/annotations 1.*
|  |  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  |  `--php >=5.3.2
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  |--doctrine/cache 1.*
|  |  |  |  |  `--php ~5.5|~7.0
|  |  |  |  |--doctrine/collections 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  |--doctrine/inflector 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  `--php >=5.3.2
|  |  |  `--php ^5.6 || ^7.0
|  |  |--php ^5.6 || ^7.0
|  |  `--psr/cache 1.0.0
|  |     `--php >=5.3.0
|  |--gpupo/common *
|  |  |--doctrine/common ~2.5.1
|  |  |  |--doctrine/annotations 1.*
|  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/cache 1.*
|  |  |  |  `--php ~5.5|~7.0
|  |  |  |--doctrine/collections 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/inflector 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/lexer 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  `--php >=5.3.2
|  |  `--php ^5.6 || ^7.0
|  |--monolog/monolog *
|  |  |--php >=5.3.0
|  |  `--psr/log ~1.0
|  |--php ^5.6 || ^7.0
|  |--phpunit/phpunit ~5.4
|  |  |--ext-dom *
|  |  |--ext-json *
|  |  |--ext-pcre *
|  |  |--ext-reflection *
|  |  |--ext-spl *
|  |  |--myclabs/deep-copy ~1.3
|  |  |  `--php >=5.4.0
|  |  |--php ^5.6 || ^7.0
|  |  |--phpspec/prophecy ^1.3.1
|  |  |  |--doctrine/instantiator ^1.0.2
|  |  |  |  `--php >=5.3,<8.0-DEV
|  |  |  |--php ^5.3|^7.0
|  |  |  |--phpdocumentor/reflection-docblock ^2.0|^3.0.2
|  |  |  |  |--php >=5.5
|  |  |  |  |--phpdocumentor/reflection-common ^1.0@dev
|  |  |  |  |  `--php >=5.5
|  |  |  |  |--phpdocumentor/type-resolver ^0.2.0
|  |  |  |  |  |--php >=5.5
|  |  |  |  |  `--phpdocumentor/reflection-common ^1.0
|  |  |  |  |     `--php >=5.5
|  |  |  |  `--webmozart/assert ^1.0
|  |  |  |     `--php >=5.3.3
|  |  |  |--sebastian/comparator ^1.1
|  |  |  |  |--php >=5.3.3
|  |  |  |  |--sebastian/diff ~1.2
|  |  |  |  |  `--php >=5.3.3
|  |  |  |  `--sebastian/exporter ~1.2
|  |  |  |     |--php >=5.3.3
|  |  |  |     `--sebastian/recursion-context ~1.0
|  |  |  |        `--php >=5.3.3
|  |  |  `--sebastian/recursion-context ^1.0
|  |  |     `--php >=5.3.3
|  |  |--phpunit/php-code-coverage ^4.0
|  |  |  |--php ^5.6 || ^7.0
|  |  |  |--phpunit/php-file-iterator ~1.3
|  |  |  |  `--php >=5.3.3
|  |  |  |--phpunit/php-text-template ~1.2
|  |  |  |  `--php >=5.3.3
|  |  |  |--phpunit/php-token-stream ^1.4.2
|  |  |  |  |--ext-tokenizer *
|  |  |  |  `--php >=5.3.3
|  |  |  |--sebastian/code-unit-reverse-lookup ~1.0
|  |  |  |  `--php >=5.6
|  |  |  |--sebastian/environment ^1.3.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/version ~1.0|~2.0
|  |  |     `--php >=5.6
|  |  |--phpunit/php-file-iterator ~1.4
|  |  |  `--php >=5.3.3
|  |  |--phpunit/php-text-template ~1.2
|  |  |  `--php >=5.3.3
|  |  |--phpunit/php-timer ^1.0.6
|  |  |  `--php >=5.3.3
|  |  |--phpunit/phpunit-mock-objects ^3.2
|  |  |  |--doctrine/instantiator ^1.0.2
|  |  |  |  `--php >=5.3,<8.0-DEV
|  |  |  |--php ^5.6 || ^7.0
|  |  |  |--phpunit/php-text-template ^1.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/exporter ^1.2
|  |  |     |--php >=5.3.3
|  |  |     `--sebastian/recursion-context ~1.0
|  |  |        `--php >=5.3.3
|  |  |--sebastian/comparator ~1.1
|  |  |  |--php >=5.3.3
|  |  |  |--sebastian/diff ~1.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/exporter ~1.2
|  |  |     |--php >=5.3.3
|  |  |     `--sebastian/recursion-context ~1.0
|  |  |        `--php >=5.3.3
|  |  |--sebastian/diff ~1.2
|  |  |  `--php >=5.3.3
|  |  |--sebastian/environment ^1.3 || ^2.0
|  |  |  `--php >=5.3.3
|  |  |--sebastian/exporter ~1.2
|  |  |  |--php >=5.3.3
|  |  |  `--sebastian/recursion-context ~1.0
|  |  |     `--php >=5.3.3
|  |  |--sebastian/global-state ~1.0
|  |  |  `--php >=5.3.3
|  |  |--sebastian/object-enumerator ~1.0
|  |  |  |--php >=5.6
|  |  |  `--sebastian/recursion-context ~1.0
|  |  |     `--php >=5.3.3
|  |  |--sebastian/resource-operations ~1.0
|  |  |  `--php >=5.6.0
|  |  |--sebastian/version ~1.0|~2.0
|  |  |  `--php >=5.6
|  |  `--symfony/yaml ~2.1|~3.0
|  |     `--php >=5.5.9
|  |--psr/log ~1.0
|  |--sebastian/peek-and-poke 1.0.x@dev
|  |  `--php >=5.6.0
|  |--symfony/console ~3.1
|  |  |--php >=5.5.9
|  |  `--symfony/polyfill-mbstring ~1.0
|  |     `--php >=5.3.3
|  `--twig/twig *
|     `--php >=5.2.7
`--php ^5.6 || ^7.0
gpupo/cnova-sdk 1.3.0 SDK Não Oficial para integração a partir de aplicações PHP com as APIs da Cnova Marketplace
|--ext-curl *
|--gpupo/common-sdk ~2
|  |--codeclimate/php-test-reporter @dev
|  |  |--ext-curl *
|  |  |--php >=5.3
|  |  |--satooshi/php-coveralls 1.0.*
|  |  |  |--ext-json *
|  |  |  |--ext-simplexml *
|  |  |  |--guzzle/guzzle ^2.8|^3.0
|  |  |  |  |--ext-curl *
|  |  |  |  |--php >=5.3.3
|  |  |  |  `--symfony/event-dispatcher >=2.1
|  |  |  |     `--php >=5.5.9
|  |  |  |--php >=5.3.3
|  |  |  |--psr/log ^1.0
|  |  |  |--symfony/config ^2.1|^3.0
|  |  |  |  |--php >=5.5.9
|  |  |  |  `--symfony/filesystem ~2.8|~3.0
|  |  |  |     `--php >=5.5.9
|  |  |  |--symfony/console ^2.1|^3.0
|  |  |  |  |--php >=5.5.9
|  |  |  |  `--symfony/polyfill-mbstring ~1.0
|  |  |  |     `--php >=5.3.3
|  |  |  |--symfony/stopwatch ^2.0|^3.0
|  |  |  |  `--php >=5.5.9
|  |  |  `--symfony/yaml ^2.0|^3.0
|  |  |     `--php >=5.5.9
|  |  `--symfony/console >=2.0
|  |     |--php >=5.5.9
|  |     `--symfony/polyfill-mbstring ~1.0
|  |        `--php >=5.3.3
|  |--gpupo/cache *
|  |  |--gpupo/common *
|  |  |  |--doctrine/common ~2.5.1
|  |  |  |  |--doctrine/annotations 1.*
|  |  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  |  `--php >=5.3.2
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  |--doctrine/cache 1.*
|  |  |  |  |  `--php ~5.5|~7.0
|  |  |  |  |--doctrine/collections 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  |--doctrine/inflector 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  `--php >=5.3.2
|  |  |  `--php ^5.6 || ^7.0
|  |  |--php ^5.6 || ^7.0
|  |  `--psr/cache 1.0.0
|  |     `--php >=5.3.0
|  |--gpupo/common *
|  |  |--doctrine/common ~2.5.1
|  |  |  |--doctrine/annotations 1.*
|  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/cache 1.*
|  |  |  |  `--php ~5.5|~7.0
|  |  |  |--doctrine/collections 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/inflector 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/lexer 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  `--php >=5.3.2
|  |  `--php ^5.6 || ^7.0
|  |--monolog/monolog *
|  |  |--php >=5.3.0
|  |  `--psr/log ~1.0
|  |--php ^5.6 || ^7.0
|  |--phpunit/phpunit ~5.4
|  |  |--ext-dom *
|  |  |--ext-json *
|  |  |--ext-pcre *
|  |  |--ext-reflection *
|  |  |--ext-spl *
|  |  |--myclabs/deep-copy ~1.3
|  |  |  `--php >=5.4.0
|  |  |--php ^5.6 || ^7.0
|  |  |--phpspec/prophecy ^1.3.1
|  |  |  |--doctrine/instantiator ^1.0.2
|  |  |  |  `--php >=5.3,<8.0-DEV
|  |  |  |--php ^5.3|^7.0
|  |  |  |--phpdocumentor/reflection-docblock ^2.0|^3.0.2
|  |  |  |  |--php >=5.5
|  |  |  |  |--phpdocumentor/reflection-common ^1.0@dev
|  |  |  |  |  `--php >=5.5
|  |  |  |  |--phpdocumentor/type-resolver ^0.2.0
|  |  |  |  |  |--php >=5.5
|  |  |  |  |  `--phpdocumentor/reflection-common ^1.0
|  |  |  |  |     `--php >=5.5
|  |  |  |  `--webmozart/assert ^1.0
|  |  |  |     `--php >=5.3.3
|  |  |  |--sebastian/comparator ^1.1
|  |  |  |  |--php >=5.3.3
|  |  |  |  |--sebastian/diff ~1.2
|  |  |  |  |  `--php >=5.3.3
|  |  |  |  `--sebastian/exporter ~1.2
|  |  |  |     |--php >=5.3.3
|  |  |  |     `--sebastian/recursion-context ~1.0
|  |  |  |        `--php >=5.3.3
|  |  |  `--sebastian/recursion-context ^1.0
|  |  |     `--php >=5.3.3
|  |  |--phpunit/php-code-coverage ^4.0
|  |  |  |--php ^5.6 || ^7.0
|  |  |  |--phpunit/php-file-iterator ~1.3
|  |  |  |  `--php >=5.3.3
|  |  |  |--phpunit/php-text-template ~1.2
|  |  |  |  `--php >=5.3.3
|  |  |  |--phpunit/php-token-stream ^1.4.2
|  |  |  |  |--ext-tokenizer *
|  |  |  |  `--php >=5.3.3
|  |  |  |--sebastian/code-unit-reverse-lookup ~1.0
|  |  |  |  `--php >=5.6
|  |  |  |--sebastian/environment ^1.3.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/version ~1.0|~2.0
|  |  |     `--php >=5.6
|  |  |--phpunit/php-file-iterator ~1.4
|  |  |  `--php >=5.3.3
|  |  |--phpunit/php-text-template ~1.2
|  |  |  `--php >=5.3.3
|  |  |--phpunit/php-timer ^1.0.6
|  |  |  `--php >=5.3.3
|  |  |--phpunit/phpunit-mock-objects ^3.2
|  |  |  |--doctrine/instantiator ^1.0.2
|  |  |  |  `--php >=5.3,<8.0-DEV
|  |  |  |--php ^5.6 || ^7.0
|  |  |  |--phpunit/php-text-template ^1.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/exporter ^1.2
|  |  |     |--php >=5.3.3
|  |  |     `--sebastian/recursion-context ~1.0
|  |  |        `--php >=5.3.3
|  |  |--sebastian/comparator ~1.1
|  |  |  |--php >=5.3.3
|  |  |  |--sebastian/diff ~1.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/exporter ~1.2
|  |  |     |--php >=5.3.3
|  |  |     `--sebastian/recursion-context ~1.0
|  |  |        `--php >=5.3.3
|  |  |--sebastian/diff ~1.2
|  |  |  `--php >=5.3.3
|  |  |--sebastian/environment ^1.3 || ^2.0
|  |  |  `--php >=5.3.3
|  |  |--sebastian/exporter ~1.2
|  |  |  |--php >=5.3.3
|  |  |  `--sebastian/recursion-context ~1.0
|  |  |     `--php >=5.3.3
|  |  |--sebastian/global-state ~1.0
|  |  |  `--php >=5.3.3
|  |  |--sebastian/object-enumerator ~1.0
|  |  |  |--php >=5.6
|  |  |  `--sebastian/recursion-context ~1.0
|  |  |     `--php >=5.3.3
|  |  |--sebastian/resource-operations ~1.0
|  |  |  `--php >=5.6.0
|  |  |--sebastian/version ~1.0|~2.0
|  |  |  `--php >=5.6
|  |  `--symfony/yaml ~2.1|~3.0
|  |     `--php >=5.5.9
|  |--psr/log ~1.0
|  |--sebastian/peek-and-poke 1.0.x@dev
|  |  `--php >=5.6.0
|  |--symfony/console ~3.1
|  |  |--php >=5.5.9
|  |  `--symfony/polyfill-mbstring ~1.0
|  |     `--php >=5.3.3
|  `--twig/twig *
|     `--php >=5.2.7
`--php ^5.6 || ^7.0
gpupo/netshoes-sdk 1.0.1 SDK Não Oficial para integração a partir de aplicações PHP com as APIs da Netshoes Marketplace
|--ext-curl *
|--gpupo/common-sdk ~2
|  |--codeclimate/php-test-reporter @dev
|  |  |--ext-curl *
|  |  |--php >=5.3
|  |  |--satooshi/php-coveralls 1.0.*
|  |  |  |--ext-json *
|  |  |  |--ext-simplexml *
|  |  |  |--guzzle/guzzle ^2.8|^3.0
|  |  |  |  |--ext-curl *
|  |  |  |  |--php >=5.3.3
|  |  |  |  `--symfony/event-dispatcher >=2.1
|  |  |  |     `--php >=5.5.9
|  |  |  |--php >=5.3.3
|  |  |  |--psr/log ^1.0
|  |  |  |--symfony/config ^2.1|^3.0
|  |  |  |  |--php >=5.5.9
|  |  |  |  `--symfony/filesystem ~2.8|~3.0
|  |  |  |     `--php >=5.5.9
|  |  |  |--symfony/console ^2.1|^3.0
|  |  |  |  |--php >=5.5.9
|  |  |  |  `--symfony/polyfill-mbstring ~1.0
|  |  |  |     `--php >=5.3.3
|  |  |  |--symfony/stopwatch ^2.0|^3.0
|  |  |  |  `--php >=5.5.9
|  |  |  `--symfony/yaml ^2.0|^3.0
|  |  |     `--php >=5.5.9
|  |  `--symfony/console >=2.0
|  |     |--php >=5.5.9
|  |     `--symfony/polyfill-mbstring ~1.0
|  |        `--php >=5.3.3
|  |--gpupo/cache *
|  |  |--gpupo/common *
|  |  |  |--doctrine/common ~2.5.1
|  |  |  |  |--doctrine/annotations 1.*
|  |  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  |  `--php >=5.3.2
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  |--doctrine/cache 1.*
|  |  |  |  |  `--php ~5.5|~7.0
|  |  |  |  |--doctrine/collections 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  |--doctrine/inflector 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  `--php >=5.3.2
|  |  |  `--php ^5.6 || ^7.0
|  |  |--php ^5.6 || ^7.0
|  |  `--psr/cache 1.0.0
|  |     `--php >=5.3.0
|  |--gpupo/common *
|  |  |--doctrine/common ~2.5.1
|  |  |  |--doctrine/annotations 1.*
|  |  |  |  |--doctrine/lexer 1.*
|  |  |  |  |  `--php >=5.3.2
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/cache 1.*
|  |  |  |  `--php ~5.5|~7.0
|  |  |  |--doctrine/collections 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/inflector 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  |--doctrine/lexer 1.*
|  |  |  |  `--php >=5.3.2
|  |  |  `--php >=5.3.2
|  |  `--php ^5.6 || ^7.0
|  |--monolog/monolog *
|  |  |--php >=5.3.0
|  |  `--psr/log ~1.0
|  |--php ^5.6 || ^7.0
|  |--phpunit/phpunit ~5.4
|  |  |--ext-dom *
|  |  |--ext-json *
|  |  |--ext-pcre *
|  |  |--ext-reflection *
|  |  |--ext-spl *
|  |  |--myclabs/deep-copy ~1.3
|  |  |  `--php >=5.4.0
|  |  |--php ^5.6 || ^7.0
|  |  |--phpspec/prophecy ^1.3.1
|  |  |  |--doctrine/instantiator ^1.0.2
|  |  |  |  `--php >=5.3,<8.0-DEV
|  |  |  |--php ^5.3|^7.0
|  |  |  |--phpdocumentor/reflection-docblock ^2.0|^3.0.2
|  |  |  |  |--php >=5.5
|  |  |  |  |--phpdocumentor/reflection-common ^1.0@dev
|  |  |  |  |  `--php >=5.5
|  |  |  |  |--phpdocumentor/type-resolver ^0.2.0
|  |  |  |  |  |--php >=5.5
|  |  |  |  |  `--phpdocumentor/reflection-common ^1.0
|  |  |  |  |     `--php >=5.5
|  |  |  |  `--webmozart/assert ^1.0
|  |  |  |     `--php >=5.3.3
|  |  |  |--sebastian/comparator ^1.1
|  |  |  |  |--php >=5.3.3
|  |  |  |  |--sebastian/diff ~1.2
|  |  |  |  |  `--php >=5.3.3
|  |  |  |  `--sebastian/exporter ~1.2
|  |  |  |     |--php >=5.3.3
|  |  |  |     `--sebastian/recursion-context ~1.0
|  |  |  |        `--php >=5.3.3
|  |  |  `--sebastian/recursion-context ^1.0
|  |  |     `--php >=5.3.3
|  |  |--phpunit/php-code-coverage ^4.0
|  |  |  |--php ^5.6 || ^7.0
|  |  |  |--phpunit/php-file-iterator ~1.3
|  |  |  |  `--php >=5.3.3
|  |  |  |--phpunit/php-text-template ~1.2
|  |  |  |  `--php >=5.3.3
|  |  |  |--phpunit/php-token-stream ^1.4.2
|  |  |  |  |--ext-tokenizer *
|  |  |  |  `--php >=5.3.3
|  |  |  |--sebastian/code-unit-reverse-lookup ~1.0
|  |  |  |  `--php >=5.6
|  |  |  |--sebastian/environment ^1.3.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/version ~1.0|~2.0
|  |  |     `--php >=5.6
|  |  |--phpunit/php-file-iterator ~1.4
|  |  |  `--php >=5.3.3
|  |  |--phpunit/php-text-template ~1.2
|  |  |  `--php >=5.3.3
|  |  |--phpunit/php-timer ^1.0.6
|  |  |  `--php >=5.3.3
|  |  |--phpunit/phpunit-mock-objects ^3.2
|  |  |  |--doctrine/instantiator ^1.0.2
|  |  |  |  `--php >=5.3,<8.0-DEV
|  |  |  |--php ^5.6 || ^7.0
|  |  |  |--phpunit/php-text-template ^1.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/exporter ^1.2
|  |  |     |--php >=5.3.3
|  |  |     `--sebastian/recursion-context ~1.0
|  |  |        `--php >=5.3.3
|  |  |--sebastian/comparator ~1.1
|  |  |  |--php >=5.3.3
|  |  |  |--sebastian/diff ~1.2
|  |  |  |  `--php >=5.3.3
|  |  |  `--sebastian/exporter ~1.2
|  |  |     |--php >=5.3.3
|  |  |     `--sebastian/recursion-context ~1.0
|  |  |        `--php >=5.3.3
|  |  |--sebastian/diff ~1.2
|  |  |  `--php >=5.3.3
|  |  |--sebastian/environment ^1.3 || ^2.0
|  |  |  `--php >=5.3.3
|  |  |--sebastian/exporter ~1.2
|  |  |  |--php >=5.3.3
|  |  |  `--sebastian/recursion-context ~1.0
|  |  |     `--php >=5.3.3
|  |  |--sebastian/global-state ~1.0
|  |  |  `--php >=5.3.3
|  |  |--sebastian/object-enumerator ~1.0
|  |  |  |--php >=5.6
|  |  |  `--sebastian/recursion-context ~1.0
|  |  |     `--php >=5.3.3
|  |  |--sebastian/resource-operations ~1.0
|  |  |  `--php >=5.6.0
|  |  |--sebastian/version ~1.0|~2.0
|  |  |  `--php >=5.6
|  |  `--symfony/yaml ~2.1|~3.0
|  |     `--php >=5.5.9
|  |--psr/log ~1.0
|  |--sebastian/peek-and-poke 1.0.x@dev
|  |  `--php >=5.6.0
|  |--symfony/console ~3.1
|  |  |--php >=5.5.9
|  |  `--symfony/polyfill-mbstring ~1.0
|  |     `--php >=5.3.3
|  `--twig/twig *
|     `--php >=5.2.7
`--php ^5.6 || ^7.0
symfony/http-kernel v3.1.1 Symfony HttpKernel Component
|--php >=5.5.9
|--psr/log ~1.0
|--symfony/debug ~2.8|~3.0
|  |--php >=5.5.9
|  `--psr/log ~1.0
|--symfony/event-dispatcher ~2.8|~3.0
|  `--php >=5.5.9
`--symfony/http-foundation ~2.8|~3.0
   |--php >=5.5.9
   `--symfony/polyfill-mbstring ~1.1
      `--php >=5.3.3
symfony/dependency-injection v3.1.1 Symfony DependencyInjection Component
`--php >=5.5.9
symfony/monolog-bundle 2.11.1 Symfony MonologBundle
|--monolog/monolog ~1.18
|  |--php >=5.3.0
|  `--psr/log ~1.0
|--php >=5.3.2
|--symfony/config ~2.3|~3.0
|  |--php >=5.5.9
|  `--symfony/filesystem ~2.8|~3.0
|     `--php >=5.5.9
|--symfony/dependency-injection ~2.3|~3.0
|  `--php >=5.5.9
|--symfony/http-kernel ~2.3|~3.0
|  |--php >=5.5.9
|  |--psr/log ~1.0
|  |--symfony/debug ~2.8|~3.0
|  |  |--php >=5.5.9
|  |  `--psr/log ~1.0
|  |--symfony/event-dispatcher ~2.8|~3.0
|  |  `--php >=5.5.9
|  `--symfony/http-foundation ~2.8|~3.0
|     |--php >=5.5.9
|     `--symfony/polyfill-mbstring ~1.1
|        `--php >=5.3.3
`--symfony/monolog-bridge ~2.3|~3.0
   |--monolog/monolog ~1.11
   |  |--php >=5.3.0
   |  `--psr/log ~1.0
   `--php >=5.5.9
symfony/phpunit-bridge v3.1.1 Symfony PHPUnit Bridge
`--php >=5.3.3
