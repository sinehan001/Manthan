<?php
session_start();
require_once 'vendor/autoload.php';
$google_client = new Google_Client();

$google_client->setClientId('989501024839-uvrhsloafijc2m3dfd6mdhjgci52bogr.apps.googleusercontent.com');

$google_client->setClientSecret('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');

$google_client->setRedirectUri('http://localhost/google_login/');

$google_client->addScope('email');

$google_client->addScope('profile');

$fb = new Facebook\Facebook([
    'app_id' => '476447834008112',
    'app_secret' => '10ee289eea28d733b6497cdf4e02cf73',
    'default_graph_version' => 'v2.10'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/google_login/index.php");
try
{
    $accessToken = $helper->getAccessToken();
    if(isset($accessToken))
    {
        $_SESSION['accessToken'] = (string)$accessToken;
        header("Location:index.php");
    }
} catch (Exception $e)
{
    echo $e->getTraceAsString();
}

if(isset($_SESSION['accessToken']))
{
    try 
    {
        $fb->setDefaultAccessToken($_SESSION['accessToken']);
        $res = $fb->get('/me?locale=en_US&fields=name,email');
        $user = $res->getGraphUser();
    }
    catch (Exception $e) 
    {
        echo $e->getTraceAsString();
    }
}

?>