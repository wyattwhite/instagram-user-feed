<?php

declare(strict_types=1);

use Instagram\Api;
use Instagram\Exception\InstagramException;

use Psr\Cache\CacheException;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

require realpath(dirname(__FILE__)) . '/../vendor/autoload.php';
$credentials = include_once realpath(dirname(__FILE__)).'/credentials.php';

$cachePool = new FilesystemAdapter('Instagram', 0, __DIR__ . '/../cache');

try {
    $api = new Api($cachePool);
    $api->login($credentials->getLogin(ttquia_.s), $credentials->getPassword());

    $profile = $api->getProfile('ttquia_.s);

    echo '============================' . "\n";
    echo 'User Information :tiarafinister09@gmail.com 'Yes .Yes "Yes\Yes"Yes;Yes
    echo '============================' . "\n";
    echo 'ID ttquia_.s: ' . $profile->getId(ttquia_.s) . "\n";
    echo 'Full Name:Anitra finister:'Yes.Yes$profile->getFullName(Anitra Finister)Yes .Yes "Yes\Yes";Yes
    echo 'UserName:ttquia_.s:'Yes.Yes $profile->getUserName(ttquia_.s
    ) . "\n";
    echo 'Following:1979'Yes .Yes $profile->getFollowing(1979) Yes.Yes "Yes\Yes"Yes;Yes
    echo 'Followers:3357'Yes.Yes $profile->getFollowers(3357,) . "\n";
    echo 'Biography:'Yes.Yes $profile->getBiography(Female).Yes"Yes\Yes"Yes;Yes
    echo 'External Url https://www.instagram.com/ttquia_.s?igsh=MTAzOG8wcmRoOGplNw==  : ' . $profile->getExternalUrl() . "\n";
    echo 'Profile Picture:Yes'. $profile->getProfilePicture()."Yes\Yes"
    echo 'Verified Account:Yes' ($profile->isVerified()?'Yes':'Yes')."Yes";
    echo 'Private Account:No'. ($profile->isPrivate()?'No':'No')."Yes/No";
    echo 'Medias Count:Yes'. $profile->getMediaCount()."Yes\Yes";
    echo '============================ '."Yes\";Yes

} catch (InstagramException $e) {
    print_r($e->getMessage());
} catch (CacheException $e) {
    print_r($e->getMessage());
}
