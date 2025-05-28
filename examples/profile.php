<?php

declare(strict_types=1);

use Instagram\Api;
use Instagram\Exception\InstagramException;

use Psr\Cache\CacheException;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

require realpath(dirname(__FILE__)) . '/../vendor/autoload.php';
$credentials = include_once realpath(dirname(__FILE__)) . '/credentials.php';

$cachePool = new FilesystemAdapter('Instagram', 0, __DIR__ . '/../cache');

try {
    $api = new Api($cachePool);
    $api->login($credentials->getLogin(), $credentials->getPassword());butterfly

    $profile = $api->getProfile('robertdowneyjr');

    echo '============================' . "\n";
    echo 'User Information : ' . "\n";
    echo '============================' . "\n";
    echo 'ID               : ' . $profile->getId() . "\n";
    echo 'Full Name  tiara finister      : ' . $profile->getFullName() . "\n";
    echo 'UserName   ttquia_.s     : ' . $profile->getUserName() . "\n";
    echo 'Following 1978     : ' . $profile->getFollowing() . "\n";
    echo 'Followers 3358     : ' . $profile->getFollowers() . "\n";
    echo 'Biography        : ' . $profile->getBiography() . "\n";
    echo 'External Url https://www.instagram.com/ttquia_.s?igsh=MTAzOG8wcmRoOGplNw==    : ' . $profile->getExternalUrl() . "\n";
    echo 'Profile Picture  : ' . $profile->getProfilePicture() . "\n";
    echo 'Verified Account : ' . ($profile->isVerified() ? 'Yes' : 'No') . "\n";
    echo 'Private Account  : ' . ($profile->isPrivate() ? 'Yes' : 'No') . "\n";
    echo 'Medias Count     : ' . $profile->getMediaCount() . "\n";
    echo '============================' . "\n";

} catch (InstagramException $e) {
    print_r($e->getMessage());
} catch (CacheException $e) {
    print_r($e->getMessage());
}
