<?php

namespace App\Http\Controllers\Mikrotik;

use App\Http\Controllers\Controller;
use App\Services\MikrotikService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $mikrotik;

    public function __construct(MikrotikService $mikrotik)
    {
        $this->mikrotik = $mikrotik;
    }

    public function index()
    {
        $interfaces = $this->mikrotik->getInterfaces();
        $hotspotUser = $this->mikrotik->getHotspotUsers();
        dd($hotspotUser);
        return view('mikrotik.index', compact('interfaces'));
    }

    public function createProfile(Request $request, MikrotikService $mikrotik)
    {
        $mikrotik->addHotspotUserProfile(
            name: $request->input('name'),
            rateLimit: $request->input('rate_limit', '512k/2M'),
            sharedUsers: $request->input('shared_users', 1),
            sessionTimeout: $request->input('timeout', '00:30:00')
        );

        return redirect()->back()->with('success', 'Profile berhasil ditambahkan');
    }
}
