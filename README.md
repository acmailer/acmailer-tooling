# ZF-AcMailer tooling

This console tool allows you to work with [ZF-AcMailer](https://github.com/acelaya/ZF-AcMailer) in development.

[![Build Status](https://travis-ci.org/acelaya/zf-acmailer-tooling.svg?branch=master)](https://travis-ci.org/acelaya/zf-acmailer-tooling)
[![Latest Stable Version](https://poser.pugx.org/acelaya/zf-acmailer-tooling/v/stable.png)](https://packagist.org/packages/acelaya/zf-acmailer-tooling)
[![License](https://poser.pugx.org/acelaya/zf-acmailer-tooling/license.png)](https://packagist.org/packages/acelaya/zf-acmailer-tooling)

### Installation

Install it as a dev dependency with composer

    composer require acelaya/zf-acmailer-tooling --dev

### Usage

This package provides a console tool that can be used to run helper commands

    vendor/bin/acmailer <command>

#### Available commands

* `config:migrate`: Migrates configuration from the structure used in AcMailer v5/v6 to the structure used in v7
