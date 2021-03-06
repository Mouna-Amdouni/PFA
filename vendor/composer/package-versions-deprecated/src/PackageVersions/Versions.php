<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.12.1@b17c5014ef81d212ac539f07a1001832df1b6d3b',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.13.0@67d56d3203b33db29834e6b2fcdbfdc50535d796',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.3.1@a08bc3b4d8567cdff05e89b272ba1e06e9d71c21',
  'doctrine/doctrine-migrations-bundle' => '2.2.2@85f0b847174daf243362c7da80efe1539be64f47',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.3.3@c4c46f7064f6e7795bd7f26549579918b46790fa',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'gedmo/doctrine-extensions' => 'v3.0.4@b0db2c2038ff8476898fe60dd59f92c88c40a385',
  'imagine/imagine' => '1.2.4@d2e18be6e930ca169e4f921ef73ebfc061bf55d8',
  'knplabs/knp-components' => 'v3.0.2@7db2eb032591ded5809455af8a4dfdfda079041c',
  'knplabs/knp-paginator-bundle' => 'v5.4.2@8a7255062dd9f6ff8a3a4712a4b34bdbbc9f31f7',
  'laminas/laminas-code' => '4.2.0@e7e8f8a9c267520051d8026ff1da74823a3d8b97',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'liip/imagine-bundle' => '2.6.0@afa4193c7fde027426ebb19e73878cd026438bbd',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'stof/doctrine-extensions-bundle' => 'v1.5.0@c01e73e49cee5eac3353b6c4ebdbb0a151348c85',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.1.11@54a42aa50f9359d1184bf7e954521b45ca3d5828',
  'symfony/cache' => 'v5.1.11@6def7595e74b4b0a6b515af964792e2d092f056d',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.11@96cc8f6e3b2dccf471b0816df8e421142dc74c18',
  'symfony/console' => 'v5.1.11@d9a267b621c5082e0a6c659d73633b6fd28a8a08',
  'symfony/debug-bundle' => 'v5.1.11@cc01b42c54ca5a3eed3e48f0c2327e1b3d46c16b',
  'symfony/debug-pack' => 'v1.0.9@cfd5093378e9cafe500f05c777a22fe8a64a9342',
  'symfony/dependency-injection' => 'v5.1.11@176e622d476133152a9346b0fbd8fb9b60ff6fb3',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.11@290deda49060e6694f151ac4aa889467935ee3ea',
  'symfony/dotenv' => 'v5.1.11@783f12027c6b40ab0e93d6136d9f642d1d67cd6b',
  'symfony/error-handler' => 'v5.1.11@c2bdf8d374de3f33c525460929f82a9902f6e1c5',
  'symfony/event-dispatcher' => 'v5.1.11@c00f3aae24577a991ae97d34c7033b2e84f1cfa0',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/filesystem' => 'v5.1.11@262d033b57c73e8b59cd6e68a45c528318b15038',
  'symfony/finder' => 'v5.1.11@196f45723b5e618bf0e23b97e96d11652696ea9e',
  'symfony/flex' => 'v1.12.2@e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
  'symfony/form' => 'v5.1.11@b794bed839f11bcee9a9f30daa5cb88d311dd409',
  'symfony/framework-bundle' => 'v5.1.11@b40931adcd8386901a65b472d8ba9f34cac80070',
  'symfony/http-client' => 'v5.1.11@82f87fa4b738977937803ab8d52948d490047564',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.1.11@1c1920364e205f9aab12457e52b884ebd198b885',
  'symfony/http-kernel' => 'v5.1.11@1b57aaf3215c4313fec1409afdb5046dcb201d17',
  'symfony/intl' => 'v5.1.11@930f17689729cc47d2ce18be21ed403bcbeeb6a9',
  'symfony/mailer' => 'v5.1.11@3c7ab7a402acdb453dcdd6e0b2982caacfcc9b9f',
  'symfony/mime' => 'v5.1.11@d7d899822da1fa89bcf658e8e8d836f5578e6f7a',
  'symfony/monolog-bridge' => 'v5.1.11@ce37f72dd09e38d65dd6d57a0c17e874c4c689a5',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/options-resolver' => 'v5.1.11@c67e38bab7b561a65e34162a48ae587750f7ae0e',
  'symfony/orm-pack' => 'v1.2.0@21ac491414b5815e5ebb7425908c1d1568d2e775',
  'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v5.1.11@d279ae7f2d6e0e4e45f66de7d76006246ae00e4d',
  'symfony/profiler-pack' => 'v1.0.5@29ec66471082b4eb068db11eb4f0a48c277653f7',
  'symfony/property-access' => 'v5.1.11@d99f6d52333d0798a3b5bb3a81bae789e96bae93',
  'symfony/property-info' => 'v5.1.11@d4981d21891987fce806fc94e41312fe9c131747',
  'symfony/routing' => 'v5.1.11@e7f71f5da6af8b238f2257670fd6aa4ae6263826',
  'symfony/security-bundle' => 'v5.1.11@911f6b515d515c12a4aea749b6ac688050b6a85c',
  'symfony/security-core' => 'v5.1.11@33a6d376ef0502f18bc498a076590372685f6e89',
  'symfony/security-csrf' => 'v5.1.11@e22ef49d5d3773014942f3dfe301b168a4a833dc',
  'symfony/security-guard' => 'v5.1.11@23e2b838d255f2695a143cf4ad138c58c4dc2918',
  'symfony/security-http' => 'v5.1.11@c3a869cc01640d14ebbbfd03046f494103ffb2fa',
  'symfony/serializer' => 'v5.1.11@76404a1e1a4eaefe94ce12740af1884149d47d96',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.11@40e7945f2d0f72427eb71b54c26d93d08ef88793',
  'symfony/string' => 'v5.1.11@83bbb92d34881744b8021452a76532b28283dbfb',
  'symfony/translation' => 'v5.1.11@b16d3e4b2d3f78fb2444aa8d19019f033e55ec56',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.1.11@4421afc6e1a0ef5e7cd9b32359617b98069d1666',
  'symfony/twig-bundle' => 'v5.1.11@88e5d5232f11f6db6610d5f4c2380f26e02ce92e',
  'symfony/twig-pack' => 'v1.0.1@08a73e833e07921c464336deb7630f93e85ef930',
  'symfony/validator' => 'v5.1.11@c651438e159bdcbe8354320ab627d33fa7e288ff',
  'symfony/var-dumper' => 'v5.1.11@cee600a1248b423330375c869812bdd61a085cd0',
  'symfony/var-exporter' => 'v5.1.11@5aed4875ab514c8cb9b6ff4772baa25fa4c10307',
  'symfony/web-profiler-bundle' => 'v5.1.11@9a906203efff7df59d1e0185f7aa05e631eb4ef7',
  'symfony/yaml' => 'v5.1.11@6bb8b36c6dea8100268512bf46e858c8eb5c545e',
  'symfonycasts/reset-password-bundle' => 'v1.7.0@368a4f64fc4f8174234fc91f9b22d5016257211b',
  'twig/extra-bundle' => 'v3.3.0@e2d27a86c3f47859eb07808fa7c8679d30fcbdde',
  'twig/twig' => 'v3.3.0@1f3b7e2c06cc05d42936a8ad508ff1db7975cdc5',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'symfony/maker-bundle' => 'v1.30.2@a395a85aa4ded6c1fa3da118d60329b64b6c2acd',
  'paragonie/random_compat' => '2.*@284e8264862938981ad1894362f37a40df648572',
  'symfony/polyfill-ctype' => '*@284e8264862938981ad1894362f37a40df648572',
  'symfony/polyfill-iconv' => '*@284e8264862938981ad1894362f37a40df648572',
  'symfony/polyfill-php72' => '*@284e8264862938981ad1894362f37a40df648572',
  'symfony/polyfill-php71' => '*@284e8264862938981ad1894362f37a40df648572',
  'symfony/polyfill-php70' => '*@284e8264862938981ad1894362f37a40df648572',
  'symfony/polyfill-php56' => '*@284e8264862938981ad1894362f37a40df648572',
  '__root__' => 'dev-main@284e8264862938981ad1894362f37a40df648572',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
