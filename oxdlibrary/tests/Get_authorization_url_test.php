<?php
/**
 * Gluu-oxd-library
 *
 * An open source application library for PHP
 *
 *
 * @copyright Copyright (c) 2017, Gluu Inc. (https://gluu.org/)
 * @license      MIT   License            : <http://opensource.org/licenses/MIT>
 *
 * @package      Oxd Library by Gluu
 * @category  Library, Api
 * @version   3.0.1
 *
 * @author    Gluu Inc.          : <https://gluu.org>
 * @link      Oxd site           : <https://oxd.gluu.org>
 * @link      Documentation      : <https://gluu.org/docs/oxd/3.0.1/libraries/php/>
 * @director  Mike Schwartz      : <mike@gluu.org>
 * @support   Support email      : <support@gluu.org>
 * @developer Volodya Karapetyan : <https://github.com/karapetyan88> <mr.karapetyan88@gmail.com>
 *
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2017, Gluu inc, USA, Austin
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 */



/*
 * test case for Get_authorization_url OXD-server command
 */
session_start();
require_once '../Get_authorization_url.php';

$get_authorization_url = new Get_authorization_url();
$get_authorization_url->setRequestOxdId($_SESSION['oxd_id']);
$get_authorization_url->setRequestAcrValues(Oxd_RP_config::$acr_values);
$get_authorization_url->setRequestScope(Oxd_RP_config::$scope);
$get_authorization_url->request();
echo $get_authorization_url->getResponseAuthorizationUrl();
