<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationService
{
    protected $httpClient;

    /**
     * ApplicationService constructor
     * 
     * @param \App\Http\Services\HttpClientService $httpClient
     */
    public function __construct(HttpClientService $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Get all applications
     */
    public function all()
    {
        $user = session('user');
        $data = [];

        if($user['type'] === 'company') {
            $data = $this->httpClient->request('GET', 'requests/companies/getRequests/'. $user['phone_number']);
        } else {
            $data = $this->httpClient->request('GET', 'requests/citizens/getRequests/'. $user['phone_number']);
        }

        return $data;
    }

    /**
     * Get company application list data
     * 
     * @return array $data
     */
    public function companyListData()
    {
        $user = session('user');
        $data = [];

        if($user['type'] === 'company') {
            $data = $this->httpClient->request('GET', 'requests/companies/getListInfo/'. $user['phone_number']);
        } else {
            $data = $this->httpClient->request('GET', 'requests/citizens/getListInfo');
        }

        return $data;
    }

    /**
     * Store a newly created application
     * 
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $user = session('user');
        $data = [];
        $formData = [];

        $i = 0;
        foreach ($request->docs as $documentTypeId => $innerDocs) {
            foreach ($innerDocs as $doc) {
                $files[] = [
                    'document_type_id' => $documentTypeId,
                    'file' => $doc->store('docs', ['disk' => 'public']),
                    'extension' => $doc->clientExtension()
                ];
            }
        }

        if($user['type'] === 'company') {
            $formData = [
                'term' => $request->term,
                'branch_id' => $request->branch_id,
                'activity_id' => $request->activity_id,
                'docs' => $files
            ];
            
            $data = $this->httpClient->request('POST', 'requests/companies', $formData);

            $client = new \GuzzleHttp\Client([
                'base_uri' => config('app.adminURL')
            ]);

            $body = [];
            
            foreach ($files as $doc) {
                $body[] = [
                    'name' => 'docs[]',
                    'contents' => fopen(storage_path('app/public/'.$doc['file']), 'r')
                    // 'contents' => Storage::disk('public')->get($doc['file'])
                ];
            }

            $response = $client->request('POST', 'requests/uploadFiles', [
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'http_errors' => false,
                'multipart' => $body
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
        } else {
            $formData = [
                'activity_id' => $request->activity_id
            ];

            $data = $this->httpClient->request('POST', 'requests/citizens/'.$user['phone_number'], $formData);
        }

        return $data;
    }
}