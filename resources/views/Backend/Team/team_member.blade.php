@extends('Backend.layouts.app')
@section('content')
    {{-- container --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Team Member Tables</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="mt-4 mb-3">
                <nav class="navbar navbar-example navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbar-ex-4">
                            <div class="navbar-nav me-auto">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#largeModal">Add Modal</button>
                            </div>
                            <form class="d-flex">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Description</th>
                            <th>Facebook</th>
                            <th>Whatsapp</th>
                            <th>Instagram</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($team as $postData)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $postData->name }}</td>
                                <td>{!! Str::limit($postData->position, '30', '...') !!}</td>
                                <td>{!! Str::limit($postData->description, '30', '...') !!}</td>
                                <td>{!! Str::limit($postData->social_1, '30', '...') !!}</td>
                                <td>{!! Str::limit($postData->social_2, '30', '...') !!}</td>
                                <td>{!! Str::limit($postData->social_3, '30', '...') !!}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{!! asset('assets/img/uploaded/team/' . $postData->image) !!}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="{{'#Edit'.$postData->id.'update'}}"><i
                                    class="bx bx-edit-alt me-1"></i></button>

                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="{{'#dlt'.$postData->id.'delete'}}"><i class="bx bx-trash me-1"></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th class="text-center">Data Not Found</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
    {{-- container End  --}}
    {{-- Add Modal  --}}
    <!-- Addd Modal -->
    <div class="modal fade" data-bs-backdrop="static" id="largeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('team.member.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailLarge" class="form-label">Name</label>
                                <input type="text" id="emailLarge" class="form-control" name="name"
                                    placeholder="Name" />
                                <span class="text-danger">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Position</label>
                                <input type="text" id="dobLarge" class="form-control" name="position"
                                    placeholder="Position" />
                                <span class="text-danger">
                                    @error('position')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Description</label>
                                    <textarea name="description" id="" class="form-control"></textarea>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Facebook Link</label>
                                <input type="text" id="dobLarge" class="form-control" name="social_1"
                                    placeholder="Facebook Link" />
                                <span class="text-danger">
                                    @error('social_1')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">WhatsApp</label>
                                <input type="text" id="dobLarge" class="form-control" name="social_2"
                                    placeholder="WhatsApp Link" />
                                <span class="text-danger">
                                    @error('social_2')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Instagram Link</label>
                                <input type="text" id="dobLarge" class="form-control" name="social_3"
                                    placeholder="Instagram Link" />
                                <span class="text-danger">
                                    @error('social_3')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Image</label>
                                <input type="file" id="nameLarge" class="form-control" name="image" />
                                <span class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal  --}}
    <!-- Update Modal -->
    @foreach ($team as $postData)
        <div class="modal fade" data-bs-backdrop="static" id="{{'Edit'.$postData->id.'update'}}" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Header Update</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('team.member.update',$postData->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="emailLarge" class="form-label">Name</label>
                                    <input type="text" id="emailLarge" class="form-control" name="name"
                                        value="{{ $postData->name }}" />
                                    <span class="text-danger">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Position</label>
                                    <input type="text" id="dobLarge" class="form-control" name="position"
                                    value="{{ $postData->position }}" />
                                    <span class="text-danger">
                                        @error('position')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Description</label>
                                        <textarea name="description" id="" class="form-control">{{ $postData->description }}</textarea>
                                    <span class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Facebook Link</label>
                                    <input type="text" id="dobLarge" class="form-control" name="social_1"
                                        value="{{ $postData->social_1 }}" />
                                    <span class="text-danger">
                                        @error('social_1')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">WhatsApp</label>
                                    <input type="text" id="dobLarge" class="form-control" name="social_2"
                                    value="{{ $postData->social_2 }}" />
                                    <span class="text-danger">
                                        @error('social_2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Instagram Link</label>
                                    <input type="text" id="dobLarge" class="form-control" name="social_3"
                                    value="{{ $postData->social_3 }}" />
                                    <span class="text-danger">
                                        @error('social_3')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-3">
                                    <label for="nameLarge" class="form-label">Image</label>
                                    <input type="file" id="nameLarge" class="form-control" name="image" />
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- End Modal  --}}
    <!-- Delete Modal -->
    @foreach ($team as $postData)
        <div class="modal fade" data-bs-backdrop="static" id="{{'dlt'.$postData->id.'delete'}}" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">About Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('team.member.delete',$postData->id) }}" method="get" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <h5 class="text-center">Are You Sure?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- End Modal  --}}
@endsection
