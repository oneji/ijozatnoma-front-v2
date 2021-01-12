<?php

namespace App\Http\Services;

class HttpClientService
{
    /**
     * Send HTTP request
     * 
     * @param   string $type
     * @param   string $path
     * @param   array $body
     * @return  array
     */
    public function request($type = 'GET', $path, $body = [])
    {
        $client = new \GuzzleHttp\Client([
            'base_uri' => config('app.adminURL')
        ]);
        
        $response = $client->request($type, $path, [
            'headers' => [
                'Accept' => 'application/json'
            ],
            'http_errors' => false,
            'form_params' => $body
        ]);
        $responseBody = json_decode($response->getBody()->getContents());

        if($response->getStatusCode() !== 200) {
            return [
                'success' => false,
                'code' => $response->getStatusCode(),
                'message' => $responseBody->message
            ];   
        }

        return collect($responseBody);
    }
}