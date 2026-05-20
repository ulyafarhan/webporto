<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PortfolioService;

class PortfolioController extends Controller
{
    protected $portfolio;

    public function __construct(PortfolioService $portfolio)
    {
        $this->portfolio = $portfolio;
    }

    private function getData()
    {
        return $this->portfolio->getAllData();
    }

    public function home() 
    { 
        return view('home', ['data' => $this->getData()]); 
    }

    public function about() 
    { 
        return view('about', ['data' => $this->getData()]); 
    }

    public function experience() 
    { 
        return view('experience', ['data' => $this->getData()]); 
    }

    public function achievements() 
    { 
        // Mengarahkan ke view achievements
        return view('achievements', ['data' => $this->getData()]); 
    }
}