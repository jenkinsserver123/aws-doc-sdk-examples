<?php
/**
 * Copyright 2010-2019 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * This file is licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License. A copy of
 * the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *
 * ABOUT THIS PHP SAMPLE => This sample is part of the SDK for PHP Developer Guide topic at
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/ses-template.html
 *
 */

require 'vendor/autoload.php';

use Aws\ApiGateway\ApiGatewayClient;
use Aws\Exception\AwsException;

//Create a ApiGatewayClient
$client = new Aws\ApiGateway\ApiGatewayClient([
    'profile' => 'default',
    'version' => '2015-07-09',
    'region' => 'us-east-2'
]);

$basePath = '(none)';
$domainName = 'example.com';

try {
    $result = $client->getBasePathMapping([
        'basePath' => $basePath,
        'domainName' => $domainName,
    ]);
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    echo $e->getMessage();
    echo "\n";
}
 

//snippet-comment:[These are tags for the AWS doc team's sample catalog. Do not remove.]
//snippet-sourcedescription:[Get_BasePathmapping.php demonstrates how to view Base Path Mapping in API Gateway.]
//snippet-keyword:[PHP]
//snippet-keyword:[AWS SDK for PHP v3]
//snippet-keyword:[Code Sample]
//snippet-keyword:[Amazon API Gateway]
//snippet-service:[apigateway]
//snippet-sourcetype:[full-example]
//snippet-sourcedate:[2018-12-03]
//snippet-sourceauthor:[jschwarzwalder (AWS)]

