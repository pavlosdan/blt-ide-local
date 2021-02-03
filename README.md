Acquia BLT IDE Local
====

This is an [Acquia BLT](https://github.com/acquia/blt) plugin allowing an Acquia IDE environment to be treated the same as a local environment.

This plugin is **community-created** and **community-supported**. Acquia does not provide any direct support for this software or provide any warranty as to its stability.

## Installation

To use this plugin, you must already have a Drupal project using BLT 10 or later, and an Acquia IDE.

Add the following to the `repositories` section of your project's composer.json:

```
"blt-ide-local": {
    "type": "vcs",
    "url": "https://github.com/pavlosdan/blt-ide-local.git"
}
```

or run:

```
composer config repositories.blt-ide-local vcs https://github.com/pavlosdan/blt-ide-local.git
```

Require the plugin with Composer:

`composer require acquia/blt-ide-local`
