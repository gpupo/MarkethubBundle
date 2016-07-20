
## Instalação

Usando [Composer](http://getcomposer.com):

    composer require gpupo/markethub-bundle:~1.3

Registre o bundle no Kernel:

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
        api_token: 'MySandbox@ApiToken'
        register_path: var/logs/
```

app/config/config_prod.yml:

```yaml
markethub:
    submarino:
        api_token: %markethub_submarino_api_token%
        api_version: api

```

``register_path`` indica o diretório para logs de requisições RestFull


## Serviços disponíveis

(considere ``%nome_marketplace%`` como valor a ser preenchido)

- markethub.%nome_marketplace%.factory
- markethub.%nome_marketplace%.client
- markethub.%nome_marketplace%.product.manager
- markethub.%nome_marketplace%.product.sku.manager
- markethub.%nome_marketplace%.order.manager

## Contrutores disponíveis

- createProduct
- createSku
- createOrder
