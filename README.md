# PHP CI/CD Project

[![PHP CI Application](https://github.com/vikafelsh/1lab-php/actions/workflows/php-ci.yml/badge.svg)](https://github.com/vikafelsh/1lab-php/actions/workflows/php-ci.yml)

## Project Description

This project is a simple PHP calculator application developed to demonstrate Continuous Integration (CI) using GitHub Actions.

## Features

- Addition and subtraction operations using the Calculator class.
- Automated unit testing with PHPUnit.
- Code style validation using Laravel Pint.
- Automated CI pipeline using GitHub Actions.
- Secure storage of environment secrets using GitHub Secrets.
- Branch protection to support code quality checks.

## Technologies

- PHP 8.2
- Composer
- PHPUnit 10.5
- Laravel Pint
- GitHub Actions

## Running Tests

Install dependencies:

```bash
composer install
```

Run unit tests:

```bash
./vendor/bin/phpunit tests/Unit
```

Check code formatting:

```bash
./vendor/bin/pint --test
```

## CI Pipeline

The CI pipeline runs automatically on pushes and pull requests targeting the main branch. It installs dependencies, checks code formatting, runs unit tests, and demonstrates GitHub Secrets masking.