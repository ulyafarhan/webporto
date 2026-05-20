<?php

namespace App\Services;

class PortfolioService
{
    public function getAllData()
    {
        $curriculum = require app_path('Data/curriculum.php');
        $projects = require app_path('Data/projects.php');

        return [
            'profile'     => require app_path('Data/profile.php'),
            'skills'      => require app_path('Data/skills.php'),
            'services'    => require app_path('Data/services.php'),
            'experiences' => require app_path('Data/experiences.php'),
            'stats'       => require app_path('Data/stats.php'),
            'projects'    => $projects,
            'curriculum'  => $curriculum,
        ];
    }
}
