<?php

namespace App\Repositories\Ferry;

use App\Models\Comment;

class CommentRepository
{

    public function getAll()
    {
        return Comment::latest()->get();
    }

    public function create(array $data)
    {
        return Comment::create($data);
    }

    public function getForDisplay()
    {
        return Comment::select(['nama', 'ucapan', 'kehadiran', 'created_at'])
            ->latest()
            ->limit(50)
            ->get();
    }
}
