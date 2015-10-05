<?php

include '../Authorization_code_flow.php';

$client = new Authorization_code_flow();
$client->setRequestDiscoveryUrl("https://seed.gluu.org/.well-known/openid-configuration");
$client->setRequestRedirectUrl("https://rs.gluu.org/resources");
$client->setRequestClientId("@!1111!0008!0068.3E20");
$client->setRequestClientSecret("32c2fb17-409d-48a2-b793-a639c8ac6cb2");
$client->setRequestUserId("yuriy");
$client->setRequestUserSecret("secret");
$client->setRequestScope("openid email");
$client->setRequestNonce("409d-48a2-b793");
$client->setRequestAcr("basic");

$client->request();

echo '<br/>'.$client->getResponseStatus();

print_r($client->getResponseData());
echo '<br/>';
print_r($client->getResponseObject());
echo '<br/>';
print_r($client->getResponseJSON());

echo '<br/>'.$client->getResponseAccessToken();
echo '<br/>'.$client->getResponseExpiresInSeconds();
echo '<br/>'.$client->getResponseIdToken();
echo '<br/>'.$client->getResponseRefreshToken();
echo '<br/>'.$client->getResponseAuthorizationCode();
echo '<br/>'.$client->getResponseScope();

$client->disconnect();