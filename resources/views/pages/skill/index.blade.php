@extends('layouts.app')
@section('page_title', 'Skill Details')
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
                    <li class="breadcrumb-item active">Skill  Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Candidate Skill Details</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
                </div>
                <div class="card-body mt-3">
                    <div class="row">
                        <table class="table table-hover table-responsive">
                        @if ($candidateSkills->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                            <thead class="table-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($candidateSkills as $key => $candidateSkill)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>
                                                <span class="fw-medium">{{ucwords($candidateSkill->skill->name)}}</span>
                                            </td>
                                            <td>{{$candidateSkill->created_at->toFormattedDateString()}}</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="{{'#edit'.$candidateSkill->id.'Modal'}}">
                                                            <i class="ti ti-pencil me-1"></i> Edit
                                                        </button>
                                                        <form action="{{route('skills.destroy', $candidateSkill->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item delete">
                                                                <i class="ti ti-trash me-1"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                {{-- Edit Modal --}}
                                                <div class="modal fade" id="{{'edit'.$candidateSkill->id.'Modal'}}" data-bs-backdrop="static" tabindex="-2">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <form class="modal-content" method="POST" action="{{route('skills.update', $candidateSkill->id)}}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="backDropModalTitle">Edit Skill</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="skill_id" class="form-label">Skill Name</label>
                                                                        <select name="skill_id" class="form-select" id="skill_id">
                                                                            <option selected disabled>Select Country</option>
                                                                            @foreach ($skills as $skill)
                                                                                <option @if ($candidateSkill->skill->id == $skill->id)
                                                                                    selected
                                                                                @endif value="{{$skill->id}}">{{$skill->name}}</option>
                                                                            @endforeach
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
                                            </td>
                                        </tr> 
                                    @endforeach
                                </tbody>
                            @endif                              
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form action="{{route('skills.store')}}" method="POST" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Create Skill</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="skill_id" class="form-label">Skill Name</label>
                            <select name="skill_id" class="form-select" id="skill_id">
                                <option selected disabled>Select Skill</option>
                                @foreach ($skills as $skill)
                                    <option value="{{$skill->id}}">{{$skill->name}}</option>
                                @endforeach
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