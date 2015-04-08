# MarkethubBundle

## Install

Use [Composer](http://getcomposer.com) to install the bundle:

    composer require gpupo/markethub-bundle:~1.0

Then register the bundle in you kernel. For example:

```php
<?php
// app/AppKernel.php
// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return array(
            //...
            new Gpupo\Bundle\MarkethubBundle\MarkethubBundle(),
        );
    }
    // ...
}
```

## Setup 

app/config/parameters.yml :

```yaml
parameters:
    #...
    markethub_submarino_api_token: 'MyApiToken'
```

app/config/config_dev.yml:

```yaml
markethub:
    submarino:
        - api_token: 'MySandbox@ApiToken'
```

app/config/config_prod.yml:

```yaml
markethub:
    submarino:
        - api_token: %markethub_submarino_api_token%
        - api_version: 'api'        
```