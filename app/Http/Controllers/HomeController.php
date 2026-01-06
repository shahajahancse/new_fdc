<?php

namespace App\Http\Controllers;

use App\Models\ProjectDetail;
use App\Models\SetInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Flash;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function projectList()
    {
        $projectDetails = ProjectDetail::all();
        return view('project_entry/projectList', compact('projectDetails'));
    }

    public function projectEntry()
    {
        $info = null;
        return view('project_entry/projectEntry', compact('info'));
    }

    public function projectStore(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'producer_name' => 'required|string|max:255',
            'production_house_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'budget_amount' => 'required|numeric',
            'amount' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status' => 'required|string',
            'service_type' => 'required|string',
            'project_description' => 'required|string',
        ]);
        // Add created_by (and created_at automatically)
        $validatedData['created_by'] = Auth::id(); // or auth()->id()
        // Create a new ProjectDetail record
        ProjectDetail::create($validatedData);

        Flash::success('Project entry saved successfully!');
        return redirect()->back();
    }

    public function projectEdit(Request $request, $id)
    {
        $info = ProjectDetail::findOrFail($id);
        return view('project_entry/projectEntry', compact('info'));
    }

    public function projectUpdate(Request $request, $id)
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'producer_name' => 'required|string|max:255',
            'production_house_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'budget_amount' => 'required|numeric',
            'amount' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status' => 'required|string',
            'service_type' => 'required|string',
            'project_description' => 'required|string',
        ]);
        // Update the ProjectDetail record
        $validatedData['updated_by'] = Auth::id(); // or auth()->id()
        ProjectDetail::where('id', $id)->update($validatedData);

        Flash::success('Project entry updated successfully!');
        return redirect()->back();
    }

    public function projectDestroy($id)
    {
        ProjectDetail::destroy($id);
        Flash::success('Project entry deleted successfully!');
        return redirect()->back();
    }

    public function setInterval()
    {
        $setIntervals = SetInterval::all();
        return view('project_entry/setInterval', compact('setIntervals'));
    }

    public function setEntry()
    {
        $info = null;
        return view('project_entry.setEntry', compact('info'));
    }

    public function setStore(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'set_time' => 'required|string|max:255',
        ]);
        // Add created_by (and created_at automatically)
        $validatedData['created_by'] = Auth::id(); // or auth()->id()
        // Create a new SetInterval record
        SetInterval::create($validatedData);
        Flash::success('Set entry saved successfully!');
        return redirect()->back();
    }

    public function setEdit(Request $request, $id)
    {
        $info = SetInterval::findOrFail($id);
        return view('project_entry.setEntry', compact('info'));
    }

    public function setUpdate(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'set_time' => 'required|string|max:255',
        ]);
        // Update the SetInterval record
        $validatedData['updated_by'] = Auth::id(); // or auth()->id()
        SetInterval::where('id', $id)->update($validatedData);

        Flash::success('Set entry updated successfully!');
        return redirect(url('set-interval'));
    }

    public function displayView()
    {
        $results = ProjectDetail::where('status', 'Enabled')->get();

        $setInterval = SetInterval::latest()->first();
        $interval = !empty($setInterval->set_time) ? (int)$setInterval->set_time * 1000 : 3 * 1000;  // ms

        return view('project_entry.displayView', compact('results', 'interval'));
    }
}

