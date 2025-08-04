<?php

namespace App\Http\Controllers\Ana;

use App\Http\Controllers\Controller;
use App\Services\AttendanceService;
use App\Services\UcapanService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private $attendanceService;
    private $ucapanService;

    public function __construct(AttendanceService $attendanceService, UcapanService $ucapanService)
    {
        $this->attendanceService = $attendanceService;
        $this->ucapanService = $ucapanService;
    }

    public function index()
    {
        $fields = ['note', 'status', 'name'];
        $attendances = $this->attendanceService->getNote($fields);
        $ucapans = $this->ucapanService->getUcapanForDisplay();
        return view('ana.index', compact('attendances', 'ucapans'));
    }

    public function getName($name)
    {
        $fields = ['note', 'status', 'name'];
        $attendances = $this->attendanceService->getNote($fields);
        $ucapans = $this->ucapanService->getUcapanForDisplay();

        $name = str_replace('-', ' ', $name);

        return view('ana.invitation', compact('attendances', 'ucapans', 'name'));
    }

    public function storeUcapan(Request $request)
    {
        try {
            $ucapan = $this->ucapanService->createUcapan($request);

            return response()->json([
                'success' => true,
                'message' => 'Ucapan berhasil dikirim!',
                'data' => $ucapan
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim ucapan. Silakan coba lagi.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getUcapans()
    {
        try {
            $ucapans = $this->ucapanService->getUcapanForDisplay();

            return response()->json([
                'success' => true,
                'data' => $ucapans
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data ucapan.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
