<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\CandidateLanguage;
use App\Models\Language;
use Illuminate\Http\Request;

class CandidateLanguageController extends Controller
{
    public function index(){
        $languages = Language::all();
        $candidateLanguages = CandidateLanguage::all();
        return view('pages.language.index', compact('languages', 'candidateLanguages'));
    }
    public function store(Request $request){
        $request->validate([
            'language_id' => 'required',
            'reading' => 'required',
            'writing' => 'required',
            'speaking' => 'required',
            'listening' => 'required',	
        ]);
        CandidateLanguage::create([
            'language_id' => $request->language_id,
            'user_id' => auth()->user()->id,
            'reading' => $request->reading,
            'writing' => $request->writing,
            'speaking' => $request->speaking,
            'listening' => $request->listening,
        ]);

        notify()->success('Language added successfully');
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $candidateLanguage = CandidateLanguage::findOrFail($id);
        $request->validate([
            'language_id' => 'required',
            'reading' => 'required',
            'writing' => 'required',
            'speaking' => 'required',
            'listening' => 'required',	
        ]);
        
        $candidateLanguage->update([
            'language_id' => $request->language_id,
            'user_id' => auth()->user()->id,
            'reading' => $request->reading,
            'writing' => $request->writing,
            'speaking' => $request->speaking,
            'listening' => $request->listening,
        ]);
        notify()->success('Language updated successfully');
        return redirect()->back();
    }

    public function destroy($id){
        $candidateLanguage = CandidateLanguage::findOrFail($id);
        $candidateLanguage->delete();
        notify()->success('Language deleted successfully');
        return redirect()->back();
    }
}
