<?php

namespace App\Http\Controllers;

use App\Http\Resources\MpVerstkaHtmlThemeResource;
use App\Models\MpVerstkaHtmlTheme;
use App\Models\MpVerstkaHtmlWork;

class MDK1Controller extends Controller
{
    public function index() {
        $titles = MpVerstkaHtmlThemeResource::collection(MpVerstkaHtmlTheme::with('works')->get());
        return view('05-01.mp-verstka-html.index', compact('titles'));
    }

    public function show($id)
    {
        $titles = MpVerstkaHtmlThemeResource::collection(MpVerstkaHtmlTheme::with('works')->get());
        $rawWork = MpVerstkaHtmlWork::all()->where('uri', '=', $id);
        foreach ($rawWork as $rawWork2) {
            $work = $rawWork2;
        }

        if (!isset($work)) {
            return response(view('not-found'), 404);
        }

        return view('05-01.mp-verstka-html.index', compact(['titles', 'work']));
    }
}
