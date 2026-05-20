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

    public function home() { return view('home', ['data' => $this->getData()]); }
    public function about() { return view('about', ['data' => $this->getData()]); }
    public function experience() { return view('experience', ['data' => $this->getData()]); }
    public function course() { return view('course', ['data' => $this->getData()]); }

    public function courseDetail($slug)
    {
        $data = $this->getData();
        $item = collect($data['curriculum'])->firstWhere('slug', $slug);

        if (!$item) abort(404);

        $relatedProjects = collect($data['projects'])->where('curriculum_slug', $slug);

        return view('course-detail', [
            'data' => $data, 
            'item' => $item,
            'relatedProjects' => $relatedProjects
        ]);
    }
}
