# ZF-AcMailer tooling

This console tool allows you to work with [ZF-AcMailer](https://github.com/acelaya/ZF-AcMailer) in development.

### Installation

Install it as a dev dependency with composer

    composer require acelaya/zf-acmailer-tooling --dev

### Usage

This package provides a console tool that can be used to run helper commands

    vendor/bin/acmailer <command>

#### Available commands

* `config:migrate`: Migrates configuration from the structure used in AcMailer v5/v6 to the structure used in v7
