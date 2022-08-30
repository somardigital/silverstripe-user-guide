# Silverstripe User Guide

This module for Silverstripe CMS embeds an external user guide document (such as Google Docs) in the CMS and provides a link to it.


## Installation

First update composer.json with the repository:

```
    "repositories": [
        {
            "type": "vcs",
            "url": "git@bitbucket.org:somardesignstudios/silverstripe-user-guide.git"
        }
    ],
```

Then require the module as usual:

```
composer require "somardesignstudios/silverstripe-user-guide"
```

## Usage

Add the user guide document embed code in your yaml configuration:

```
Somar\UserGuide\Admin\UserGuideAdmin:
    embed_code: '<iframe src="https://docs.google.com/document/d/e/<GoogleDocID>/pub?embedded=true"></iframe>'
```
