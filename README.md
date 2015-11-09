<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div id="dokuwiki__site">

    <div id="dokuwiki__top" class="dokuwiki site mode_show  ">
        <div class="">
            <div class="pad group">
                <div class="page group">
                    <!-- wikipage start -->

                    <h1>
                        <a id="user-content-oxd-php" class="anchor" href="#oxd-php" aria-hidden="true"><span class="octicon octicon-link"></span></a>oxd-php
                    </h1>

                    <p>OXD Client Library for the <a target="_blank" href="http://ox.gluu.org/doku.php?id=oxd:rp">Gluu oxD Server</a>.</p>
                    <p>PHP Client Library for the <a target="_blank" href="https://github.com/GluuFederation/oxd-php">Gluu oxD Server</a>.</p>
                    <p>
                        <strong>oxd-php</strong>
                        is a thin wrapper around the communication protocol of oxD server.
                        This can be used to access the OpenID connect &amp;
                        UMA Authorization end points of the Gluu Server via the oxD RP.
                        This library provides the function calls required by a website to access user information from a OpenID Connect Provider (OP) by using the OxD as the Relying Party (RP).
                    </p>
                    <div class="level2">

                        <p>
                            PHP classes for comunicating with oxd.
                        </p>
                        <p>
                            Base class is abstract Client_OXD.php, for which extends all classes. <a href="#client_oxd" title="oxd:communication_protocol ?" class="wikilink1">Client_OXD</a>
                        </p>
                        <ol>
                            <li class="level1"><div class="li"> <a href="#register_client" title="oxd:communication_protocol ?" class="wikilink1">Register_client.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#client_read" title="oxd:communication_protocol ?" class="wikilink1">Client_read.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#obtain_pat" title="oxd:communication_protocol ?" class="wikilink1">Obtain_pat.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#obtain_aat" title="oxd:communication_protocol ?" class="wikilink1">Obtain_aat.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#register_resource" title="oxd:communication_protocol ?" class="wikilink1">Register_resource.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#check_status_of_rpt" title="oxd:communication_protocol ?" class="wikilink1">Rpt_status.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#check_status_of_id_token" title="oxd:communication_protocol ?" class="wikilink1">Id_token_status.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#check_status_of_access_token" title="oxd:communication_protocol ?" class="wikilink1">Access_token_status.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#register_permission_ticket" title="oxd:communication_protocol ?" class="wikilink1">Register_ticket.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#discovery" title="oxd:communication_protocol ?" class="wikilink1">Discovery.php</a></div>
                            </li>
                            <li class="level1"><div class="li"> <a href="#authorization_code_flow" title="oxd:communication_protocol ?" class="wikilink1">Authorization_code_flow.php</a></div>
                            </li>
                        </ol>

                    </div>

                    <h3 class="sectionedit100" id="client_oxd">Clinet_OXD.php</h3>

                    <div class="level100">

                        <p>
                            Client_oxd class is abstract class:_constructor given $ip = 127.0.0.1,$port = 8099.
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Name: $ip;</h4>
                                        <p>Type:string;</p>
                                        <p>Default value = 127.0.0.1;</p>
                                        <p>Description: oxd socket ip, need for connection to socket;</p>
                                    </li>
                                    <li>
                                        <h4>Name: $port;</h4>
                                        <p>Type:int;</p>
                                        <p>Default value = 8099;</p>
                                        <p>Description: oxd socket port, need for connection to socket;</p>
                                    </li>
                                    <li>
                                        <h4>Name: $socket;</h4>
                                        <p>Type:static object;</p>
                                        <p>Default value = null;</p>
                                        <p>Description: oxd socket connection;</p>
                                    </li>
                                    <li>
                                        <h4>Name: $command_types;</h4>
                                        <p>Type:array;</p>
                                        <p>Default value = array(
                                            'register_client', 'client_read', 'obtain_pat', 'obtain_aat',
                                            'obtain_rpt', 'authorize_rpt', 'register_resource', 'rpt_status',
                                            'id_token_status', 'access_token_status', 'register_ticket', 'discovery',
                                            'authorization_code_flow', 'get_authorization_url', 'get_tokens_by_code',
                                            'get_user_info', 'register_site',;</p>
                                        <p>Description: all protocol names. need for checking protocol type;</p>
                                    </li>
                                    <li>
                                        <h4>Name: $command;</h4>
                                        <p>Type:string;</p>
                                        <p>Default value = null;</p>
                                        <p>Description: request command to oxd;</p>
                                    </li>
                                    <li>
                                        <h4>Name: $response_json;</h4>
                                        <p>Type:string(json);</p>
                                        <p>Default value = null;</p>
                                        <p>Description: response, which coming from oxd;</p>
                                    </li>
                                    <li>
                                        <h4>Name: $response_object;</h4>
                                        <p>Type:array;</p>
                                        <p>Default value = null;</p>
                                        <p>Description: response object, which parsed from $response_json;</p>
                                    </li>
                                    <li>
                                        <h4>Name: $response_status;</h4>
                                        <p>Type:string;</p>
                                        <p>Default value = null;</p>
                                        <p>Description: response status, can be Ok or Error;</p>
                                    </li>
                                    <li>
                                        <h4>Name: $data;</h4>
                                        <p>Type:array;</p>
                                        <p>Default value = null;</p>
                                        <p>Description: response data;</p>
                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Name: setIp;</h4>
                                        <p>Param:string;</p>
                                        <p>Description: Seting ip for connection oxd socket;</p>
                                    </li>
                                    <li>
                                        <h4>Name: getIp;</h4>
                                        <p>Return:string;</p>
                                        <p>Description: Getting ip for connection oxd socket;</p>
                                    </li>
                                    <li>
                                        <h4>Name: setPort;</h4>
                                        <p>Param:int;</p>
                                        <p>Description: Setting port for connection oxd socket;</p>
                                    </li>
                                    <li>
                                        <h4>Name: getPort;</h4>
                                        <p>Return:int;</p>
                                        <p>Description: Getting port for connection oxd socket;</p>
                                    </li>
                                    <li>
                                        <h4>Name: setSocket;</h4>
                                        <p>Param:object;</p>
                                        <p>Description: Setting socket object;</p>
                                    </li>
                                    <li>
                                        <h4>Name: getSocket;</h4>
                                        <p>Return:object;</p>
                                        <p>Description: Getting socket object;</p>
                                    </li>
                                    <li>
                                        <h4>Name: disconnect;</h4>
                                        <p>Param:socket object;</p>
                                        <p>Description: Closing open static socket;</p>
                                    </li>
                                    <li>
                                        <h4>Name: setCommand;</h4>
                                        <p>Type:abstract;</p>
                                        <p>Param:string;</p>
                                        <p>Description: Setting protocol type;</p>
                                    </li>
                                    <li>
                                        <h4>Name: getCommand;</h4>
                                        <p>Return:string;</p>
                                        <p>Description: Getting protocol type;</p>
                                    </li>
                                    <li>
                                        <h4>Name: setParams;</h4>
                                        <p>Type:abstract;</p>
                                        <p>Param:array;</p>
                                        <p>Description: Setting params for protocol;</p>
                                    </li>
                                    <li>
                                        <h4>Name: getParams;</h4>
                                        <p>Return:array;</p>
                                        <p>Description: Getting  params for protocol;</p>
                                    </li>
                                    <li>
                                        <h4>Name: getData;</h4>
                                        <p>Return:array;</p>
                                        <p>Description: Getting data for sanding to oxd;</p>
                                    </li>
                                    <li>
                                        <h4>Name: is_JSON;</h4>
                                        <p>Param:string;</p>
                                        <p>Description: Chaking is string is json;</p>
                                    </li>
                                    <li>
                                        <h4>Name: error_message;</h4>
                                        <p>Param:string;</p>
                                        <p>Description: Showing error message and exiting process if have error;</p>
                                    </li>
                                    <li>
                                        <h4>Name: request;</h4>
                                        <p>Description: Sanding request to oxd;</p>
                                    </li>
                                    <li>
                                        <h4>Name: getResponseJSON;</h4>
                                        <p>Return:string;</p>
                                        <p>Description: Getting response from oxD server, returning JSON object;</p>
                                    </li>
                                    <li>
                                        <h4>Name: getResponseObject;</h4>
                                        <p>Return:array;</p>
                                        <p>Description: Getting response from oxD server, returning array object;</p>
                                    </li>
                                    <li>
                                        <h4>Name: curl_oxd_request;</h4>
                                        <p>Params:$requestType ='POST', $url = 'https://ce.gluu.info',$port = 443;</p>
                                        <p>Return:string;</p>
                                        <p>Description: Sending curl request to gluu server;</p>
                                    </li>
                                </ol>
                            </li>
                        </ul>



                    </div>

                    <h3 class="sectionedit100" id="register_client">Register_client.php</h3>

                    <div class="level100">

                        <p>
                            Register_client class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request register_client protocol;</h4>
                                        <p>$request_discoveryUrl, $request_redirectUrl, $request_logout_redirect_url, $request_client_name, $request_response_types, $request_app_type, $request_grant_types, $request_contacts, $request_jwks_uri;</p>
                                        <p>Type:string;</p>
                                        <p>Default value = null;</p>

                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>$response_client_id, $response_client_secret, $response_registration_access_token, $response_client_secret_expires_at, $response_registration_client_uri, $response_client_id_issued_at;</p>
                                        <p>Type:string;</p>

                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Register_client_test:
include_once '../Register_Client.php';

$register_client = new Register_client();

$register_client->setRequestDiscoveryUrl("https://ce.gluu.info/.well-known/openid-configuration");
$register_client->setRequestRedirectUrl("https://rs.gluu.info/cb");
$register_client->setRequestLogoutRedirectUrl("https://rs.gluu.info/cb2");
$register_client->setRequestClientName("Vlad");
$register_client->setRequestResponseTypes("code id_token token");
$register_client->setRequestAppType("web");
$register_client->setRequestGrantTypes("authorization_code implicit");
$register_client->setRequestContacts("mike@gluu.org, vlad@gluu.org");
$register_client->setRequestJwksUri("https://ce.gluu.info/jwks");

$register_client->request();

echo $register_client->getResponseStatus();
print_r($register_client->getResponseData());
print_r($register_client->getResponseObject());
print_r($register_client->getResponseJSON());

echo $register_client->getResponseClientId();
echo $register_client->getResponseClientSecret();
echo $register_client->getResponseRegistrationAccessToken();
echo $register_client->getResponseClientSecretExpiresAt();
echo $register_client->getResponseRegistrationClientUri();
echo $register_client->getResponseClientIdIssuedAt();

$register_client->disconnect();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="client_read">Client_read.php</h3>

                    <div class="level100">

                        <p>
                            Client_read class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request client_read protocol;</h4>
                                        <p>$request_registration_client_uri, $request_registration_access_token</p>
                                        <p>Type:string;</p>
                                        <p>Default value = null;</p>

                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>$response_client_id, $response_client_secret, $response_registration_access_token, $response_client_secret_expires_at, $response_registration_client_uri, $response_client_id_issued_at</p>
                                        <p>Type:string;</p>

                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Client_read_test:
include '../Client_read.php';

$client_read = new Client_read();
$client_read->setRequestRegistrationClientUri('https://ce.gluu.info/oxauth/seam/resource/restv1/oxauth/register?client_id=@!EDFB.879F.2DAE.D95A!0001!0442.B31E!0008!778C.9634');
$client_read->setRequestRegistrationAccessToken('8117eacd-8095-45cc-b637-a5822ee82d80');

$client_read->request();

echo $client_read->getResponseStatus();

print_r($client_read->getResponseData());
print_r($client_read->getResponseObject());
print_r($client_read->getResponseJSON());

echo $client_read->getResponseClientId();
echo $client_read->getResponseClientIdIssuedAt();
echo $client_read->getResponseClientSecret();
echo $client_read->getResponseClientSecretExpiresAt();
echo $client_read->getResponseRegistrationAccessToken();
echo $client_read->getResponseRegistrationClientUri();

$client_read->disconnect();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="Obtain_trait">Obtain_trait.php</h3>

                    <div class="level100">

                        <p>
                            Obtain_trait is a trait  .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request obtain_pat, obtain_aat protocol;</h4>
                                        <p>$request_discovery_url, $request_uma_discovery_url, $request_redirect_url, $request_client_id, $request_client_secret, $request_user_id, $request_user_secret</p>
                                        <p>Type:string;</p>
                                        <p>Default value = null;</p>

                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>$response_expires_in_seconds, $response_authorization_code, $response_scope</p>
                                        <p>Type:string;</p>
                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>
                    </div>

                    <h3 class="sectionedit100" id="obtain_pat">Obtain_pat.php</h3>

                    <div class="level100">

                        <p>
                            Obtain_pat class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <p>
                            Obtain_pat class use <a href="#Obtain_trait">Obtain_trait.php</a> .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request obtain_pat protocol;</h4>
                                        <p>Obtain_trait request parameters;</p>
                                        <p>Type:string;</p>
                                        <p>Default value = null;</p>

                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>Obtain_trait response parameters $request_registration_client_uri, $request_registration_access_token;</p>
                                        <p>Type:string;</p>

                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Obtain_pat_test:
include '../Obtain_pat.php';

$obtain_pat = new Obtain_pat();

$obtain_pat->setRequestDiscoveryUrl("https://ce.gluu.info/.well-known/openid-configuration");
$obtain_pat->setRequestUmaDiscoveryUrl("http://ce.gluu.info/.well-known/uma-configuration");
$obtain_pat->setRequestRedirectUrl("https://rs.gluu.info/cb");
$obtain_pat->setRequestClientId("@!1111!0008!0068.3E20");
$obtain_pat->setRequestClientSecret("32c2fb17-409d-48a2-b793-a639c8ac6cb2");
$obtain_pat->setRequestUserId("vlad");
$obtain_pat->setRequestUserSecret("secret");

$obtain_pat->request();

echo $obtain_pat->getResponseStatus();
print_r($obtain_pat->getResponseData());
print_r($obtain_pat->getResponseObject());
print_r($obtain_pat->getResponseJSON());

echo $obtain_pat->getResponsePatToken();
echo $obtain_pat->getResponseExpiresInSeconds();
echo $obtain_pat->getResponsePatRefreshToken();
echo $obtain_pat->getResponseAuthorizationCode();
echo $obtain_pat->getResponseScope();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="obtain_aat">Obtain_aat.php</h3>

                    <div class="level100">

                        <p>
                            Obtain_aat class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <p>
                            Obtain_aat class use <a href="#Obtain_trait">Obtain_trait.php</a> .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request obtain_aat protocol;</h4>
                                        <p>Obtain_trait request parameters;</p>
                                        <p>Type:string;</p>
                                        <p>Default value = null;</p>

                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>Obtain_trait response parameters request parameters and $response_aat_token, $response_aat_refresh_token;</p>
                                        <p>Type:string;</p>

                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Obtain_pat_test:
include '../Obtain_aat.php';

$obtain_aat = new Obtain_aat();

$obtain_aat->setRequestDiscoveryUrl("https://ce.gluu.info/.well-known/openid-configuration");
$obtain_aat->setRequestUmaDiscoveryUrl("http://ce.gluu.info/.well-known/uma-configuration");
$obtain_aat->setRequestRedirectUrl("https://rs.gluu.info/cb");
$obtain_aat->setRequestClientId("@!1111!0008!0068.3E20");
$obtain_aat->setRequestClientSecret("32c2fb17-409d-48a2-b793-a639c8ac6cb2");
$obtain_aat->setRequestUserId("vlad");
$obtain_aat->setRequestUserSecret("secret");

$obtain_aat->request();

echo $obtain_aat->getResponseStatus();
print_r($obtain_aat->getResponseData());
print_r($obtain_aat->getResponseObject());
print_r($obtain_aat->getResponseJSON());

echo $obtain_aat->getResponseAatToken();
echo $obtain_aat->getResponseExpiresInSeconds();
echo $obtain_aat->getResponseAatRefreshToken();
echo $obtain_aat->getResponseAuthorizationCode();
echo $obtain_aat->getResponseScope();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="register_resource">Register_resource.php</h3>

                    <div class="level100">

                        <p>
                            Register_resource class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request client_read protocol;</h4>
                                        <p>Type:string: $request_uma_discovery_url, $request_pat, $request_name</p>
                                        <p>Type:array: $request_scopes</p>

                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>$response_resource_status, $response_id, $response_rev;</p>
                                        <p>Type:string;</p>

                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Register_resource_test:
include '../Register_resource.php';

$register_resource = new Register_resource();

$register_resource->setRequestUmaDiscoveryUrl("https://ce.gluu.info/.well-known/uma-configuration");
$register_resource->setRequestPat("eyJ0eXAiOiJKV1MiLCJhbGciOiJSUzI1NiIsImprdSI6Imh0dHBzOi8vc2VlZC5nbHV1L");
$register_resource->setRequestName("My Resource");
$register_resource->setRequestScopes([
    "http://photoz.example.com/dev/scopes/view",
    "http://photoz.example.com/dev/scopes/all"
]);

$register_resource->request();

echo $register_resource->getResponseStatus();

print_r($register_resource->getResponseData());
print_r($register_resource->getResponseObject());
print_r($register_resource->getResponseJSON());

echo $register_resource->getResourceResponseStatus();
echo $register_resource->getResponseId();
echo $register_resource->getResponseRev();

$register_resource->disconnect();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="check_status_of_rpt">Rpt_status.php</h3>

                    <div class="level100">

                        <p>
                            Rpt_status class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request rpt_status protocol;</h4>
                                        <p>Type:string: $request_uma_discovery_url, $request_pat, $request_rpt</p>

                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>Type:string: $response_active, $response_expires_at, $response_issued_at;</p>
                                        <p>Type:array: $response_permissions;</p>

                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Rpt_status_test:
include '../Rpt_status.php';

$rpt_status = new Rpt_status();

$rpt_status->setRequestUmaDiscoveryUrl("https://ce.gluu.info/.well-known/uma-configuration");
$rpt_status->setRequestPat("eyJ0eXAiOiJKV1MiLCJhbGciOiJSUzI1NiIsImprdSI6Imh0");
$rpt_status->setRequestRpt("KV1MiLCJhbGciOiJSUzI1NiIsImprdSI6Imh0dHBzOi8vc2VlZC5nbHV1Lm9yZy9veGF1dGgvc2VhbS9yZXNvdXJjZS9yZXN0djEvb3hhd");

$rpt_status->request();

echo $rpt_status->getResponseStatus();
print_r($rpt_status->getResponseData());
print_r($rpt_status->getResponseObject());
print_r($rpt_status->getResponseJSON());

echo $rpt_status->getResponseActive();
echo $rpt_status->getResponseExpiresAt();
echo $rpt_status->getResponseIssuedAt();
echo $rpt_status->getResponsePermissions();

$rpt_status->disconnect();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="check_status_of_id_token">Id_token_status.php</h3>

                    <div class="level100">

                        <p>
                            Id_token_status class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request id_token_status protocol;</h4>
                                        <p>Type:string: $request_discovery_url, $request_id_token</p>

                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>Type:string: $response_active, $response_expires_at, $response_issued_at,$response_claims(JSON);</p>

                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Id_token_status_test:
include '../Id_token_status.php';

$id_token_status = new Id_token_status();

$id_token_status->setRequestDiscoveryUrl('https://ce.gluu.info/.well-known/openid-configuration');
$id_token_status->setRequestIdToken('eyJ0eXAiOiJKV1MiLCJhbGciOiJSUzI1NiIsImprdSI6Imh0');

$id_token_status->request();

echo $id_token_status->getResponseStatus();

print_r($id_token_status->getResponseData());
print_r($id_token_status->getResponseObject());
print_r($id_token_status->getResponseJSON());

echo $id_token_status->getResponseActive();
echo $id_token_status->getResponseExpiresAt();
echo $id_token_status->getResponseIssuedAt();
echo $id_token_status->getResponseClaims();

$id_token_status->disconnect();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="check_status_of_access_token">Access_token_status.php</h3>

                    <div class="level100">

                        <p>
                            Access_token_status class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request access_token_status protocol;</h4>
                                        <p>Type:string: $request_discovery_url, $request_id_token, $request_access_token</p>

                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>Type:string: $response_active, $response_expires_at, $response_issued_at;</p>

                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Access_token_status_test:
include '../Access_token_status.php';

$access_token_status = new Access_token_status();
$access_token_status->setRequestDiscoveryUrl('https://ce.gluu.info/.well-known/openid-configuration');
$access_token_status->setRequestIdToken('NiIsImprdSI6Imh0dHBzOi8vc2VlZC5nbHV1Lm9yZy9veGF1dGgvc2VhbS9yZXNvdXJjZS9yZ');
$access_token_status->setRequestAccessToken('KV1MiLCJhbGciOiJSUzI1NiIsImprdSI6Imh0dHBzOi8vc2VlZC5nbHV1Lm9yZy9veGF1dGgvc2VhbS9yZXNvdXJjZS9yZXN0djEvb3hhd');
$access_token_status->request();

echo $access_token_status->getResponseStatus();

print_r($access_token_status->getResponseData());
print_r($access_token_status->getResponseObject());
print_r($access_token_status->getResponseJSON());

echo $access_token_status->getResponseActive();
echo $access_token_status->getResponseExpiresAt();
echo $access_token_status->getResponseIssuedAt();

$access_token_status->disconnect();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="register_permission_ticket">Register_ticket.php</h3>

                    <div class="level100">

                        <p>
                            Register_ticket class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request register_ticket protocol;</h4>
                                        <p>Type:string: $request_uma_discovery_url, $request_pat, $request_am_host, $request_rs_host, $request_resource_set_id, $request_http_method, $request_url</p>
                                        <p>Type:array: $request_scopes</p>
                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>Type:string: $response_ticket;</p>
                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Register_ticket_test:
include '../Register_ticket.php';

$register_ticket = new Register_ticket();

$register_ticket->setRequestUmaDiscoveryUrl("https://ce.gluu.info/.well-known/uma-configuration");
$register_ticket->setRequestPat("eyJ0eXAiOiJKV1MiLCJhbGciOiJSUzI1NiIsImprdSI6Imh0");
$register_ticket->setRequestAmHost("ce.gluu.info");
$register_ticket->setRequestRsHost("rs.gluu.org");
$register_ticket->setRequestResourceSetId("1366810445313");
$register_ticket->setRequestScopes([
    "http://photoz.example.com/dev/scopes/view",
    "http://photoz.example.com/dev/scopes/add"
]);
$register_ticket->setRequestHttpMethod("DELETE");
$register_ticket->setRequestUrl("http://example.com/object/1234");

$register_ticket->request();

echo $register_ticket->getResponseStatus();
print_r($register_ticket->getResponseData());
print_r($register_ticket->getResponseObject());
print_r($register_ticket->getResponseJSON());

echo $register_ticket->getResponseTicket();

$register_ticket->disconnect();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="discovery">Discovery.php</h3>

                    <div class="level100">

                        <p>
                            Discovery class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request discovery protocol;</h4>
                                        <p>Type:string: $request_discovery_url</p>
                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>Type:string: $response_issuer, $response_authorization_endpoint, $response_token_endpoint, $response_userinfo_endpoint,
                                            $response_clientinfo_endpoint, $response_check_session_iframe, $response_end_session_endpoint, $response_jwks_uri, $response_registration_endpoint,
                                            $response_validate_token_endpoint, $response_federation_metadata_endpoint, $response_federation_endpoint, $response_id_generation_endpoint,
                                            $response_service_documentation, $response_claims_locales_supported, $response_ui_locales_supported, $response_claims_parameter_supported,
                                            $response_request_parameter_supported, $response_request_uri_parameter_supported, $response_require_request_uri_registration,
                                            $response_op_policy_uri, $response_op_tos_uri;</p>
                                        <p>Type:array: $response_scopes_supported, $response_types_supported, $response_grant_types_supported, $response_subject_types_supported;</p>
                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Discovery_test:
include '../Discovery.php';
$discovery = new Discovery();
$discovery->setRequestDiscoveryUrl('https://ce.gluu.info/.well-known/openid-configuration');
$discovery->request();

echo $discovery->getResponseStatus();

print_r($discovery->getResponseData());
print_r($discovery->getResponseObject());
print_r($discovery->getResponseJSON());

echo $discovery->getResponseIssuer();
echo $discovery->getResponseTokenEndpoint();
echo $discovery->getResponseUserinfoEndpoint();
echo $discovery->getResponseClientinfoEndpoint();
echo $discovery->getResponseCheckSessionIframe();
echo $discovery->getResponseEndSessionEndpoint();
echo $discovery->getResponseJwksUri();
echo $discovery->getResponseRegistrationEndpoint();
echo $discovery->getResponseValidateTokenEndpoint();
echo $discovery->getResponseFederationMetadataEndpoint();
echo $discovery->getResponseFederationEndpoint();
echo $discovery->getResponseIdGenerationEndpoint();
print_r($discovery->getResponseScopesSupported());
print_r($discovery->getResponseTypesSupported());
print_r($discovery->getResponseGrantTypesSupported());
print_r($discovery->getResponseSubjectTypesSupported());
print_r($discovery->getResponseServiceDocumentation());
print_r($discovery->getResponseClaimsLocalesSupported());
print_r($discovery->getResponseUiLocalesSupported());
echo $discovery->getResponseClaimsParameterSupported();
echo $discovery->getResponseRequestParameterSupported();
echo $discovery->getResponseRequestUriParameterSupported();
echo $discovery->getResponseRequireRequestUriRegistration();
echo $discovery->getResponseOpPolicyUri();
echo $discovery->getResponseOpTosUri();

$discovery->disconnect();
                        </pre>
                    </div>

                    <h3 class="sectionedit100" id="authorization_code_flow">Authorization_code_flow.php</h3>

                    <div class="level100">

                        <p>
                            Authorization_code_flow class extends from Clinet_OXD class, which _constructor accept parent _constructor params .
                        </p>
                        <ul>
                            <li class="level1">
                                <div class="li"> <h4>Parameters:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Description: Parameters necessary for to request authorization_code_flow protocol;</h4>
                                        <p>Type:string: $request_discovery_url, $request_redirect_url, $request_client_id, $request_client_secret, $request_user_id, $request_user_secret, $request_scope, $request_nonce, $request_acr</p>
                                    </li>
                                    <li>
                                        <h4>Description: Response parameters from oxd;</h4>
                                        <p>Type:string: $response_access_token, $response_expires_in_seconds, $response_id_token, $response_refresh_token, $response_authorization_code, $response_scope;</p>
                                    </li>
                                </ol>
                            </li>
                            <li class="level1">
                                <div class="li"><h4> Functions:</h4></div>
                                <ol>
                                    <li>
                                        <h4>Extended functions from parent class, parameters setters and getters;</h4>
                                    </li>

                                </ol>
                            </li>
                        </ul>

                        <p>
                            <strong>Example</strong>
                        </p>
                        <pre class="code">
Authorization_code_flow_test:
include '../Authorization_code_flow.php';

$authorization_code_flow = new Authorization_code_flow();
$authorization_code_flow->setRequestDiscoveryUrl("https://ce.gluu.info/.well-known/openid-configuration");
$authorization_code_flow->setRequestRedirectUrl("https://rs.gluu.info/cb1");
$authorization_code_flow->setRequestClientId("@!DDB8.4688.02CB.F371!0001!F279.92D9");
$authorization_code_flow->setRequestClientSecret("32c2fb17-409d-48a2-b793-a639c8ac6cb2");
$authorization_code_flow->setRequestUserId("admin");
$authorization_code_flow->setRequestUserSecret("secret");
$authorization_code_flow->setRequestScope("openid email");
$authorization_code_flow->setRequestNonce("409d-48a2-b793");
$authorization_code_flow->setRequestAcr('basic');

$authorization_code_flow->request();

echo $authorization_code_flow->getResponseStatus();

print_r($authorization_code_flow->getResponseData());
print_r($authorization_code_flow->getResponseObject());
print_r($authorization_code_flow->getResponseJSON());

echo $authorization_code_flow->getResponseAccessToken();
echo $authorization_code_flow->getResponseExpiresInSeconds();
echo $authorization_code_flow->getResponseIdToken();
echo $authorization_code_flow->getResponseRefreshToken();
echo $authorization_code_flow->getResponseAuthorizationCode();
echo $authorization_code_flow->getResponseScope();

$authorization_code_flow->disconnect();
                        </pre>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>