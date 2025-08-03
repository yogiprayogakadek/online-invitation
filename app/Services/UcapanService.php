<?php

namespace App\Services;

use App\Repositories\UcapanRepository;
use Illuminate\Http\Request;

class UcapanService
{
    private $ucapanRepository;

    public function __construct(UcapanRepository $ucapanRepository)
    {
        $this->ucapanRepository = $ucapanRepository;
    }

    public function getAllUcapan()
    {
        return $this->ucapanRepository->getAll();
    }

    public function createUcapan(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'ucapan' => 'required|string|max:1000',
            'kehadiran' => 'required|in:hadir,tidak_hadir'
        ]);

        return $this->ucapanRepository->create($validatedData);
    }

    public function getUcapanForDisplay()
    {
        return $this->ucapanRepository->getForDisplay();
    }
}