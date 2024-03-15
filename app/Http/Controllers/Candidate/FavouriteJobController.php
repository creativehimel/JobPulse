<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\FavouriteJob;
use Illuminate\Http\Request;

class FavouriteJobController extends Controller
{
    public function index()
    {
        $favouriteJobs = FavouriteJob::with('job')->where('user_id', auth()->user()->id)->get();
        return view('pages.favourite.index', compact('favouriteJobs'));
    }

    public function store(Request $request)
    {
        $count = FavouriteJob::where('job_id', $request->job_id)->where('user_id', auth()->user()->id)->count();
        if ($count > 0) {
            notify()->warning('Already Added');
            return redirect()->back();
        }else{
        $request->validate([
            'job_id' => 'required',
        ]);

        $user_id = auth()->user()->id;
        FavouriteJob::create([
            'user_id' => $user_id,
            'job_id' => $request->job_id
        ]);
        notify()->success('Job added to favourite successfully');
        return redirect('/candidate/favourite-jobs');
        }
    }

    public function destroy($id)
    {
        $favouriteJob = FavouriteJob::findOrFail($id);
        $favouriteJob->delete();
        notify()->success('Job removed from favourite successfully');
        return redirect()->back();
    }
}
