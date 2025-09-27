<?php

namespace App\Repositories\Ferry;

use App\Models\Comment;
use App\Models\Gift;

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

    public function createGift(array $data)
    {
        return Gift::create($data);
    }

    public function getAllGifts()
    {
        return Gift::latest()->get();
    }

    public function getForDisplay()
    {
        return Comment::select(['nama', 'ucapan', 'kehadiran', 'created_at'])
            ->latest()
            ->limit(50)
            ->get();
    }

    public function delete($id)
    {
        $comment = Comment::find($id);
        return $comment->delete();
    }
}
