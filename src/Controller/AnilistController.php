<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnilistController extends AbstractController
{
    #[Route('/anilist', name: 'app_anilist')]
    public function index(): Response
    {
        $url = "https://kitsu.io/api/edge";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        
        $responses = curl_exec($ch);
        $response =json_decode($responses,true);
        curl_close($ch);
        // $test = $response['titles'];
        // $help = json_encode($test);

        // 'anilist' => $anilist ?? [];
        // 'controller_name' => 'AnilistController';
        // 'testanilist' =>  $response['data'];
    }
}
