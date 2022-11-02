<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit113aa6f48300210152e47d56e3735559
{
    public static $files = array (
        '1d5a77609116b3a7d9f7b9e9c18687a5' => __DIR__ . '/../..' . '/model/User.php',
    );

    public static $classMap = array (
        'ACore' => __DIR__ . '/../..' . '/controller/Acore.php',
        'ACoreAdmin' => __DIR__ . '/../..' . '/controller/ACoreAdmin.php',
        'AboutTheAuthor' => __DIR__ . '/../..' . '/pages/aboutTheAuthor.php',
        'Account' => __DIR__ . '/../..' . '/pages/account.php',
        'AccountController' => __DIR__ . '/../..' . '/controller/AccountController.php',
        'AnalController' => __DIR__ . '/../..' . '/controller/AnalController.php',
        'Analytics' => __DIR__ . '/../..' . '/pages/analytics.php',
        'Cases' => __DIR__ . '/../..' . '/pages/cases.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Course' => __DIR__ . '/../..' . '/pages/course.php',
        'CourseEdit' => __DIR__ . '/../..' . '/pages/courseEdit.php',
        'DirectoryController' => __DIR__ . '/../..' . '/controller/DirectoryController.php',
        'Funnel' => __DIR__ . '/../..' . '/pages/funnel.php',
        'FunnelEdit' => __DIR__ . '/../..' . '/pages/funnelEdit.php',
        'Login' => __DIR__ . '/../..' . '/pages/Login.php',
        'LoginController' => __DIR__ . '/../..' . '/controller/LoginController.php',
        'Main' => __DIR__ . '/../..' . '/pages/Main.php',
        'MessengerController' => __DIR__ . '/../..' . '/controller/MessengerController.php',
        'NewProject' => __DIR__ . '/../..' . '/pages/newProject.php',
        'PopupController' => __DIR__ . '/../..' . '/controller/PopupController.php',
        'Project' => __DIR__ . '/../..' . '/pages/project.php',
        'Registration' => __DIR__ . '/../..' . '/pages/registration.php',
        'SettingsAccountUser' => __DIR__ . '/../..' . '/pages/settingsAccountUser.php',
        'SmallPlayer' => __DIR__ . '/../..' . '/pages/smallPlayer.php',
        'SortController' => __DIR__ . '/../..' . '/controller/SortController.php',
        'UrlController' => __DIR__ . '/../..' . '/controller/UrlController.php',
        'UserContacts' => __DIR__ . '/../..' . '/pages/userContacts.php',
        'UserLogin' => __DIR__ . '/../..' . '/pages/userLogin.php',
        'UserMain' => __DIR__ . '/../..' . '/pages/UserMain.php',
        'UserMenu' => __DIR__ . '/../..' . '/pages/UserMenu.php',
        'UserNotifications' => __DIR__ . '/../..' . '/pages/userNotifications.php',
        'UserPasswordRecovery' => __DIR__ . '/../..' . '/pages/userPasswordRecovery.php',
        'VideoController' => __DIR__ . '/../..' . '/controller/VideoController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit113aa6f48300210152e47d56e3735559::$classMap;

        }, null, ClassLoader::class);
    }
}
