<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $link = '';

        if($user['type'] === 'company') {
            $link = 'requests/companies/getListInfo/'. $user['phone_number'];
        } else {
            $link = 'requests/citizens/getListInfo';
        }
        
        return $this->httpClient->request('GET', $link);
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
                    'file' => $doc->store('', ['disk' => 'public']),
                    'extension' => $doc->clientExtension()
                ];
            }
        }

        if($user['type'] === 'company') {
            $formData = [
                'extension' => isset($request->extension) ? 1 : 0,
                'activity_id' => $request->activity_id,
                'notes' => $request->notes,
                'term' => $request->term,
                'branch_id' => $request->branch_id,
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
                'extension' => isset($request->extension) ? 1 : 0,
                'activity_id' => $request->activity_id,
                'notes' => $request->notes,
                'term' => $request->term,
                'docs' => $files
            ];

            $data = $this->httpClient->request('POST', 'requests/citizens/'.$user['phone_number'], $formData);

            $client = new \GuzzleHttp\Client([
                'base_uri' => config('app.adminURL')
            ]);

            $body = [];
            
            foreach ($files as $doc) {
                $body[] = [
                    'name' => 'docs[]',
                    'contents' => fopen(storage_path('app/public/'.$doc['file']), 'r')
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
        }

        return $data;
    }

    /**
     * Remove request
     * 
     * @param int $id
     */
    public function remove($id)
    {
        $phoneNumber = Session::get('user')['phone_number'];

        $data = $this->httpClient->request('GET', "requests/remove/$id/$phoneNumber");

        if($data['code'] !== 200) {
            Session::flash('error', $data['message']);
        }

        return $data;
    }
    
    /**
     * Pay for application
     * 
     * @param int $paymentRequestId
     */
    public function pay($paymentRequestId)
    {
        $data = $this->httpClient->request('GET', "/api/paymentPageLink/$paymentRequestId");

        return $data;
    }

    /**
     * Store company request
     */
    public function storeCompanyRequest()
    {
        # code...
    }
}