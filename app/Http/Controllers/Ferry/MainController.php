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
                'guest_name' => 'required|string|max:100|regex:/^[a-zA-Z0-9\s&]+$/',
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

    public function storeGifts(Request $request)
    {
        try {
            $data = $request->validate([
                'confirm_guest_name' => 'required|string|max:100|regex:/^[a-zA-Z0-9\s&]+$/',
                'confirm_note'      => 'nullable|string|max:1000',
                'confirm_amount'  => 'integer|min:1',
            ], [
                // ✅ custom message untuk guest_name
                'confirm_guest_name.required' => 'Nama tamu wajib diisi.',
                'confirm_guest_name.string'   => 'Nama tamu harus berupa teks.',
                'confirm_guest_name.max'      => 'Nama tamu tidak boleh lebih dari 100 karakter.',
                'confirm_guest_name.regex'    => 'Nama hanya boleh berisi huruf dan spasi.',

                // ✅ custom message untuk message/wishes
                'confirm_note.required' => 'Ucapan atau pesan tidak boleh kosong.',
                'confirm_note.string'   => 'Ucapan harus berupa teks.',
                'confirm_note.max'      => 'Ucapan tidak boleh lebih dari 1000 karakter.',

                // ✅ custom message untuk no_of_guest
                'confirm_amount.min'         => 'Minimal jumlah tamu adalah 1.',
            ]);

            $this->commentService->createGift($data);

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

    // ADMIN
    public function adminIndex()
    {
        return view('ferry.admin.index');
    }

    public function getAttendance()
    {
        $comments = $this->commentService->getAllComments();

        $hadir = 0;
        $tidakHadir = 0;
        $noOfGuest = 0;

        foreach ($comments as $comment) {
            if ($comment->attendance === 'EXCITED TO ATTEND') {
                $hadir++;
                $noOfGuest += $comment->no_of_guest;
            } elseif ($comment->attendance === 'Tidak Hadir') {
                $tidakHadir++;
            }
        }

        $data = [
            'view' => view('ferry.admin.partial.kehadiran', compact('comments', 'hadir', 'tidakHadir', 'noOfGuest'))->render()
        ];

        return response()->json($data);
    }

    public function attendanceDelete(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|exists:comments,id',
            ], [
                'id.required' => 'ID komentar wajib diisi.',
                'id.exists'   => 'Komentar dengan ID tersebut tidak ditemukan.',
            ]);

            $this->commentService->delete($request->id);

            return response()->json([
                'success' => true,
                'message' => 'Komentar berhasil dihapus!',
                'title' => 'Success'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Komentar gagal dihapus! </br>' . $th->getMessage(),
                'title' => 'Failed'
            ]);
        }
    }

    public function getGift()
    {
        $gifts = $this->commentService->getAllGifts();

        $amount = 0;

        foreach ($gifts as $gift) {
            $amount += $gift->confirm_amount;
        }

        $data = [
            'view' => view('ferry.admin.partial.gift', compact('gifts', 'amount'))->render()
        ];

        return response()->json($data);
    }
}
