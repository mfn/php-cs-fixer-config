# My opinionated php-cs-fixer config for v3

Not much to say, these are my opinions.

GitHub issues are disabled, as there's likely not much to discuss here.

If you feel strongly about something, please create a PR and let's look at the technical side together.

## Usage

The rules require `setRiskyAllowed(true)`. 

In your php-cs-fixer config:
```php
require 'vendor/autoload.php';

$rules = \Mfn\PhpCsFixer\Config::getRules();

return (new PhpCsFixer\Config())
  ->setFinder(…)
  ->setRiskyAllowed(true)
  ->setRules($rules);
```

## License

None? Pick what you want? I don't care, it's just a configuration.
