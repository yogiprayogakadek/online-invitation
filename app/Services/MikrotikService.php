<?php

namespace App\Services;

use RouterOS\Client;
use RouterOS\Query;

class MikrotikService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'host' => config('mikrotik.host'),
            'user' => config('mikrotik.user'),
            'pass' => config('mikrotik.pass'),
            'port' => (int) config('mikrotik.port'),
        ]);
    }

    public function getInterfaces()
    {
        $query = new Query('/interface/print');
        return $this->client->query($query)->read();
    }

    public function addUser($name, $password, $profile = 'default')
    {
        $query = new Query('/ip/hotspot/user/add');
        $query->equal('name', $name)
            ->equal('password', $password)
            ->equal('profile', $profile);

        return $this->client->query($query)->read();
    }

    public function getHotspotUsers()
    {
        $query = new Query('/ip/hotspot/user/print');
        return $this->client->query($query)->read();
    }

    public function addHotspotUserProfile($name, $rateLimit = null, $sharedUsers = 1, $sessionTimeout = '00:30:00')
    {
        $query = new Query('/ip/hotspot/user/profile/add');
        $query->equal('name', $name)
            ->equal('shared-users', $sharedUsers)
            ->equal('session-timeout', $sessionTimeout);

        if ($rateLimit) {
            $query->equal('rate-limit', $rateLimit); // format: "512k/2M"
        }

        return $this->client->query($query)->read();
    }
}
