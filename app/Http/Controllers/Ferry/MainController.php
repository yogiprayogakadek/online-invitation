<?php

namespace App\Http\Controllers\Ferry;

use App\Http\Controllers\Controller;
use App\Services\Ferry\CommentService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function index()
    {
        $comments = $this->commentService->getAllComments();
        return view('ferry.test', compact('comments'));
    }

    public function store(Request $request)
    {
        try {
            // dd($request->all());
            $data = $request->validate([
                'guest_name'   => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/',
                'message'      => 'required|string|max:1000',
                'attendance'   => 'required|in:EXCITED TO ATTEND,Tidak Hadir',
                'no_of_guest'  => 'required_if:attendance,EXCITED TO ATTEND|integer|min:1|max:2',
            ], [
                // ✅ custom message untuk guest_name
                'guest_name.required' => 'Nama tamu wajib diisi.',
                'guest_name.string'   => 'Nama tamu harus berupa teks.',
                'guest_name.max'      => 'Nama tamu tidak boleh lebih dari 100 karakter.',
                'guest_name.regex'    => 'Nama hanya boleh berisi huruf dan spasi.',

                // ✅ custom message untuk message/wishes
                'message.required' => 'Ucapan atau pesan tidak boleh kosong.',
                'message.string'   => 'Ucapan harus berupa teks.',
                'message.max'      => 'Ucapan tidak boleh lebih dari 1000 karakter.',

                // ✅ custom message untuk attendance
                'attendance.required' => 'Mohon pilih kehadiran Anda.',
                'attendance.in'       => 'Pilihan kehadiran tidak valid.',

                // ✅ custom message untuk no_of_guest
                'no_of_guest.required_if' => 'Jumlah tamu wajib diisi jika hadir.',
                'no_of_guest.integer'     => 'Jumlah tamu harus berupa angka.',
                'no_of_guest.min'         => 'Minimal jumlah tamu adalah 1.',
                'no_of_guest.max'         => 'Maksimal jumlah tamu hanya 2.',
            ]);

            $this->commentService->createComment($data);

            return response()->json([
                'success' => true,
                'message' => 'Ucapan berhasil dikirim!',
                'title' => 'Success'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Ucapan gagal dikirim! </br>' . $th->getMessage(),
                'title' => 'Failed'
            ]);
        }
    }

    public function getComment()
    {
        $comments = $this->commentService->getAllComments();
        return response()->json([
            'success' => true,
            'data' => $comments
        ]);
    }
}
