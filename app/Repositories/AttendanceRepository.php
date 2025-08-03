<?php

namespace App\Repositories;

use App\Models\Attendance;

class AttendanceRepository
{
    public function getNote(array $fields)
    {
        return Attendance::select($fields)->latest()->get();
    }
}
