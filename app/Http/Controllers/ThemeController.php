<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    const CLASSIC = 'classic';
    const CUBA = 'cuba';

    const ALL_THEMES = [
        self::CLASSIC,
        self::CUBA,
    ];

    public function getMainView(Request $request)
    {
        $currentTheme = self::CLASSIC;
        if(isset($request->theme) && in_array($request->theme,self::ALL_THEMES)){
            $currentTheme = $request->theme;
        }
        return view('main',[
            'all_themes' => self::ALL_THEMES,
            'current_theme' => $currentTheme
        ]);
    }

    public function getContactView(Request $request)
    {
        $currentTheme = self::CLASSIC;
        if(isset($request->theme) && in_array($request->theme,self::ALL_THEMES)){
            $currentTheme = $request->theme;
        }
        return view('contacts',[
            'current_theme' => $currentTheme
        ]);
    }

}
