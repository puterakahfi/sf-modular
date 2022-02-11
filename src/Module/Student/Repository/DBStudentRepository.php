<?php

namespace App\Module\Student\Repository;



class DBStudentRepository implements StudentRepositoryInterface
{
    public function getStudentsInConference(int $conferenceId)
    {

        $dbResult = [
            'message' => 'students form Database',
            'data' =>
            [
                'conference_id' => $conferenceId,
                'fist_name' => 'john',
                'last_name' => 'doe',
                'email' => 'johndoe@email.com'
            ]
        ];

        return $dbResult;
    }
}
