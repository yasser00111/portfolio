<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $settings = $this->getSettings();

        return view('portfolio.index', [
            'settings'     => $settings,
            'devSkills'    => Skill::active()->where('category', 'development')->ordered()->get(),
            'engSkills'    => Skill::active()->where('category', 'engineering')->ordered()->get(),
            'projects'     => Project::active()->ordered()->get(),
            'experiences'  => Experience::active()->ordered()->get(),
            'webServices'  => Service::active()->where('category', 'web-development')->ordered()->get(),
            'engServices'  => Service::active()->where('category', 'engineering')->ordered()->get(),
            'testimonials' => Testimonial::active()->ordered()->get(),
        ]);
    }

    public function show(string $slug): View
    {
        $project  = Project::where('slug', $slug)->active()->firstOrFail();
        $settings = $this->getSettings();

        return view('portfolio.show', compact('project', 'settings'));
    }

    private function getSettings(): array
    {
        return SiteSetting::pluck('value', 'key')->toArray();
    }
}
