<?php
namespace App\Util;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class NewsAPI {
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    public function responseHandler($response) {
        if ($response) {
            return array_values(array_filter(json_decode($response, true)['articles'], function ($val) {
                foreach ($val as $field) {
                    if (is_null($field)) {
                        return false;
                    }
                }
                return true;
            }));
        }
        return [];
    }
    public function endpointRequest($url, $params) {
        try {
            $response = $this->client->request('GET', $url, ['query' => array_merge(['apiKey' => '00e1e4b3315a4fc88f9ccedca3b58bd6'], $params)]);
        } catch (GuzzleException $e) {
            return [];
        }
        return $this->responseHandler($response->getBody()->getContents());
    }
    public function topHeadlines($params) {
        return $this->endpointRequest('top-headlines', $params);
    }
    public function everything($params) {
        return $this->endpointRequest('everything', $params);
    }
    public function sources($params) {
        return $this->endpointRequest('sources', $params);
    }
}
