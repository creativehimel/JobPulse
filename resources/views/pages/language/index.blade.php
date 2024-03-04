@extends('layouts.app')
@section('page_title', 'Language Skill Details')
@section('main_content')
<div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="#">Candidate</a>
                    </li>
                    <li class="breadcrumb-item active">Language Skill</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Candidate Language Skill Details</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
                </div>
                <div class="card-body mt-3">
                    <div class="row">
                        @if ($candidateLanguages->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                            @foreach ($candidateLanguages as $key => $candidateLanguage)
                                <div class="col-md-12 mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Language {{++$key}}</h5>
                                        <div class="d-flex gap-1">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#edit'.$candidateLanguage->id.'Modal'}}">Edit</button>
                                            <form action="{{route('languages.destroy', $candidateLanguage->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger text-white">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Language :</span> <span class="fw-bold text-primary">{{$candidateLanguage->language->name}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Reading :</span> <span class="fw-bold text-primary">{{$candidateLanguage->reading}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Writing :</span> <span class="fw-bold text-primary">{{$candidateLanguage->writing}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Speaking :</span> <span><span class="fw-bold text-primary">{{$candidateLanguage->speaking}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Listening :</span> <span><span class="fw-bold text-primary">{{$candidateLanguage->listening}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @if(!($loop->last))
                                    <div class="divider divider-dashed">
                                        <div class="divider-text"><i class="ti ti-activity"></i></div>
                                    </div>
                                @endif
                                {{-- Edit Modal --}}
                                <div class="modal fade" id="{{'edit'.$candidateLanguage->id.'Modal'}}" data-bs-backdrop="static" tabindex="-2">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <form class="modal-content" method="POST" action="{{route('languages.update', $candidateLanguage->id)}}">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="backDropModalTitle">Edit Lnaguage Skill</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="language_id" class="form-label">Language Name</label>
                                                        <select name="language_id" class="form-select" id="language_id">
                                                            <option selected disabled>Select Language</option>
                                                            @foreach ($languages as $language)
                                                                <option @if($candidateLanguage->language_id == $language->id) selected @endif value="{{$language->id}}">{{$language->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="reading" class="form-label">Reading</label>
                                                        <select name="reading" class="form-select" id="reading">
                                                            <option selected disabled>Select Reading</option>
                                                                <option @if ($candidateLanguage->reading == 'high')
                                                                    selected
                                                                @endif value="high">High</option>
                                                                <option @if ($candidateLanguage->reading == 'medium')
                                                                    selected
                                                                @endif value="medium">Medium</option>
                                                                <option @if ($candidateLanguage->reading == 'low')
                                                                    selected
                                                                @endif value="low">Low</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="writing" class="form-label">Writing</label>
                                                        <select name="writing" class="form-select" id="writing">
                                                            <option selected disabled>Select Reading</option>
                                                                <option @if ($candidateLanguage->writing == 'high')
                                                                    selected
                                                                @endif value="high">High</option>
                                                                <option @if ($candidateLanguage->writing == 'medium')
                                                                    selected
                                                                @endif value="medium">Medium</option>
                                                                <option @if ($candidateLanguage->writing == 'low')
                                                                    selected
                                                                @endif value="low">Low</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="speaking" class="form-label">Speaking</label>
                                                        <select name="speaking" class="form-select" id="speaking">
                                                            <option selected disabled>Select Reading</option>
                                                                <option @if ($candidateLanguage->speaking == 'high')
                                                                    selected
                                                                @endif value="high">High</option>
                                                                <option @if ($candidateLanguage->speaking == 'medium')
                                                                    selected
                                                                @endif value="medium">Medium</option>
                                                                <option @if ($candidateLanguage->speaking == 'low')
                                                                    selected
                                                                @endif value="low">Low</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="listening" class="form-label">Listening</label>
                                                        <select name="listening" class="form-select" id="listening">
                                                            <option selected disabled>Select Reading</option>
                                                                <option @if ($candidateLanguage->listening == 'high')
                                                                    selected
                                                                @endif value="high">High</option>
                                                                <option @if ($candidateLanguage->listening == 'medium')
                                                                    selected
                                                                @endif value="medium">Medium</option>
                                                                <option @if ($candidateLanguage->listening == 'low')
                                                                    selected
                                                                @endif value="low">Low</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal modal-lg fade" id="addModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form action="{{route('languages.store')}}" method="POST" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Create Language Skill</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="language_id" class="form-label">Language Name</label>
                            <select name="language_id" class="form-select" id="language_id">
                                <option selected disabled>Select Language</option>
                                @foreach ($languages as $language)
                                    <option value="{{$language->id}}">{{$language->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="reading" class="form-label">Reading</label>
                            <select name="reading" class="form-select" id="reading">
                                <option selected disabled>Select Reading</option>
                                    <option value="high">High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="writing" class="form-label">Writing</label>
                            <select name="writing" class="form-select" id="writing">
                                <option selected disabled>Select Reading</option>
                                    <option value="high">High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="speaking" class="form-label">Speaking</label>
                            <select name="speaking" class="form-select" id="speaking">
                                <option selected disabled>Select Reading</option>
                                    <option value="high">High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="listening" class="form-label">Listening</label>
                            <select name="listening" class="form-select" id="listening">
                                <option selected disabled>Select Reading</option>
                                    <option value="high">High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary saveBtn">Save</button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
@endsection