<?php

namespace Barryvdh\Composer;

class CleanupRules
{
    public static function getRules()
    {
        // Default patterns for common files
        $docs = 'README* CHANGELOG* FAQ* CONTRIBUTING* HISTORY* UPGRADING* UPGRADE* package* demo example examples doc docs readme* changelog* composer*';
        $tests = '.travis.yml .scrutinizer.yml phpcs.xml* phpcs.php phpunit.xml* phpunit.php test tests Tests travis patchwork.json .git';

        return array(
            'google/apiclient-services'             => array($docs, $tests, 'src/Google/Compute', 'src/Google/Dfareporting', 'src/Google/ShoppingContent', 'src/Google/YouTube', 'src/Google/DisplayVideo', 'src/Google/Vision', 'src/Google/Apigee', 'src/Google/DLP', 'src/Google/Dialogflow', 'src/Google/Dataflow'),
            'tecnickcom/tcpdf'                      => array($docs, $tests, 'fonts'),
            'anahkiasen/former'                     => array($docs, $tests),
            'anahkiasen/html-object'                => array($docs, 'phpunit.xml* tests/*'),
            'anahkiasen/rocketeer'                  => array($docs, $tests),
            'anahkiasen/underscore-php'             => array($docs, $tests),
            'aws/aws-sdk-php'                       => array($docs, $tests),
            'barryvdh/composer-cleanup-plugin'      => array($docs, $tests),
            'barryvdh/laravel-debugbar'             => array($docs, $tests),
            'barryvdh/laravel-ide-helper'           => array($docs, $tests),
            'bllim/datatables'                      => array($docs, $tests),
            'cartalyst/sentry'                      => array($docs, $tests),
            'classpreloader/classpreloader'         => array($docs, $tests),
            'd11wtq/boris'                          => array($docs, $tests),
            'danielstjules/stringy'                 => array($docs, $tests),
            'dflydev/markdown'                      => array($docs, $tests),
            'dnoegel/php-xdg-base-dir'              => array($docs, $tests),
            'doctrine/annotations'                  => array($docs, $tests, 'bin'),
            'doctrine/cache'                        => array($docs, $tests, 'bin'),
            'doctrine/collections'                  => array($docs, $tests),
            'doctrine/common'                       => array($docs, $tests, 'bin lib/vendor'),
            'doctrine/dbal'                         => array($docs, $tests, 'bin build* docs2 lib/vendor'),
            'doctrine/inflector'                    => array($docs, $tests),
            'dompdf/dompdf'                         => array($docs, $tests, 'www'),
            'filp/whoops'                           => array($docs, $tests),
            'guzzle/guzzle'                         => array($docs, $tests),
            'guzzlehttp/guzzle'                     => array($docs, $tests),
            'guzzlehttp/oauth-subscriber'           => array($docs, $tests),
            'guzzlehttp/streams'                    => array($docs, $tests),
            'imagine/imagine'                       => array($docs, $tests, 'lib/Imagine/Test'),
            'intervention/image'                    => array($docs, $tests, 'public'),
            'ircmaxell/password-compat'             => array($docs, $tests),
            'jakub-onderka/php-console-color'       => array($docs, $tests, 'build.xml example.php'),
            'jakub-onderka/php-console-highlighter' => array($docs, $tests, 'build.xml'),
            'jasonlewis/basset'                     => array($docs, $tests),
            'jeremeamia/SuperClosure'               => array($docs, $tests, 'demo'),
            'kriswallsmith/assetic'                 => array($docs, $tests),
            'laravel/framework'                     => array($docs, $tests, 'build'),
            'leafo/lessphp'                         => array($docs, $tests, 'Makefile package.sh'),
            'league/flysystem'                      => array($docs, $tests),
            'league/stack-robots'                   => array($docs, $tests),
            'maximebf/debugbar'                     => array($docs, $tests, 'demo'),
            'mccool/laravel-auto-presenter'         => array($docs, $tests),
            'mockery/mockery'                       => array($docs, $tests),
            'monolog/monolog'                       => array($docs, $tests),
            'mrclay/minify'                         => array($docs, $tests, 'MIN.txt min_extras min_unit_tests min/builder min/config* min/quick-test* min/utils.php min/groupsConfig.php min/index.php'),
            'mtdowling/cron-expression'             => array($docs, $tests),
            'mustache/mustache'                     => array($docs, $tests, 'bin'),
            'nesbot/carbon'                         => array($docs, $tests),
            'nikic/php-parser'                      => array($docs, $tests, 'test_old'),
            'oyejorge/less.php'                     => array($docs, $tests),
            'patchwork/utf8'                        => array($docs, $tests),
            'phenx/php-font-lib'                    => array($docs, $tests . 'www'),
            'phpdocumentor/reflection-docblock'     => array($docs, $tests),
            'phpoffice/phpexcel'                    => array($docs, $tests, 'Examples unitTests changelog.txt'),
            'phpoffice/phpspreadsheet'              => array($docs, $tests, 'samples'),
            'phpseclib/phpseclib'                   => array($docs, $tests, 'build'),
            'predis/predis'                         => array($docs, $tests, 'bin'),
            'psr/log'                               => array($docs, $tests),
            'psy/psysh'                             => array($docs, $tests),
            'quickbooks/v3-php-sdk'                 => array($docs, $tests, 'docs docs/* src/XSD2PHP/test src/XSD2PHP/test/*'),
            'rcrowe/twigbridge'                     => array($docs, $tests),
            'simplepie/simplepie'                   => array($docs, $tests, 'build compatibility_test ROADMAP.md'),
            'stack/builder'                         => array($docs, $tests),
            'swiftmailer/swiftmailer'               => array($docs, $tests, 'build* notes test-suite create_pear_package.php'),
            'symfony/browser-kit'                   => array($docs, $tests),
            'symfony/class-loader'                  => array($docs, $tests),
            'symfony/console'                       => array($docs, $tests),
            'symfony/css-selector'                  => array($docs, $tests),
            'symfony/debug'                         => array($docs, $tests),
            'symfony/dom-crawler'                   => array($docs, $tests),
            'symfony/event-dispatcher'              => array($docs, $tests),
            'symfony/filesystem'                    => array($docs, $tests),
            'symfony/finder'                        => array($docs, $tests),
            'symfony/http-foundation'               => array($docs, $tests),
            'symfony/http-kernel'                   => array($docs, $tests),
            'symfony/process'                       => array($docs, $tests),
            'symfony/routing'                       => array($docs, $tests),
            'symfony/security'                      => array($docs, $tests),
            'symfony/security-core'                 => array($docs, $tests),
            'symfony/translation'                   => array($docs, $tests),
            'symfony/var-dumper'                    => array($docs, $tests),
            'tijsverkoyen/css-to-inline-styles'     => array($docs, $tests),
            'twig/twig'                             => array($docs, $tests),
            'venturecraft/revisionable'             => array($docs, $tests),
            'vlucas/phpdotenv'                      => array($docs, $tests),
            'willdurand/geocoder'                   => array($docs, $tests),
            'fzaninotto/faker'                      => array($docs, $tests, 'src/Faker/Provider/nl_BE', 'src/Faker/Provider/fr_FR', 'src/Faker/Provider/cs_CZ', 'src/Faker/Provider/ru_RU', 'src/Faker/Provider/ka_GE'),


        );
    }
}
