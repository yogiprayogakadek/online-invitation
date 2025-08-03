<?php

namespace App\Repositories;

use App\Models\Ucapan;

class UcapanRepository
{
    public function getAll()
    {
        return Ucapan::latest()->get();
    }

    public function create(array $data)
    {
        return Ucapan::create($data);
    }

    public function getForDisplay()
    {
        return Ucapan::select(['nama', 'ucapan', 'kehadiran', 'created_at'])
                    ->latest()
                    ->limit(50)
                    ->get();
    }
}