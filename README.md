# Zend Server Tool

## Introduction

This is a simple application using the ZF2 MVC layer and the PHP Zend Server API,
demonstrating some of the neat features of ZendServer and the new PHP layer by @iwalz.

We always had the trouble that developer needed access to the ZendServer Event log,
but we did not want to give them access to our productive ZendServer.
So I created an app, that allows us to see event logs and information about deployed apps by
utilizing the twitter bootstrap template for the apps frontend.

It only supports reading access to parts of your server which are likely not security related.

## Installation

### Using GitHub

The manual way would be to clone the repository and manually invoke `composer` using the shipped
`composer.phar`:
```
cd my/project/dir
git clone git://github.com/kevinpapst/zendservertool.git
cd zendservertool
php composer.phar self-update
php composer.phar install
```

### Zend Server configuration

You have to configure your Zend Server instance in the file: /module/Zstool/config/servers.config.php

You need the URL and an API key, which you can obtain from the Zend Server GUI.

### Zend Server deployment

After you fetched the project, you can either copy it the project to your document root or you
use the prefered method by deploying a ZPK application.

Therefor you have to call phing, which will build a deployable ZPK at **build/zendservertool.zpk**.
This ZPK can then be installed through your Zend Server instance.
```
cd zendservertool
phing
```
