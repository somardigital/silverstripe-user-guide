# Silverstripe User Guide

This module for Silverstripe CMS embeds an external user guide document (such as Google Docs) in the CMS and provides a link to it.

## Requirements

* SilverStripe Framework ^6.0

## Installation

```
composer require "somardesignstudios/silverstripe-user-guide"
```

## Usage

Add the user guide document embed code in your yaml configuration:

```
Somar\UserGuide\Admin\UserGuideAdmin:
    embed_code: '<iframe src="https://docs.google.com/document/d/e/<GoogleDocID>/pub?embedded=true"></iframe>'
```
