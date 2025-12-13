<?php
return [
    'BE' => [
        'debug' => false,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$QmlGRFh6LkRncXc5N1AzQw$VSF+cDnBXHK+AhCCO/GRpSiUm5t/31822bhz/U/L1g4',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'psacontrols',
                'defaultTableOptions' => [
                    'charset' => 'utf8mb4',
                    'collation' => 'utf8mb4_unicode_ci',
                ],
                'driver' => 'mysqli',
                'host' => 'k3lr.your-database.de',
                'password' => 'c5}UBwxR7hJL',
                'port' => 3306,
                'user' => 'bonnog_1',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'recaptcha' => [
            'api_server' => 'https://www.google.com/recaptcha/api.js',
            'enforceCaptcha' => '0',
            'invisible_private_key' => '',
            'invisible_public_key' => '',
            'lang' => '',
            'private_key' => '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',
            'public_key' => '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
            'robotMode' => '0',
            'verify_server' => 'https://www.google.com/recaptcha/api/siteverify',
        ],
        'staticfilecache' => [
            'backendDisplayMode' => 'both',
            'boostMode' => '0',
            'cacheTagsEnable' => '0',
            'clearCacheForAllDomains' => '1',
            'cspGenerationOverride' => '0',
            'debugHeaders' => '0',
            'disableInDevelopment' => '0',
            'enableGeneratorBrotli' => '0',
            'enableGeneratorGzip' => '1',
            'enableGeneratorPhp' => '0',
            'enableGeneratorPlain' => '0',
            'hashUriInCache' => '0',
            'headerSizeBuffer' => '1.5',
            'htaccessTemplateName' => 'EXT:staticfilecache/Resources/Private/Templates/Htaccess.html',
            'inlineAssetsFileSize' => '50000',
            'inlineScriptMinify' => '0',
            'inlineServiceFavIcon' => '0',
            'inlineServiceScripts' => '0',
            'inlineServiceStyles' => '0',
            'inlineStyleAssets' => 'ico,png,woff2',
            'inlineStyleMinify' => '0',
            'largeIdentifierInCacheTable' => '0',
            'maxHeaderSize' => '8192',
            'overrideCacheDirectory' => '',
            'overrideClientUserAgent' => '',
            'phpTemplateName' => 'EXT:staticfilecache/Resources/Private/Templates/Php.html',
            'rawurldecodeCacheFileName' => '0',
            'renameTablesToOtherPrefix' => '0',
            'sendCacheControlHeaderRedirectAfterCacheTimeout' => '1',
            'sendHttp2PushEnable' => '0',
            'sendHttp2PushFileExtensions' => 'css,js',
            'sendHttp2PushFileLimit' => '10',
            'sendHttp2PushLimitToArea' => '',
            'useFallbackMiddleware' => '1',
            'useReverseUriLengthInPriority' => '1',
            'validFallbackHeaders' => 'Content-Type,Content-Language,Content-Security-Policy,Link,X-SFC-Tags',
            'validHtaccessHeaders' => 'Content-Type,Content-Language,Content-Security-Policy,Link,X-SFC-Tags',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '3ad7f6700c1ff072c645ca97636bfcc3853d5b8856e02df17b586a72c1b85ea9c6feffac41d3e6f61761533f54af0d43',
        'exceptionalErrors' => 4096,
        'features' => [
            'frontend.cache.autoTagging' => true,
            'security.system.enforceAllowedFileExtensions' => true,
        ],
        'sitename' => 'PSA Controls DDEV',
        'systemMaintainers' => [
            1,
        ],
    ],
];
