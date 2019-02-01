<?php

namespace App\Policies;

use App\User;
use App\Participant;
use Illuminate\Auth\Access\HandlesAuthorization;

class ParticipantPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can update the participant.
     *
     * @param  \App\User  $user
     * @param  \App\Participant  $participant
     * @return mixed
     */
    public function update(User $user, Participant $participant)
    {
        return $participant->user_id == $user->id;
    }
}
