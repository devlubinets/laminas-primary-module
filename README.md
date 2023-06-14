# BusinessEvent module

## Purpose

BusinessEvent

## Installation

### Composer

The preferred method is via [composer](https://getcomposer.org/). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

**IMPORTANT**: Make sure the `composer.json` has the following configurations in it.

```shell script
    "minimum-stability": "dev",
    "repositories": [
        {
            "type": "vcs",
            "url": "{REPO_NAME_SSH}"
        }
    ],
    "require": {   
        ...,
        ...,
        ...,     
        "/businessevent-module": "dev-develop",
    },
```

### Setup
{SETUP INSTRUCTION}

## Common
### Module

That module created based on the [businessevent-module]({REPO_NAME_SSH}) and module's init branch pushed to [primary module repo](https://github.com/devlubinets/laminas-primary-module).

### Links

* Package - [link]()

## Developer section

Ensure that module uses and passes the following commands:

- run composer install

```shell
composer install
```

- all tests must pass

```shell
composer test
``` 

- this can be used to auto-fix many formatting issues

```shell
 composer csfix
``` 

- all PSR-12 standards must pass

```shell
 composer cs
 ```

- static analysis

```shell
 composer stan
 ``` 

- as near as possible to 100% coverage should be achievable in a module

```shell
 composer cover
 ```

- run all command before make PR

```shell
composer test
composer csfix
composer cs
composer stan
composer cover
```
