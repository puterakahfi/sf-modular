<?php

namespace App\Module\Student\Repository;



class APIStudentRepository implements StudentRepositoryInterface
{
    public function getStudentsInConference(int $conferenceId)
    {

        $dbResult = [
            'message' => 'students form third party API',
            'data' =>
            [
                'conference_id' => $conferenceId,
                'fist_name' => 'john1',
                'last_name' => 'doe1',
                'email' => 'johndoe@email.com'
            ]
        ];

        return $dbResult;
    }
}
