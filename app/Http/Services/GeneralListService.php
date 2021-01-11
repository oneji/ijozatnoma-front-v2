<?php

namespace App\Http\Services;

class GeneralListService
{
    /**
     * Get all lists info
     * 
     * @return array
     */
    public function all()
    {
        $client = new \GuzzleHttp\Client([
            'base_uri' => config('app.adminURL')
        ]);
        
        $response = $client->request('GET', 'general/getListInfo', [ 'http_errors' => false ]);
        $responseBody = json_decode($response->getBody()->getContents());

        if($response->getStatusCode() === 200) {
            return [
                'success' => true,
                'regions' => $responseBody->regions,
                'cities' => $responseBody->cities,
                'types' => $responseBody->types
            ];
        } else {
            return [
                'success' => false,
                'code' => $responseBody->code,
                'message' => $responseBody->message
            ];
        }
    }
}