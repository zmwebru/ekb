<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite61c1deb69fd1bd657e27d899f1a382e
{
    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yupe\\' => 5,
        ),
        's' => 
        array (
            'samdark\\sitemap\\' => 16,
        ),
        'a' => 
        array (
            'application\\' => 12,
        ),
        'W' => 
        array (
            'Wikimedia\\Composer\\' => 19,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yupe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/protected/modules/yupe',
        ),
        'samdark\\sitemap\\' => 
        array (
            0 => __DIR__ . '/..' . '/samdark/sitemap',
        ),
        'application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/protected',
        ),
        'Wikimedia\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'd' => 
        array (
            'dosamigos\\yii\\helpers\\' => 
            array (
                0 => __DIR__ . '/..' . '/2amigos/transliterator-helper/src',
            ),
        ),
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'I' => 
        array (
            'Imagine' => 
            array (
                0 => __DIR__ . '/..' . '/imagine/imagine/lib',
            ),
        ),
    );

    public static $classMap = array (
        'CustomFacebookService' => __DIR__ . '/..' . '/nodge/yii-eauth/custom_services/CustomFacebookService.php',
        'CustomGitHubOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/custom_services/CustomGitHubOAuthService.php',
        'CustomGoogleService' => __DIR__ . '/..' . '/nodge/yii-eauth/custom_services/CustomGoogleService.php',
        'CustomMailruService' => __DIR__ . '/..' . '/nodge/yii-eauth/custom_services/CustomMailruService.php',
        'CustomOdnoklassnikiService' => __DIR__ . '/..' . '/nodge/yii-eauth/custom_services/CustomOdnoklassnikiService.php',
        'CustomTwitterService' => __DIR__ . '/..' . '/nodge/yii-eauth/custom_services/CustomTwitterService.php',
        'CustomVKontakteService' => __DIR__ . '/..' . '/nodge/yii-eauth/custom_services/CustomVKontakteService.php',
        'CustomYandexOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/custom_services/CustomYandexOAuthService.php',
        'DropboxOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/DropboxOAuthService.php',
        'EAuth' => __DIR__ . '/..' . '/nodge/yii-eauth/EAuth.php',
        'EAuthException' => __DIR__ . '/..' . '/nodge/yii-eauth/EAuth.php',
        'EAuthRedirectWidget' => __DIR__ . '/..' . '/nodge/yii-eauth/EAuthRedirectWidget.php',
        'EAuthServiceBase' => __DIR__ . '/..' . '/nodge/yii-eauth/EAuthServiceBase.php',
        'EAuthUserIdentity' => __DIR__ . '/..' . '/nodge/yii-eauth/EAuthUserIdentity.php',
        'EAuthWidget' => __DIR__ . '/..' . '/nodge/yii-eauth/EAuthWidget.php',
        'EOAuth2Service' => __DIR__ . '/..' . '/nodge/yii-eauth/EOAuth2Service.php',
        'EOAuthComponent' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/EOAuthComponent.php',
        'EOAuthProvider' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/EOAuthProvider.php',
        'EOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/EOAuthService.php',
        'EOAuthUserIdentity' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/EOAuthUserIdentity.php',
        'EOAuthUtils' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/EOAuthUtils.php',
        'EOpenIDService' => __DIR__ . '/..' . '/nodge/yii-eauth/EOpenIDService.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'EveOnlineOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/EveOnlineOAuthService.php',
        'FacebookOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/FacebookOAuthService.php',
        'GitHubOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/GitHubOAuthService.php',
        'GoogleOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/GoogleOAuthService.php',
        'IAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/IAuthService.php',
        'LightOpenID' => __DIR__ . '/..' . '/itmages/lightopenid/src/LightOpenID.php',
        'LinkedinOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/LinkedinOAuthService.php',
        'LiveOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/LiveOAuthService.php',
        'MailruOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/MailruOAuthService.php',
        'MoikrugOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/MoikrugOAuthService.php',
        'NestedSetBehavior' => __DIR__ . '/..' . '/yiiext/nested-set-behavior/NestedSetBehavior.php',
        'OAuthConsumer' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthConsumer.php',
        'OAuthDataStore' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthDataStore.php',
        'OAuthException' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthException.php',
        'OAuthRequest' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthRequest.php',
        'OAuthServer' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthServer.php',
        'OAuthSignatureMethod' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthSignatureMethod.php',
        'OAuthSignatureMethod_HMAC_SHA1' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthSignatureMethod_HMAC_SHA1.php',
        'OAuthSignatureMethod_PLAINTEXT' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthSignatureMethod_PLAINTEXT.php',
        'OAuthSignatureMethod_RSA_SHA1' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthSignatureMethod_RSA_SHA1.php',
        'OAuthToken' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthToken.php',
        'OAuthUtil' => __DIR__ . '/..' . '/itmages/yii-eoauth/src/lib/OAuthUtil.php',
        'OdnoklassnikiOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/OdnoklassnikiOAuthService.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'SlackOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/SlackOAuthService.php',
        'SteamOpenIDService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/SteamOpenIDService.php',
        'TwitterOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/TwitterOAuthService.php',
        'VKontakteOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/VKontakteOAuthService.php',
        'WargamingOpenIDService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/WargamingOpenIDService.php',
        'YahooOpenIDService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/YahooOpenIDService.php',
        'YandexOAuthService' => __DIR__ . '/..' . '/nodge/yii-eauth/services/YandexOAuthService.php',
        'Yii' => __DIR__ . '/..' . '/yiisoft/yii/framework/yii.php',
        'YiiBase' => __DIR__ . '/..' . '/yiisoft/yii/framework/YiiBase.php',
        'loid' => __DIR__ . '/..' . '/itmages/lightopenid/src/loid.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite61c1deb69fd1bd657e27d899f1a382e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite61c1deb69fd1bd657e27d899f1a382e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite61c1deb69fd1bd657e27d899f1a382e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite61c1deb69fd1bd657e27d899f1a382e::$classMap;

        }, null, ClassLoader::class);
    }
}