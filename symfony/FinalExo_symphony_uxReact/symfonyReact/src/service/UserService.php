<?php

namespace App\Service;

use DateTimeInterface;
use DateTime;

class UserService
{
    public function calculateAge(DateTimeInterface $birthDate): int
    {
        $now = new DateTime();
        $age = $now->diff($birthDate)->y;
        return $age;
    }
}
