<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\News;
use App\Models\SpecificSkill;
use App\Models\Team;
use App\Models\TechnicalInternTraining;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $activities = Activitie::all();
        $teams = Team::all();
        $news = News::all();

        $technical_intern_trainings = TechnicalInternTraining::all();
        $specific_skills = SpecificSkill::all();


        $imageDirectory = public_path('data/photo/OurAchievements/');
        $achievements = [];
        if (is_dir($imageDirectory)) {
            $imageFiles = scandir($imageDirectory);
            foreach ($imageFiles as $file) {
                if (is_file($imageDirectory . '/' . $file)) {
                    $achievements[] = $file;
                }
            }
        }

        return view('welcome', compact('activities', 'teams', 'news', 'technical_intern_trainings', 'specific_skills', 'achievements'));
    }
}
