<?php

use App\Entity\MenuItem;
use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__.'/../vendor/autoload.php';

if (!isset($_SERVER['APP_ENV'])) {
    (new Dotenv())->load(__DIR__.'/../.env');
}

$kernel = new Kernel('dev', true);
$kernel->boot();

$em = $kernel->getContainer()->get('doctrine')->getManager();

$item1 = new MenuItem();
$item1->setItem('filet brancina');
$item1->setPrice(130);
$item1->setDescription('caper, baked potatoes in malvasia sauce');
$em->persist($item1);

$item2 = new MenuItem();
$item2->setItem('tune');
$item2->setPrice(155);
$item2->setDescription('Cauliflower cream, young spinach with sesame');
$em->persist($item2);

$item3 = new MenuItem();
$item3->setItem('romba');
$item3->setPrice(180);
$item3->setDescription('on potato cream, fennel & Pernod sauce');
$em->persist($item3);

$item4 = new MenuItem();
$item4->setItem('škampi');
$item4->setPrice(550);
$item4->setDescription('1 kg, probably delicious');
$em->persist($item4);

$em->flush();
