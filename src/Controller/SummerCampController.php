<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SummerCampController extends Controller
{
    public function fish()
    {
        return $this->json([
            'fish' => ['brancina', 'tune', 'romba', 'škampi']
        ]);
    }
}
