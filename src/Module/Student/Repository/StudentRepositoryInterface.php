<?php

namespace App\Module\Student\Repository;


interface StudentRepositoryInterface
{

    public function getStudentsInConference(int $conferenceId);
}
