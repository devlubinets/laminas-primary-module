# Primary Module

## Purpose

{PURPOSE DESCRIPTION}

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
            "url": "git@bitbucket.org:iss-module/primary.git"
        }
    ],
    "require": {   
        ...,
        ...,
        ...,     
        "iss-module/primary": "dev-develop",
    },
```

### Setup
{SETUP INSTRUCTION}

## Common
### ISS module

That module created based on the ISS module [Primary module](https://bitbucket.org/iss-module/primary/src/alpha/) and module's init branch pushed to alpha [Alpha module repo](https://bitbucket.org/iss-module/alpha/src/alpha/).

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