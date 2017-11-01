<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0538f8d7ccaf1a02e4711119b572f9f5
{
    public static $files = array (
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        '58571171fd5812e6e447dce228f52f4d' => __DIR__ . '/..' . '/laravel/framework/src/Illuminate/Support/helpers.php',
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'Whoops' => 
            array (
                0 => __DIR__ . '/..' . '/filp/whoops/src',
            ),
        ),
        'S' => 
        array (
            'Symfony\\Component\\Translation\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/translation',
            ),
            'Symfony\\Component\\Routing\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/routing',
            ),
            'Symfony\\Component\\Process\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/process',
            ),
            'Symfony\\Component\\HttpKernel\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/http-kernel',
            ),
            'Symfony\\Component\\HttpFoundation\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/http-foundation',
            ),
            'Symfony\\Component\\Finder\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/finder',
            ),
            'Symfony\\Component\\Filesystem\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/filesystem',
            ),
            'Symfony\\Component\\EventDispatcher\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
            ),
            'Symfony\\Component\\DomCrawler\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/dom-crawler',
            ),
            'Symfony\\Component\\Debug\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/debug',
            ),
            'Symfony\\Component\\CssSelector\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/css-selector',
            ),
            'Symfony\\Component\\Console\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/console',
            ),
            'Symfony\\Component\\BrowserKit\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/browser-kit',
            ),
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
            'Predis' => 
            array (
                0 => __DIR__ . '/..' . '/predis/predis/lib',
            ),
            'Patchwork' => 
            array (
                0 => __DIR__ . '/..' . '/patchwork/utf8/class',
            ),
            'PHPParser' => 
            array (
                0 => __DIR__ . '/..' . '/nikic/php-parser/lib',
            ),
        ),
        'N' => 
        array (
            'Normalizer' => 
            array (
                0 => __DIR__ . '/..' . '/patchwork/utf8/class',
            ),
        ),
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
        'I' => 
        array (
            'Illuminate' => 
            array (
                0 => __DIR__ . '/..' . '/laravel/framework/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\DBAL\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/dbal/lib',
            ),
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
            'Doctrine\\Common\\Cache\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/cache/lib',
            ),
            'Doctrine\\Common\\Annotations\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/annotations/lib',
            ),
            'Doctrine\\Common\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/common/lib',
            ),
        ),
        'C' => 
        array (
            'ClassPreloader' => 
            array (
                0 => __DIR__ . '/..' . '/classpreloader/classpreloader/src',
            ),
            'Cartalyst\\Sentry' => 
            array (
                0 => __DIR__ . '/..' . '/cartalyst/sentry/src',
            ),
            'Carbon' => 
            array (
                0 => __DIR__ . '/..' . '/nesbot/carbon',
            ),
        ),
    );

    public static $classMap = array (
        'Admin' => __DIR__ . '/../..' . '/app/models/Admin.php',
        'App\\Controllers\\Admin\\AdminsController' => __DIR__ . '/../..' . '/app/controllers/admin/AdminsController.php',
        'App\\Controllers\\Admin\\AuthController' => __DIR__ . '/../..' . '/app/controllers/admin/AuthController.php',
        'App\\Controllers\\Admin\\DashboardController' => __DIR__ . '/../..' . '/app/controllers/admin/DashboardController.php',
        'App\\Controllers\\Admin\\EmailsController' => __DIR__ . '/../..' . '/app/controllers/admin/EmailsController.php',
        'App\\Controllers\\Admin\\PagesController' => __DIR__ . '/../..' . '/app/controllers/admin/PagesController.php',
        'App\\Controllers\\Admin\\SlidersController' => __DIR__ . '/../..' . '/app/controllers/admin/SlidersController.php',
        'App\\Controllers\\Admin_aero\\CategoryController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/CategoryController.php',
        'App\\Controllers\\Admin_aero\\ContactsController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/ContactsController.php',
        'App\\Controllers\\Admin_aero\\DashboardController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/DashboardController.php',
        'App\\Controllers\\Admin_aero\\EmailsController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/EmailsController.php',
        'App\\Controllers\\Admin_aero\\FormsCategoryController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/FormsCategoryController.php',
        'App\\Controllers\\Admin_aero\\FormsCategoryFormsController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/FormsCategoryFormsController.php',
        'App\\Controllers\\Admin_aero\\LinksController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/LinksController.php',
        'App\\Controllers\\Admin_aero\\PagesController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/PagesController.php',
        'App\\Controllers\\Admin_aero\\ProducersController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/ProducersController.php',
        'App\\Controllers\\Admin_aero\\SlidersController' => __DIR__ . '/../..' . '/app/controllers/admin_aero/SlidersController.php',
        'App\\Controllers\\Admin_cis\\CategoryController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/CategoryController.php',
        'App\\Controllers\\Admin_cis\\ContactsController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/ContactsController.php',
        'App\\Controllers\\Admin_cis\\DashboardController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/DashboardController.php',
        'App\\Controllers\\Admin_cis\\EmailsController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/EmailsController.php',
        'App\\Controllers\\Admin_cis\\FormsCategoryController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/FormsCategoryController.php',
        'App\\Controllers\\Admin_cis\\FormsCategoryFormsController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/FormsCategoryFormsController.php',
        'App\\Controllers\\Admin_cis\\IndustryController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/IndustryController.php',
        'App\\Controllers\\Admin_cis\\LinksController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/LinksController.php',
        'App\\Controllers\\Admin_cis\\MenuController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/MenuController.php',
        'App\\Controllers\\Admin_cis\\PagesController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/PagesController.php',
        'App\\Controllers\\Admin_cis\\ProducersController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/ProducersController.php',
        'App\\Controllers\\Admin_cis\\SlidersController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/SlidersController.php',
        'App\\Controllers\\Admin_cis\\StaffCategoryController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/StaffCategoryController.php',
        'App\\Controllers\\Admin_cis\\StaffController' => __DIR__ . '/../..' . '/app/controllers/admin_cis/StaffController.php',
        'App\\Controllers\\Admin_es\\CategoryController' => __DIR__ . '/../..' . '/app/controllers/admin_es/CategoryController.php',
        'App\\Controllers\\Admin_es\\ContactsController' => __DIR__ . '/../..' . '/app/controllers/admin_es/ContactsController.php',
        'App\\Controllers\\Admin_es\\DashboardController' => __DIR__ . '/../..' . '/app/controllers/admin_es/DashboardController.php',
        'App\\Controllers\\Admin_es\\EmailsController' => __DIR__ . '/../..' . '/app/controllers/admin_es/EmailsController.php',
        'App\\Controllers\\Admin_es\\FormsCategoryController' => __DIR__ . '/../..' . '/app/controllers/admin_es/FormsCategoryController.php',
        'App\\Controllers\\Admin_es\\FormsCategoryFormsController' => __DIR__ . '/../..' . '/app/controllers/admin_es/FormsCategoryFormsController.php',
        'App\\Controllers\\Admin_es\\LinksController' => __DIR__ . '/../..' . '/app/controllers/admin_es/LinksController.php',
        'App\\Controllers\\Admin_es\\PagesController' => __DIR__ . '/../..' . '/app/controllers/admin_es/PagesController.php',
        'App\\Controllers\\Admin_es\\ProducersController' => __DIR__ . '/../..' . '/app/controllers/admin_es/ProducersController.php',
        'App\\Controllers\\Admin_es\\SlidersController' => __DIR__ . '/../..' . '/app/controllers/admin_es/SlidersController.php',
        'App\\Controllers\\Admin_pro\\CategoryController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/CategoryController.php',
        'App\\Controllers\\Admin_pro\\ContactsController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/ContactsController.php',
        'App\\Controllers\\Admin_pro\\DashboardController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/DashboardController.php',
        'App\\Controllers\\Admin_pro\\EmailsController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/EmailsController.php',
        'App\\Controllers\\Admin_pro\\FormsCategoryController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/FormsCategoryController.php',
        'App\\Controllers\\Admin_pro\\FormsCategoryFormsController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/FormsCategoryFormsController.php',
        'App\\Controllers\\Admin_pro\\LinksController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/LinksController.php',
        'App\\Controllers\\Admin_pro\\PagesController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/PagesController.php',
        'App\\Controllers\\Admin_pro\\ProducersController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/ProducersController.php',
        'App\\Controllers\\Admin_pro\\SlidersController' => __DIR__ . '/../..' . '/app/controllers/admin_pro/SlidersController.php',
        'App\\Models\\AdminUser' => __DIR__ . '/../..' . '/app/models/AdminUser.php',
        'App\\Models\\Category' => __DIR__ . '/../..' . '/app/models/Category.php',
        'App\\Models\\CisPage' => __DIR__ . '/../..' . '/app/models/CisPage.php',
        'App\\Models\\CisPageMeta' => __DIR__ . '/../..' . '/app/models/CisPageMeta.php',
        'App\\Models\\Contact' => __DIR__ . '/../..' . '/app/models/Contact.php',
        'App\\Models\\Email' => __DIR__ . '/../..' . '/app/models/Email.php',
        'App\\Models\\Form' => __DIR__ . '/../..' . '/app/models/Form.php',
        'App\\Models\\FormCategory' => __DIR__ . '/../..' . '/app/models/FormCategory.php',
        'App\\Models\\Industry' => __DIR__ . '/../..' . '/app/models/Industry.php',
        'App\\Models\\Link' => __DIR__ . '/../..' . '/app/models/Link.php',
        'App\\Models\\Menu' => __DIR__ . '/../..' . '/app/models/Menu.php',
        'App\\Models\\Page' => __DIR__ . '/../..' . '/app/models/Page.php',
        'App\\Models\\Producer' => __DIR__ . '/../..' . '/app/models/Producer.php',
        'App\\Models\\Slider' => __DIR__ . '/../..' . '/app/models/Slider.php',
        'App\\Models\\Staff' => __DIR__ . '/../..' . '/app/models/Staff.php',
        'App\\Models\\StaffCategory' => __DIR__ . '/../..' . '/app/models/StaffCategory.php',
        'App\\Models\\Template' => __DIR__ . '/../..' . '/app/models/Template.php',
        'App\\Services\\Helpers\\MyHelper' => __DIR__ . '/../..' . '/app/services/helpers/MyHelper.php',
        'App\\Services\\Validators\\AdminValidator' => __DIR__ . '/../..' . '/app/services/validators/AdminValidator.php',
        'App\\Services\\Validators\\CategoryValidator' => __DIR__ . '/../..' . '/app/services/validators/CategoryValidator.php',
        'App\\Services\\Validators\\CisPageValidator' => __DIR__ . '/../..' . '/app/services/validators/CisPageValidator.php',
        'App\\Services\\Validators\\ContactFormValidator' => __DIR__ . '/../..' . '/app/services/validators/ContactFormValidator.php',
        'App\\Services\\Validators\\ContactValidator' => __DIR__ . '/../..' . '/app/services/validators/ContactValidator.php',
        'App\\Services\\Validators\\EmailValidator' => __DIR__ . '/../..' . '/app/services/validators/EmailValidator.php',
        'App\\Services\\Validators\\FormValidator' => __DIR__ . '/../..' . '/app/services/validators/FormValidator.php',
        'App\\Services\\Validators\\IndustryValidator' => __DIR__ . '/../..' . '/app/services/validators/IndustryValidator.php',
        'App\\Services\\Validators\\LinkValidator' => __DIR__ . '/../..' . '/app/services/validators/LinkValidator.php',
        'App\\Services\\Validators\\MenuValidator' => __DIR__ . '/../..' . '/app/services/validators/MenuValidator.php',
        'App\\Services\\Validators\\PageValidator' => __DIR__ . '/../..' . '/app/services/validators/PageValidator.php',
        'App\\Services\\Validators\\ProducerValidator' => __DIR__ . '/../..' . '/app/services/validators/ProducerValidator.php',
        'App\\Services\\Validators\\SliderValidator' => __DIR__ . '/../..' . '/app/services/validators/SliderValidator.php',
        'App\\Services\\Validators\\StaffCategoryValidator' => __DIR__ . '/../..' . '/app/services/validators/StaffCategoryValidator.php',
        'App\\Services\\Validators\\StaffValidator' => __DIR__ . '/../..' . '/app/services/validators/StaffValidator.php',
        'App\\Services\\Validators\\Validator' => __DIR__ . '/../..' . '/app/services/validators/Validator.php',
        'BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController.php',
        'Cartalyst\\Sentry\\Groups\\GroupExistsException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
        'Cartalyst\\Sentry\\Groups\\GroupNotFoundException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
        'Cartalyst\\Sentry\\Groups\\NameRequiredException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
        'Cartalyst\\Sentry\\Throttling\\UserBannedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
        'Cartalyst\\Sentry\\Throttling\\UserSuspendedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\LoginRequiredException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\PasswordRequiredException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserAlreadyActivatedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserExistsException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserNotActivatedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserNotFoundException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\WrongPasswordException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'CreateCategoryTable' => __DIR__ . '/../..' . '/app/database/migrations/2013_08_12_101113_create_category_table.php',
        'CreateContactsTable' => __DIR__ . '/../..' . '/app/database/migrations/2013_08_25_032421_create_contacts_table.php',
        'CreateFormsCategoryTable' => __DIR__ . '/../..' . '/app/database/migrations/2013_08_13_215757_create_forms_category_table.php',
        'CreateFormsTable' => __DIR__ . '/../..' . '/app/database/migrations/2013_08_14_002538_create_forms_table.php',
        'CreateLinksTable' => __DIR__ . '/../..' . '/app/database/migrations/2013_08_25_015414_create_links_table.php',
        'CreatePagesTable' => __DIR__ . '/../..' . '/app/database/migrations/2013_08_12_005247_create_pages_table.php',
        'CreateTable' => __DIR__ . '/../..' . '/app/database/migrations/2013_08_12_014805_create_table.php',
        'DatabaseSeeder' => __DIR__ . '/../..' . '/app/database/seeds/DatabaseSeeder.php',
        'HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'IlluminateQueueClosure' => __DIR__ . '/..' . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
        'MigrationCartalystSentryInstallGroups' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225929_migration_cartalyst_sentry_install_groups.php',
        'MigrationCartalystSentryInstallThrottle' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225988_migration_cartalyst_sentry_install_throttle.php',
        'MigrationCartalystSentryInstallUsers' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225921_migration_cartalyst_sentry_install_users.php',
        'MigrationCartalystSentryInstallUsersGroupsPivot' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
        'TestCase' => __DIR__ . '/../..' . '/app/tests/TestCase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0538f8d7ccaf1a02e4711119b572f9f5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0538f8d7ccaf1a02e4711119b572f9f5::$classMap;

        }, null, ClassLoader::class);
    }
}
