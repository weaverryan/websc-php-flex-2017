<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SummerCampController extends Controller
{
    public function fish()
    {
        return $this->json([
            'fish' => ['brancina', 'tune', 'romba', 'škampi']
        ]);
    }

    /**
     * @Route("/speakers")
     */
    public function speakers(LoggerInterface $logger)
    {
        $logger->info('We are logging stuff!!!!');

        return $this->render('summer_camp/speakers.html.twig', [
            'speakers' => ['Marco', 'Paula', 'Antonio', 'Marcello']
        ]);
    }
}
