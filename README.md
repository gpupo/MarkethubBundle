# MarkethubBundle

Integração de SDKs para Marketplaces com aplicações Symfony 4

[![Build Status](https://secure.travis-ci.org/gpupo/MarkethubBundle.png?branch=master)](http://travis-ci.org/gpupo/MarkethubBundle)

## Compatibilidade

Nas versões > 2, apenas PHP 7 ou superior é suportado.
As versões 1.x rodam com PHP > 5.3.

## Integrações disponíveis

- B2W (v1, v2)
- Cnova (v1)
- Netshoes (v1)
- Mercado Livre (v1, v2)

## Instalação

Usando [Composer](http://getcomposer.com):

    composer require gpupo/markethub-bundle

Registre o bundle:

```php
<?php
// config/bundles.php

Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\MarkethubBundle::class => ['all' => true],


```


## Setup

config/parameters.yml :

```yaml
parameters:
    #...
    markethub_submarino_api_token: 'MyApiToken'
```

config/config_dev.yml:

```yaml
markethub:
    submarino:
        api_token: 'MySandbox@ApiToken'
```

config/packages/markethub.yaml:

```yaml
markethub:
    submarino:
        api_token: %markethub_submarino_api_token%
        api_version: 'api'
```

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


## Commands

### View a product info

	./bin/console  markethub:mercadolivre:catalog:product:view MLB23375818902

---

## Desenvolvimento

    git clone --depth=1  git@github.com:gpupo/MarkethubBundle.git markethub-bundle
    cd markethub-bundle;
    ant;

Personalize a configuração do ``phpunit``:

    cp phpunit.xml.dist phpunit.xml;

Personalize os parâmetros!



*Dica*: Verifique os logs gerados em ``var/log/main.log``
