<?php

namespace App\Module\Student\UseCase;


final class GetListStudentsInConference
{

    private string $conferenceId;
    public function setConferenceId(string $conferenceId)
    {
        $this->conferenceId = $conferenceId;
        return $this;
    }

    public function execute()
    {
    }
}
