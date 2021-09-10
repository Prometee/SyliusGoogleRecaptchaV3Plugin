[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]
[![Quality Score][ico-code-quality]][link-code-quality]

# Sylius Plugin adding Google Recaptcha V3 integration

This plugin is adding Google Recaptcha V3 to the following forms :

- Contact form
- Registration form

But an abstract class is available to add the captcha field to any other `Form\Extension`

## Installation

```bash
composer require prometee/sylius-google-recaptcha-v3-plugin
```
## Configuration

Enable this plugin :

```php
<?php

# config/bundles.php

return [
    // ...
    Prometee\SyliusGoogleRecaptchaV3Plugin\PrometeeSyliusGoogleRecaptchaV3Plugin::class => ['all' => true],
    // ...
];
```

This plugin is using the `karser/karser-recaptcha3-bundle` to handle the validation of the
Google Recaptcha V3, so a little configuration have to be made.
Add or modify the `karser/karser-recaptcha3-bundle` configuration :

```yaml
# config/packages/karser_recaptcha3.yaml

karser_recaptcha3:
    site_key: '%env(GOOGLE_RECAPTCHA_SITE_KEY)%'
    secret_key: '%env(GOOGLE_RECAPTCHA_SECRET)%'
    score_threshold: 0.5

```

Finally add your site key and secret to your `.env.local` file :

```dotenv
###> google/recaptcha ###
GOOGLE_RECAPTCHA_SITE_KEY=my_site_key
GOOGLE_RECAPTCHA_SECRET=my_secret
###< google/recaptcha ###
```

[ico-version]: https://img.shields.io/packagist/v/Prometee/sylius-google-recaptcha-v3-plugin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://github.com/Prometee/SyliusGoogleRecaptchaV3Plugin/workflows/Build/badge.svg
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Prometee/SyliusGoogleRecaptchaV3Plugin.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/prometee/sylius-google-recaptcha-v3-plugin
[link-github-actions]: https://github.com/Prometee/SyliusGoogleRecaptchaV3Plugin/actions?query=workflow%3A"Build"
[link-scrutinizer]: https://scrutinizer-ci.com/g/Prometee/SyliusGoogleRecaptchaV3Plugin/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Prometee/SyliusGoogleRecaptchaV3Plugin
