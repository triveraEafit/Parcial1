<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use App\Http\Requests\PilotRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PilotController extends Controller
{
    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Register Pilot';

        return view('pilots.create')->with('viewData', $viewData);
    }

    public function store(PilotRequest $request): RedirectResponse
    {
        Pilot::create($request->validated());

        return redirect()->route('pilots.index');
    }

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Pilots List';
        $viewData['pilots'] = Pilot::getAllOrderedByNitroAsc();

        return view('pilots.index')->with('viewData', $viewData);
    }

    public function statistics(): View
    {
        $viewData = [];
        $viewData['title'] = 'Pilots Statistics';
        $viewData['laCount'] = Pilot::getCountByCity('LA');
        $viewData['tokioCount'] = Pilot::getCountByCity('Tokio');
        $viewData['averageNitroLevel'] = Pilot::getAverageNitroLevel();

        return view('pilots.statistics')->with('viewData', $viewData);
    }
}
