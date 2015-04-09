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
    
## Market places disponíveis:

- submarino
- cnova

## Serviços disponíveis:

(considere %nome_marketplace% como valor a ser preenchido)

- markethub.%nome_marketplace%.factory
- markethub.%nome_marketplace%.client
- markethub.%nome_marketplace%.product.manager
- markethub.%nome_marketplace%.product.sku.manager
- markethub.%nome_marketplace%.order.manager

## Contrutores disponíveis:

- createProduct
- createSku
- createOrder

Uso:

    $this->get('markethub.%nome_marketplace%.factory')->createProduct($data);


## Exemplo de uso: B2W Marketplace

É utilizando gpupo/submarino-sdk, com a diferença da disponibilidade de
services no escopo onde Container está presente.

### Exemplos de manutenção de Produtos

```PHP
<?php
///...

// Acesso a lista de produtos cadastrados, utilizando SF2 service:
$produtosCadastrados = $this->('markethub.submarino.order.manager')->fetch(); // Collection de Objetos Product

// Acesso a informações de um produto cadastrado e com identificador conhecido:
$produto = $this->('markethub.submarino.product.manager')->findById(9)); // Objeto Produto

echo $product->getName(); // Acesso ao nome do produto #9



// Criação de um produto:
$data = [];
$product = $this->('markethub.submarino.factory')->createProduct($data);

foreach ($data['sku'] as $item) {
    $sku = $this->('markethub.submarino.factory')->createSku($item);
    $product->getSku()->add($sku);
}

$this->('markethub.submarino.product.manager')->save($product);

//Adicionando SKU ao produto:
$skuData = [];
$novoSku = $this->('markethub.submarino.factory')->createSku($skuData);
$product->getSku()->add($novoSku);
$this->('markethub.submarino.product.manager')->save($product);

```