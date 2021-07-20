<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a4ae1993c20a1d12336d450939027db
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '0d59ee240a4cd96ddbb4ff164fccea4d' => __DIR__ . '/..' . '/symfony/polyfill-php73/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '8825ede83f2f289127722d4e842cf7e8' => __DIR__ . '/..' . '/symfony/polyfill-intl-grapheme/bootstrap.php',
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        'b6b991a57620e2fb6b2f66f03fe9ddc2' => __DIR__ . '/..' . '/symfony/string/Resources/functions.php',
        'a1105708a18b76903365ca1c4aa61b02' => __DIR__ . '/..' . '/symfony/translation/Resources/functions.php',
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        'ee3f63fba4aee765c47ba535aa9e0804' => __DIR__ . '/..' . '/spiral/attributes/src/polyfill.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Temporal\\Roadrunner\\' => 20,
            'Temporal\\Pendulum\\' => 18,
            'Temporal\\PendulumUtils\\' => 23,
            'Temporal\\Api\\' => 13,
            'Temporal\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Php73\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Grapheme\\' => 31,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Contracts\\HttpClient\\' => 29,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\String\\' => 25,
            'Symfony\\Component\\HttpClient\\' => 29,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Console\\' => 26,
            'Spiral\\Tokenizer\\' => 17,
            'Spiral\\RoadRunner\\Console\\' => 26,
            'Spiral\\RoadRunner\\' => 18,
            'Spiral\\Logger\\' => 14,
            'Spiral\\Goridge\\' => 15,
            'Spiral\\Core\\' => 12,
            'Spiral\\Attributes\\' => 18,
        ),
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'PhpParser\\' => 10,
        ),
        'G' => 
        array (
            'Grpc\\' => 5,
            'Google\\Protobuf\\' => 16,
            'Google\\' => 7,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
            'GPBMetadata\\Google\\' => 19,
            'GPBMetadata\\' => 12,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Temporal\\Roadrunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/temporal/sdk/api/Temporal/Roadrunner',
        ),
        'Temporal\\Pendulum\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Temporal\\PendulumUtils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/util-src',
        ),
        'Temporal\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/temporal/sdk/api/Temporal/Api',
        ),
        'Temporal\\' => 
        array (
            0 => __DIR__ . '/..' . '/temporal/sdk/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Php73\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php73',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Grapheme\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-grapheme',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Contracts\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-client-contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\String\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/string',
        ),
        'Symfony\\Component\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-client',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Spiral\\Tokenizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/spiral/tokenizer/src',
        ),
        'Spiral\\RoadRunner\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/spiral/roadrunner-cli/src',
        ),
        'Spiral\\RoadRunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/spiral/roadrunner-worker/src',
        ),
        'Spiral\\Logger\\' => 
        array (
            0 => __DIR__ . '/..' . '/spiral/logger/src',
        ),
        'Spiral\\Goridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/spiral/goridge/src',
        ),
        'Spiral\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/spiral/core/src',
        ),
        'Spiral\\Attributes\\' => 
        array (
            0 => __DIR__ . '/..' . '/spiral/attributes/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/common-protos/src',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/common-protos/metadata',
        ),
        'GPBMetadata\\' => 
        array (
            0 => __DIR__ . '/..' . '/temporal/sdk/api/GPBMetadata',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'JsonException' => __DIR__ . '/..' . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a4ae1993c20a1d12336d450939027db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a4ae1993c20a1d12336d450939027db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a4ae1993c20a1d12336d450939027db::$classMap;

        }, null, ClassLoader::class);
    }
}