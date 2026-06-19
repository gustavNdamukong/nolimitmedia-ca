<?php

namespace Dorguzen\Services;

use Dorguzen\Models\CodingStudent;

class CodingLessonsService
{
    public function __construct(private CodingStudent $codingStudent) {}

    /**
     * Persist a session booking request.
     *
     * @param array $data {name, email, phone, age_group, start_date, language, frequency}
     */
    public function saveStudent(array $data): bool
    {
        $record = container(CodingStudent::class);

        $record->coding_student_name       = $data['name'];
        $record->coding_student_email      = $data['email'];
        $record->coding_student_phone      = $data['phone'];
        $record->coding_student_age_group  = $data['age_group'];
        $record->coding_student_start_date = $data['start_date'];
        $record->coding_student_language   = $data['language'];
        $record->coding_student_frequency  = $data['frequency'];

        return (bool) $record->save();
    }
}
