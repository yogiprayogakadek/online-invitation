<?php

namespace App\Services;

use App\Repositories\AttendanceRepository;

class AttendanceService
{
    private $attendanceRepository;

    public function __construct(AttendanceRepository $attendanceRepository)
    {
        $this->attendanceRepository = $attendanceRepository;
    }

    public function getNote(array $fields)
    {
        return $this->attendanceRepository->getNote($fields ?? ['*']);
    }
}
