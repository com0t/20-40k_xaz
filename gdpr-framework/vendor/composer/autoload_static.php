<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fcc4a44d7e9d84978c33c3077ec8efb
{
    public static $files = array (
        '60799491728b879e74601d83e38b2cad' => __DIR__ . '/..' . '/illuminate/collections/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Data443\\gdpr\\framework\\Psr\\SimpleCache\\' => 39,
            'Data443\\gdpr\\framework\\Psr\\Container\\' => 37,
            'Data443\\gdpr\\framework\\Illuminate\\Support\\' => 42,
            'Data443\\gdpr\\framework\\Illuminate\\Contracts\\' => 44,
            'Data443\\gdpr\\framework\\Illuminate\\Container\\' => 44,
            'Data443\\gdpr\\framework\\Illuminate\\Config\\' => 41,
        ),
        'C' => 
        array (
            'Codelight\\GDPR\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Data443\\gdpr\\framework\\Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Data443\\gdpr\\framework\\Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Data443\\gdpr\\framework\\Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/collections',
            1 => __DIR__ . '/..' . '/illuminate/macroable',
        ),
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Data443\\gdpr\\framework\\Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Data443\\gdpr\\framework\\Illuminate\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/config',
        ),
        'Codelight\\GDPR\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Codelight\\GDPR\\Admin\\AdminError' => __DIR__ . '/../..' . '/src/Admin/AdminError.php',
        'Codelight\\GDPR\\Admin\\AdminHelper' => __DIR__ . '/../..' . '/src/Admin/AdminHelper.php',
        'Codelight\\GDPR\\Admin\\AdminNotice' => __DIR__ . '/../..' . '/src/Admin/AdminNotice.php',
        'Codelight\\GDPR\\Admin\\AdminPrivacySafe' => __DIR__ . '/../..' . '/src/Admin/AdminPrivacySafe.php',
        'Codelight\\GDPR\\Admin\\AdminTab' => __DIR__ . '/../..' . '/src/Admin/AdminTab.php',
        'Codelight\\GDPR\\Admin\\AdminTabGeneral' => __DIR__ . '/../..' . '/src/Admin/AdminTabGeneral.php',
        'Codelight\\GDPR\\Admin\\AdminTabInterface' => __DIR__ . '/../..' . '/src/Admin/AdminTabInterface.php',
        'Codelight\\GDPR\\Admin\\Modal' => __DIR__ . '/../..' . '/src/Admin/Modal.php',
        'Codelight\\GDPR\\Admin\\WordpressAdmin' => __DIR__ . '/../..' . '/src/Admin/WordpressAdmin.php',
        'Codelight\\GDPR\\Admin\\WordpressAdminPage' => __DIR__ . '/../..' . '/src/Admin/WordpressAdminPage.php',
        'Codelight\\GDPR\\Components\\AdvancedIntegration\\AdminTabAdvancedIntegration' => __DIR__ . '/../..' . '/src/Components/AdvancedIntegration/AdminTabAdvancedIntegration.php',
        'Codelight\\GDPR\\Components\\AdvancedIntegration\\AdvancedIntegration' => __DIR__ . '/../..' . '/src/Components/AdvancedIntegration/AdvancedIntegration.php',
        'Codelight\\GDPR\\Components\\Consent\\AdminTabConsent' => __DIR__ . '/../..' . '/src/Components/Consent/AdminTabConsent.php',
        'Codelight\\GDPR\\Components\\Consent\\ConsentAdmin' => __DIR__ . '/../..' . '/src/Components/Consent/ConsentAdmin.php',
        'Codelight\\GDPR\\Components\\Consent\\ConsentManager' => __DIR__ . '/../..' . '/src/Components/Consent/ConsentManager.php',
        'Codelight\\GDPR\\Components\\Consent\\UserConsentModel' => __DIR__ . '/../..' . '/src/Components/Consent/UserConsentModel.php',
        'Codelight\\GDPR\\Components\\CookiePopup\\AdminTabCookiePopup' => __DIR__ . '/../..' . '/src/Components/CookiePopup/AdminTabCookiePopup.php',
        'Codelight\\GDPR\\Components\\CookiePopup\\CookiePopup' => __DIR__ . '/../..' . '/src/Components/CookiePopup/CookiePopup.php',
        'Codelight\\GDPR\\Components\\DoNotSell\\AdminTabDoNotSell' => __DIR__ . '/../..' . '/src/Components/DoNotSell/AdminTabDoNotSell.php',
        'Codelight\\GDPR\\Components\\DoNotSell\\DoNotSell' => __DIR__ . '/../..' . '/src/Components/DoNotSell/DoNotSell.php',
        'Codelight\\GDPR\\Components\\PrivacyManager\\AdminTabPrivacyManager' => __DIR__ . '/../..' . '/src/Components/PrivacyManager/AdminTabPrivacyManager.php',
        'Codelight\\GDPR\\Components\\PrivacyManager\\PrivacyManager' => __DIR__ . '/../..' . '/src/Components/PrivacyManager/PrivacyManager.php',
        'Codelight\\GDPR\\Components\\PrivacyPolicy\\AdminTabPrivacyPolicy' => __DIR__ . '/../..' . '/src/Components/PrivacyPolicy/AdminTabPrivacyPolicy.php',
        'Codelight\\GDPR\\Components\\PrivacyPolicy\\PolicyGenerator' => __DIR__ . '/../..' . '/src/Components/PrivacyPolicy/PolicyGenerator.php',
        'Codelight\\GDPR\\Components\\PrivacyPolicy\\PrivacyPolicy' => __DIR__ . '/../..' . '/src/Components/PrivacyPolicy/PrivacyPolicy.php',
        'Codelight\\GDPR\\Components\\PrivacySafe\\AdminTabPrivacySafe' => __DIR__ . '/../..' . '/src/Components/PrivacySafe/AdminTabPrivacySafe.php',
        'Codelight\\GDPR\\Components\\PrivacySafe\\PrivacySafe' => __DIR__ . '/../..' . '/src/Components/PrivacySafe/PrivacySafe.php',
        'Codelight\\GDPR\\Components\\PrivacyToolsPage\\PrivacyToolsPage' => __DIR__ . '/../..' . '/src/Components/PrivacyToolsPage/PrivacyToolsPage.php',
        'Codelight\\GDPR\\Components\\PrivacyToolsPage\\PrivacyToolsPageController' => __DIR__ . '/../..' . '/src/Components/PrivacyToolsPage/PrivacyToolsPageController.php',
        'Codelight\\GDPR\\Components\\PrivacyToolsPage\\PrivacyToolsPageShortcode' => __DIR__ . '/../..' . '/src/Components/PrivacyToolsPage/PrivacyToolsPageShortcode.php',
        'Codelight\\GDPR\\Components\\Support\\AdminTabSupport' => __DIR__ . '/../..' . '/src/Components/Support/AdminTabSupport.php',
        'Codelight\\GDPR\\Components\\Support\\Support' => __DIR__ . '/../..' . '/src/Components/Support/Support.php',
        'Codelight\\GDPR\\Components\\Themes\\Themes' => __DIR__ . '/../..' . '/src/Components/Themes/Themes.php',
        'Codelight\\GDPR\\Components\\WordpressComments\\WordpressComments' => __DIR__ . '/../..' . '/src/Components/WordpressComments/WordpressComments.php',
        'Codelight\\GDPR\\Components\\WordpressUser\\Controllers\\DashboardDataPageController' => __DIR__ . '/../..' . '/src/Components/WordpressUser/Controllers/DashboardDataPageController.php',
        'Codelight\\GDPR\\Components\\WordpressUser\\Controllers\\DashboardProfilePageController' => __DIR__ . '/../..' . '/src/Components/WordpressUser/Controllers/DashboardProfilePageController.php',
        'Codelight\\GDPR\\Components\\WordpressUser\\DataManager' => __DIR__ . '/../..' . '/src/Components/WordpressUser/DataManager.php',
        'Codelight\\GDPR\\Components\\WordpressUser\\RegistrationForm' => __DIR__ . '/../..' . '/src/Components/WordpressUser/RegistrationForm.php',
        'Codelight\\GDPR\\Components\\WordpressUser\\WordpressUser' => __DIR__ . '/../..' . '/src/Components/WordpressUser/WordpressUser.php',
        'Codelight\\GDPR\\Config' => __DIR__ . '/../..' . '/src/Config.php',
        'Codelight\\GDPR\\Container' => __DIR__ . '/../..' . '/src/Container.php',
        'Codelight\\GDPR\\DataSubject\\AdminTabDataSubject' => __DIR__ . '/../..' . '/src/DataSubject/AdminTabDataSubject.php',
        'Codelight\\GDPR\\DataSubject\\DataExporter' => __DIR__ . '/../..' . '/src/DataSubject/DataExporter.php',
        'Codelight\\GDPR\\DataSubject\\DataRepository' => __DIR__ . '/../..' . '/src/DataSubject/DataRepository.php',
        'Codelight\\GDPR\\DataSubject\\DataSubject' => __DIR__ . '/../..' . '/src/DataSubject/DataSubject.php',
        'Codelight\\GDPR\\DataSubject\\DataSubjectAdmin' => __DIR__ . '/../..' . '/src/DataSubject/DataSubjectAdmin.php',
        'Codelight\\GDPR\\DataSubject\\DataSubjectAuthenticator' => __DIR__ . '/../..' . '/src/DataSubject/DataSubjectAuthenticator.php',
        'Codelight\\GDPR\\DataSubject\\DataSubjectIdentificator' => __DIR__ . '/../..' . '/src/DataSubject/DataSubjectIdentificator.php',
        'Codelight\\GDPR\\DataSubject\\DataSubjectManager' => __DIR__ . '/../..' . '/src/DataSubject/DataSubjectManager.php',
        'Codelight\\GDPR\\Database\\WordpressDatabase' => __DIR__ . '/../..' . '/src/Database/WordpressDatabase.php',
        'Codelight\\GDPR\\Helpers' => __DIR__ . '/../..' . '/src/Helpers.php',
        'Codelight\\GDPR\\Installer\\AdminInstallerNotice' => __DIR__ . '/../..' . '/src/Installer/AdminInstallerNotice.php',
        'Codelight\\GDPR\\Installer\\Installer' => __DIR__ . '/../..' . '/src/Installer/Installer.php',
        'Codelight\\GDPR\\Installer\\InstallerRouter' => __DIR__ . '/../..' . '/src/Installer/InstallerRouter.php',
        'Codelight\\GDPR\\Installer\\InstallerStep' => __DIR__ . '/../..' . '/src/Installer/InstallerStep.php',
        'Codelight\\GDPR\\Installer\\InstallerStepInterface' => __DIR__ . '/../..' . '/src/Installer/InstallerStepInterface.php',
        'Codelight\\GDPR\\Installer\\InstallerWizard' => __DIR__ . '/../..' . '/src/Installer/InstallerWizard.php',
        'Codelight\\GDPR\\Installer\\Steps\\ConfigurationPages' => __DIR__ . '/../..' . '/src/Installer/Steps/ConfigurationPages.php',
        'Codelight\\GDPR\\Installer\\Steps\\ConfigurationSettings' => __DIR__ . '/../..' . '/src/Installer/Steps/ConfigurationSettings.php',
        'Codelight\\GDPR\\Installer\\Steps\\Consent' => __DIR__ . '/../..' . '/src/Installer/Steps/Consent.php',
        'Codelight\\GDPR\\Installer\\Steps\\Disclaimer' => __DIR__ . '/../..' . '/src/Installer/Steps/Disclaimer.php',
        'Codelight\\GDPR\\Installer\\Steps\\Finish' => __DIR__ . '/../..' . '/src/Installer/Steps/Finish.php',
        'Codelight\\GDPR\\Installer\\Steps\\Integrations' => __DIR__ . '/../..' . '/src/Installer/Steps/Integrations.php',
        'Codelight\\GDPR\\Installer\\Steps\\PolicyContents' => __DIR__ . '/../..' . '/src/Installer/Steps/PolicyContents.php',
        'Codelight\\GDPR\\Installer\\Steps\\PolicySettings' => __DIR__ . '/../..' . '/src/Installer/Steps/PolicySettings.php',
        'Codelight\\GDPR\\Installer\\Steps\\PrivacySafe' => __DIR__ . '/../..' . '/src/Installer/Steps/PrivacySafe.php',
        'Codelight\\GDPR\\Installer\\Steps\\Welcome' => __DIR__ . '/../..' . '/src/Installer/Steps/Welcome.php',
        'Codelight\\GDPR\\Modules\\ContactForm7\\ContactForm7' => __DIR__ . '/../..' . '/src/Modules/ContactForm7/ContactForm7.php',
        'Codelight\\GDPR\\Modules\\ContactForm7\\Flamingo' => __DIR__ . '/../..' . '/src/Modules/ContactForm7/Flamingo.php',
        'Codelight\\GDPR\\Modules\\EddGdpr\\EddGdpr' => __DIR__ . '/../..' . '/src/Modules/EddGdpr/EddGdpr.php',
        'Codelight\\GDPR\\Modules\\NewsletterGdpr\\NewsletterGdpr' => __DIR__ . '/../..' . '/src/Modules/NewsletterGdpr/NewsletterGdpr.php',
        'Codelight\\GDPR\\Modules\\WPML\\WPML' => __DIR__ . '/../..' . '/src/Modules/WPML/WPML.php',
        'Codelight\\GDPR\\Modules\\WooCommerceGdpr\\WooCommerceGdpr' => __DIR__ . '/../..' . '/src/Modules/WooCommerceGdpr/WooCommerceGdpr.php',
        'Codelight\\GDPR\\Options\\Options' => __DIR__ . '/../..' . '/src/Options/Options.php',
        'Codelight\\GDPR\\Options\\OptionsBase' => __DIR__ . '/../..' . '/src/Options/OptionsBase.php',
        'Codelight\\GDPR\\Router' => __DIR__ . '/../..' . '/src/Router.php',
        'Codelight\\GDPR\\Setup' => __DIR__ . '/../..' . '/src/Setup.php',
        'Codelight\\GDPR\\SetupAdmin' => __DIR__ . '/../..' . '/src/SetupAdmin.php',
        'Codelight\\GDPR\\Updater\\Updater' => __DIR__ . '/../..' . '/src/Updater/Updater.php',
        'Codelight\\GDPR\\View' => __DIR__ . '/../..' . '/src/View.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Data443\\gdpr\\framework\\Illuminate\\Config\\Repository' => __DIR__ . '/..' . '/illuminate/config/Repository.php',
        'Data443\\gdpr\\framework\\Illuminate\\Container\\BoundMethod' => __DIR__ . '/..' . '/illuminate/container/BoundMethod.php',
        'Data443\\gdpr\\framework\\Illuminate\\Container\\Container' => __DIR__ . '/..' . '/illuminate/container/Container.php',
        'Data443\\gdpr\\framework\\Illuminate\\Container\\ContextualBindingBuilder' => __DIR__ . '/..' . '/illuminate/container/ContextualBindingBuilder.php',
        'Data443\\gdpr\\framework\\Illuminate\\Container\\EntryNotFoundException' => __DIR__ . '/..' . '/illuminate/container/EntryNotFoundException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Container\\RewindableGenerator' => __DIR__ . '/..' . '/illuminate/container/RewindableGenerator.php',
        'Data443\\gdpr\\framework\\Illuminate\\Container\\Util' => __DIR__ . '/..' . '/illuminate/container/Util.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\Access\\Authorizable' => __DIR__ . '/..' . '/illuminate/contracts/Auth/Access/Authorizable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\Access\\Gate' => __DIR__ . '/..' . '/illuminate/contracts/Auth/Access/Gate.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\Authenticatable' => __DIR__ . '/..' . '/illuminate/contracts/Auth/Authenticatable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\CanResetPassword' => __DIR__ . '/..' . '/illuminate/contracts/Auth/CanResetPassword.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Auth/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\Guard' => __DIR__ . '/..' . '/illuminate/contracts/Auth/Guard.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\Middleware\\AuthenticatesRequests' => __DIR__ . '/..' . '/illuminate/contracts/Auth/Middleware/AuthenticatesRequests.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\MustVerifyEmail' => __DIR__ . '/..' . '/illuminate/contracts/Auth/MustVerifyEmail.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\PasswordBroker' => __DIR__ . '/..' . '/illuminate/contracts/Auth/PasswordBroker.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\PasswordBrokerFactory' => __DIR__ . '/..' . '/illuminate/contracts/Auth/PasswordBrokerFactory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\StatefulGuard' => __DIR__ . '/..' . '/illuminate/contracts/Auth/StatefulGuard.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\SupportsBasicAuth' => __DIR__ . '/..' . '/illuminate/contracts/Auth/SupportsBasicAuth.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Auth\\UserProvider' => __DIR__ . '/..' . '/illuminate/contracts/Auth/UserProvider.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Broadcasting\\Broadcaster' => __DIR__ . '/..' . '/illuminate/contracts/Broadcasting/Broadcaster.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Broadcasting\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Broadcasting/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Broadcasting\\HasBroadcastChannel' => __DIR__ . '/..' . '/illuminate/contracts/Broadcasting/HasBroadcastChannel.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast' => __DIR__ . '/..' . '/illuminate/contracts/Broadcasting/ShouldBroadcast.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Broadcasting\\ShouldBroadcastNow' => __DIR__ . '/..' . '/illuminate/contracts/Broadcasting/ShouldBroadcastNow.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Bus\\Dispatcher' => __DIR__ . '/..' . '/illuminate/contracts/Bus/Dispatcher.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Bus\\QueueingDispatcher' => __DIR__ . '/..' . '/illuminate/contracts/Bus/QueueingDispatcher.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Cache\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Cache/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Cache\\Lock' => __DIR__ . '/..' . '/illuminate/contracts/Cache/Lock.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Cache\\LockProvider' => __DIR__ . '/..' . '/illuminate/contracts/Cache/LockProvider.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Cache\\LockTimeoutException' => __DIR__ . '/..' . '/illuminate/contracts/Cache/LockTimeoutException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Cache\\Repository' => __DIR__ . '/..' . '/illuminate/contracts/Cache/Repository.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Cache\\Store' => __DIR__ . '/..' . '/illuminate/contracts/Cache/Store.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Config\\Repository' => __DIR__ . '/..' . '/illuminate/contracts/Config/Repository.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Console\\Application' => __DIR__ . '/..' . '/illuminate/contracts/Console/Application.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Console\\Kernel' => __DIR__ . '/..' . '/illuminate/contracts/Console/Kernel.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Container\\BindingResolutionException' => __DIR__ . '/..' . '/illuminate/contracts/Container/BindingResolutionException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Container\\CircularDependencyException' => __DIR__ . '/..' . '/illuminate/contracts/Container/CircularDependencyException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Container\\Container' => __DIR__ . '/..' . '/illuminate/contracts/Container/Container.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Container\\ContextualBindingBuilder' => __DIR__ . '/..' . '/illuminate/contracts/Container/ContextualBindingBuilder.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Cookie\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Cookie/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Cookie\\QueueingFactory' => __DIR__ . '/..' . '/illuminate/contracts/Cookie/QueueingFactory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Database\\Eloquent\\Castable' => __DIR__ . '/..' . '/illuminate/contracts/Database/Eloquent/Castable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Database\\Eloquent\\CastsAttributes' => __DIR__ . '/..' . '/illuminate/contracts/Database/Eloquent/CastsAttributes.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Database\\Eloquent\\CastsInboundAttributes' => __DIR__ . '/..' . '/illuminate/contracts/Database/Eloquent/CastsInboundAttributes.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Database\\Eloquent\\DeviatesCastableAttributes' => __DIR__ . '/..' . '/illuminate/contracts/Database/Eloquent/DeviatesCastableAttributes.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Database\\Eloquent\\SerializesCastableAttributes' => __DIR__ . '/..' . '/illuminate/contracts/Database/Eloquent/SerializesCastableAttributes.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Database\\Eloquent\\SupportsPartialRelations' => __DIR__ . '/..' . '/illuminate/contracts/Database/Eloquent/SupportsPartialRelations.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Database\\Events\\MigrationEvent' => __DIR__ . '/..' . '/illuminate/contracts/Database/Events/MigrationEvent.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Database\\ModelIdentifier' => __DIR__ . '/..' . '/illuminate/contracts/Database/ModelIdentifier.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Debug\\ExceptionHandler' => __DIR__ . '/..' . '/illuminate/contracts/Debug/ExceptionHandler.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Encryption\\DecryptException' => __DIR__ . '/..' . '/illuminate/contracts/Encryption/DecryptException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Encryption\\EncryptException' => __DIR__ . '/..' . '/illuminate/contracts/Encryption/EncryptException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Encryption\\Encrypter' => __DIR__ . '/..' . '/illuminate/contracts/Encryption/Encrypter.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Encryption\\StringEncrypter' => __DIR__ . '/..' . '/illuminate/contracts/Encryption/StringEncrypter.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Events\\Dispatcher' => __DIR__ . '/..' . '/illuminate/contracts/Events/Dispatcher.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Filesystem\\Cloud' => __DIR__ . '/..' . '/illuminate/contracts/Filesystem/Cloud.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Filesystem\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Filesystem/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Filesystem\\FileExistsException' => __DIR__ . '/..' . '/illuminate/contracts/Filesystem/FileExistsException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Filesystem\\FileNotFoundException' => __DIR__ . '/..' . '/illuminate/contracts/Filesystem/FileNotFoundException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Filesystem\\Filesystem' => __DIR__ . '/..' . '/illuminate/contracts/Filesystem/Filesystem.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Filesystem\\LockTimeoutException' => __DIR__ . '/..' . '/illuminate/contracts/Filesystem/LockTimeoutException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Foundation\\Application' => __DIR__ . '/..' . '/illuminate/contracts/Foundation/Application.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Foundation\\CachesConfiguration' => __DIR__ . '/..' . '/illuminate/contracts/Foundation/CachesConfiguration.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Foundation\\CachesRoutes' => __DIR__ . '/..' . '/illuminate/contracts/Foundation/CachesRoutes.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Hashing\\Hasher' => __DIR__ . '/..' . '/illuminate/contracts/Hashing/Hasher.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Http\\Kernel' => __DIR__ . '/..' . '/illuminate/contracts/Http/Kernel.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Mail\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Mail/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Mail\\MailQueue' => __DIR__ . '/..' . '/illuminate/contracts/Mail/MailQueue.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Mail\\Mailable' => __DIR__ . '/..' . '/illuminate/contracts/Mail/Mailable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Mail\\Mailer' => __DIR__ . '/..' . '/illuminate/contracts/Mail/Mailer.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Notifications\\Dispatcher' => __DIR__ . '/..' . '/illuminate/contracts/Notifications/Dispatcher.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Notifications\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Notifications/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Pagination\\CursorPaginator' => __DIR__ . '/..' . '/illuminate/contracts/Pagination/CursorPaginator.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Pagination\\LengthAwarePaginator' => __DIR__ . '/..' . '/illuminate/contracts/Pagination/LengthAwarePaginator.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Pagination\\Paginator' => __DIR__ . '/..' . '/illuminate/contracts/Pagination/Paginator.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Pipeline\\Hub' => __DIR__ . '/..' . '/illuminate/contracts/Pipeline/Hub.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Pipeline\\Pipeline' => __DIR__ . '/..' . '/illuminate/contracts/Pipeline/Pipeline.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\ClearableQueue' => __DIR__ . '/..' . '/illuminate/contracts/Queue/ClearableQueue.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\EntityNotFoundException' => __DIR__ . '/..' . '/illuminate/contracts/Queue/EntityNotFoundException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\EntityResolver' => __DIR__ . '/..' . '/illuminate/contracts/Queue/EntityResolver.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Queue/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\Job' => __DIR__ . '/..' . '/illuminate/contracts/Queue/Job.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\Monitor' => __DIR__ . '/..' . '/illuminate/contracts/Queue/Monitor.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\Queue' => __DIR__ . '/..' . '/illuminate/contracts/Queue/Queue.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\QueueableCollection' => __DIR__ . '/..' . '/illuminate/contracts/Queue/QueueableCollection.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\QueueableEntity' => __DIR__ . '/..' . '/illuminate/contracts/Queue/QueueableEntity.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\ShouldBeEncrypted' => __DIR__ . '/..' . '/illuminate/contracts/Queue/ShouldBeEncrypted.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\ShouldBeUnique' => __DIR__ . '/..' . '/illuminate/contracts/Queue/ShouldBeUnique.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\ShouldBeUniqueUntilProcessing' => __DIR__ . '/..' . '/illuminate/contracts/Queue/ShouldBeUniqueUntilProcessing.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Queue\\ShouldQueue' => __DIR__ . '/..' . '/illuminate/contracts/Queue/ShouldQueue.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Redis\\Connection' => __DIR__ . '/..' . '/illuminate/contracts/Redis/Connection.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Redis\\Connector' => __DIR__ . '/..' . '/illuminate/contracts/Redis/Connector.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Redis\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Redis/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Redis\\LimiterTimeoutException' => __DIR__ . '/..' . '/illuminate/contracts/Redis/LimiterTimeoutException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Routing\\BindingRegistrar' => __DIR__ . '/..' . '/illuminate/contracts/Routing/BindingRegistrar.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Routing\\Registrar' => __DIR__ . '/..' . '/illuminate/contracts/Routing/Registrar.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Routing\\ResponseFactory' => __DIR__ . '/..' . '/illuminate/contracts/Routing/ResponseFactory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Routing\\UrlGenerator' => __DIR__ . '/..' . '/illuminate/contracts/Routing/UrlGenerator.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Routing\\UrlRoutable' => __DIR__ . '/..' . '/illuminate/contracts/Routing/UrlRoutable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Session\\Session' => __DIR__ . '/..' . '/illuminate/contracts/Session/Session.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\Arrayable' => __DIR__ . '/..' . '/illuminate/contracts/Support/Arrayable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\CanBeEscapedWhenCastToString' => __DIR__ . '/..' . '/illuminate/contracts/Support/CanBeEscapedWhenCastToString.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\DeferrableProvider' => __DIR__ . '/..' . '/illuminate/contracts/Support/DeferrableProvider.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\DeferringDisplayableValue' => __DIR__ . '/..' . '/illuminate/contracts/Support/DeferringDisplayableValue.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\Htmlable' => __DIR__ . '/..' . '/illuminate/contracts/Support/Htmlable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\Jsonable' => __DIR__ . '/..' . '/illuminate/contracts/Support/Jsonable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\MessageBag' => __DIR__ . '/..' . '/illuminate/contracts/Support/MessageBag.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\MessageProvider' => __DIR__ . '/..' . '/illuminate/contracts/Support/MessageProvider.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\Renderable' => __DIR__ . '/..' . '/illuminate/contracts/Support/Renderable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\Responsable' => __DIR__ . '/..' . '/illuminate/contracts/Support/Responsable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Support\\ValidatedData' => __DIR__ . '/..' . '/illuminate/contracts/Support/ValidatedData.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Translation\\HasLocalePreference' => __DIR__ . '/..' . '/illuminate/contracts/Translation/HasLocalePreference.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Translation\\Loader' => __DIR__ . '/..' . '/illuminate/contracts/Translation/Loader.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Translation\\Translator' => __DIR__ . '/..' . '/illuminate/contracts/Translation/Translator.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Validation\\DataAwareRule' => __DIR__ . '/..' . '/illuminate/contracts/Validation/DataAwareRule.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Validation\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/Validation/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Validation\\ImplicitRule' => __DIR__ . '/..' . '/illuminate/contracts/Validation/ImplicitRule.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Validation\\Rule' => __DIR__ . '/..' . '/illuminate/contracts/Validation/Rule.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Validation\\UncompromisedVerifier' => __DIR__ . '/..' . '/illuminate/contracts/Validation/UncompromisedVerifier.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Validation\\ValidatesWhenResolved' => __DIR__ . '/..' . '/illuminate/contracts/Validation/ValidatesWhenResolved.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Validation\\Validator' => __DIR__ . '/..' . '/illuminate/contracts/Validation/Validator.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\Validation\\ValidatorAwareRule' => __DIR__ . '/..' . '/illuminate/contracts/Validation/ValidatorAwareRule.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\View\\Engine' => __DIR__ . '/..' . '/illuminate/contracts/View/Engine.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\View\\Factory' => __DIR__ . '/..' . '/illuminate/contracts/View/Factory.php',
        'Data443\\gdpr\\framework\\Illuminate\\Contracts\\View\\View' => __DIR__ . '/..' . '/illuminate/contracts/View/View.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\Arr' => __DIR__ . '/..' . '/illuminate/collections/Arr.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\Collection' => __DIR__ . '/..' . '/illuminate/collections/Collection.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\Enumerable' => __DIR__ . '/..' . '/illuminate/collections/Enumerable.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\HigherOrderCollectionProxy' => __DIR__ . '/..' . '/illuminate/collections/HigherOrderCollectionProxy.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\HigherOrderWhenProxy' => __DIR__ . '/..' . '/illuminate/collections/HigherOrderWhenProxy.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\ItemNotFoundException' => __DIR__ . '/..' . '/illuminate/collections/ItemNotFoundException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\LazyCollection' => __DIR__ . '/..' . '/illuminate/collections/LazyCollection.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\MultipleItemsFoundException' => __DIR__ . '/..' . '/illuminate/collections/MultipleItemsFoundException.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\Traits\\EnumeratesValues' => __DIR__ . '/..' . '/illuminate/collections/Traits/EnumeratesValues.php',
        'Data443\\gdpr\\framework\\Illuminate\\Support\\Traits\\Macroable' => __DIR__ . '/..' . '/illuminate/macroable/Traits/Macroable.php',
        'Data443\\gdpr\\framework\\Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Data443\\gdpr\\framework\\Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Data443\\gdpr\\framework\\Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Data443\\gdpr\\framework\\Psr\\SimpleCache\\CacheException' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheException.php',
        'Data443\\gdpr\\framework\\Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheInterface.php',
        'Data443\\gdpr\\framework\\Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/simple-cache/src/InvalidArgumentException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6fcc4a44d7e9d84978c33c3077ec8efb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6fcc4a44d7e9d84978c33c3077ec8efb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6fcc4a44d7e9d84978c33c3077ec8efb::$classMap;

        }, null, ClassLoader::class);
    }
}