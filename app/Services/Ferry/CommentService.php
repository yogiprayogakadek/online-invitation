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

    public function getAllGifts()
    {
        return $this->commentRepository->getAllGifts();
    }

    public function createComment(array $data)
    {
        return $this->commentRepository->create($data);
    }

    public function createGift(array $data)
    {
        return $this->commentRepository->createGift($data);
    }

    public function getCommentsForDisplay()
    {
        return $this->commentRepository->getForDisplay();
    }

    public function delete($id)
    {
        return $this->commentRepository->delete($id);
    }
}
