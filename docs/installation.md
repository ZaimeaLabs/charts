---
title: How to install package
description: How to install package
github: https://github.com/zaimealabs/charts/edit/main/docs/
onThisArticle: true
sidebar: true
rightbar: true
---

# Charts

[[TOC]]

## Introduction

This package is developed for `Livewire`, it helps you implement `Apex Charts` in your `Laravel` application.

## Instalation

You can install the package via composer:

```bash
composer require zaimea/charts
```

or via composer.json

```json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/zaimea/charts"
        }
    ]
```

## Publish

```bash
php artisan vendor:publish --tag=charts-config
```

```bash
php artisan vendor:publish --tag=charts-apexcharts-script
```
