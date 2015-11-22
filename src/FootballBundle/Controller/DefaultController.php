<?php

namespace FootballBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    private $countriesData = [
        'en' => [
            'name' => 'England',
            'text' => 'gfhfgffg',
            'img'  => 'bundles/football/img/england.png'
        ],
        'fr' => [
            'name' => 'France',
            'text' => 'gfhfgffjkhg877877787g',
            'img' => 'bundles/football/img/france.png'
        ]
    ];

       private $teamsData = [
        'en' => [
            'name' => 'Team England',
            'code' => 'en',
            'players' => [
                [
                    'name' => 'Vasia Petrov'
                ],
                [
                    'name' => 'Petro Pavlov'
                ],
            ],
            'coach' =>  [
                'name' => 'Vasia Petrov',
                'text' => 'kasjdkjaskdjkasjdk',
            ],
        ],
        'fr' => [
            'code' => 'fr',
            'player' => 'England',
            'coach' => 'gfhfgffg',
        ]
    ];

    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('FootballBundle:Default:index.html.twig', [
            'countries' => $this->countriesData,
        ]);
    }

    /**
     * @param $name
     * @return Response
     */
    public function countryAction($name)
    {
        return $this->render('FootballBundle:Default:country.html.twig', $this->countriesData[$name]);
    }

    /**
     * @param $country
     * @param $id
     * @return Response
     */
     public function playerAction($country, $id)
    {
        return $this->render('FootballBundle:Default:player.html.twig', $this->teamsData[$country]['players'][$id]);
    }

    public function teamAction($name)
    {
        return $this->render('FootballBundle:Default:team.html.twig', $this->teamsData[$name]);
    }

    /**
     * @param $country
     * @return Response
     */
    public function coachAction($country)
    {
        return $this->render('FootballBundle:Default:coach.html.twig', $this->teamsData[$country]);
    }
}
