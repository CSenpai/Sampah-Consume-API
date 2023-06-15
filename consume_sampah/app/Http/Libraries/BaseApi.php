<?php

namespace App\Http\Libraries;

use Illuminate\Support\Facades\Http;

class BaseApi
{
    protected $baseUrl;
    public function __construct()
    {
        $this->baseUrl = env('API_HOST');
    }
    private function client()
    {
        return Http::baseUrl($this->baseUrl);
    }

    public function data(string $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function store(string $endpoint, Array $data = [])
    {
        return $this->client()->post($endpoint, $data);
    }

    public function edit(string $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function update(string $endpoint, Array $data = [])
    {
        return $this->client()->patch($endpoint, $data);
    }

    public function delete(string $endpoint, Array $data = [])
    {
        return $this->client()->delete($endpoint, $data);
    }

    public function softDeletes(string $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }
}

?>