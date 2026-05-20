<?php

namespace App\Services;

class PortfolioService
{
    public function getAllData()
    {
        return [
            'profile'     => require app_path('Data/profile.php'),
            'stats'       => require app_path('Data/stats.php'),
            'services'    => require app_path('Data/services.php'),
            'skills'      => require app_path('Data/skills.php'),
            'experiences' => require app_path('Data/experiences.php'),
            'projects'    => require app_path('Data/projects.php'),
        ];
    }
}