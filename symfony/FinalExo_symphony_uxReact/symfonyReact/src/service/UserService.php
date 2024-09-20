<?php

namespace App\Service;

use App\Entity\User;
use DateTime;

class UserService
{
    public function calculateAge(User $user): int
    {
        $birthDate = $user->getBirthDate();  
        $currentDate = new DateTime();  
        $age = $currentDate->diff($birthDate)->y;  
        return $age;
    }
    
    
}