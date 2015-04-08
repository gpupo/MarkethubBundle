# MarkethubBundle


## Setup 

app/config/parameters.yml :

```yaml
parameters:
    markethub_submarino_api_token: 'foo'
```

app/config/config.yml:

```yaml
markethub:
    enabled: true
    submarino:
        api_token: %markethub_submarino_api_token%
        api_version: 'sandbox'        
```