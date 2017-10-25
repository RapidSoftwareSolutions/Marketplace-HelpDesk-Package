<?php

$app->post('/api/HelpDesk/getUserRatingsReport', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','start','end','user','rating']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'apiKey','start'=>'start','end'=>'end','user'=>'user','rating'=>'rating'];
    $optionalParams = ['previousStart'=>'previousStart','previousEnd'=>'previousEnd','mailboxes'=>'mailboxes','tags'=>'tags','types'=>'types','folders'=>'folders','page'=>'page','sortField'=>'sortField','sortOrder'=>'sortOrder'];
    $bodyParams = [
       'query' => ['start','end','previousStart','previousEnd','mailboxes','tags','types','folders','user','page','rating','sortField','sortOrder']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    $data['start'] = \Models\Params::toFormat($data['start'], 'Y-m-d H:i:s'); 
    $data['end'] = \Models\Params::toFormat($data['end'], 'Y-m-d H:i:s'); 
    $data['previousStart'] = \Models\Params::toFormat($data['previousStart'], 'Y-m-d H:i:s'); 
    $data['previousEnd'] = \Models\Params::toFormat($data['previousEnd'], 'Y-m-d H:i:s'); 
    $data['mailboxes'] = \Models\Params::toString($data['mailboxes'], ','); 
    $data['tags'] = \Models\Params::toString($data['tags'], ','); 
    $data['types'] = \Models\Params::toString($data['types'], ','); 
    $data['folders'] = \Models\Params::toString($data['folders'], ','); 

    $client = $this->httpClient;
    $query_str = "https://api.helpscout.net/v1/reports/user/ratings.json";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = [];
    $requestParams["auth"] = [$data['apiKey'],'X'];

    try {
        $resp = $client->get($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});