<?php

namespace App\Services\Ferry;

use App\Repositories\Ferry\CommentRepository;

class CommentService
{
    private $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getAllComments()
    {
        return $this->commentRepository->getAll();
    }

    public function createComment(array $data)
    {
        return $this->commentRepository->create($data);
    }

    public function getCommentsForDisplay()
    {
        return $this->commentRepository->getForDisplay();
    }
}
