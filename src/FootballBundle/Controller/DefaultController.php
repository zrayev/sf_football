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
            'players' => [
                [
                    'name' => 'Vasia Petrov'
                ],
                [
                    'name' => 'Petro Pavlov'
                ],
            ],
            'coach' =>  [
                'name' => 'Vasia Petrov'
            ],
        ],
        'fr' => [
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
     * @param $name
     * @return Response
     */
     public function playerAction($name)
    {
        return new Response($name);
    }

    public function teamAction($name)
    {
        return $this->render('FootballBundle:Default:team.html.twig', $this->teamsData[$name]);
    }
}
