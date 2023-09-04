@extends('Backend.layouts.app')
@section('content')
    {{-- container --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> trainer Tables</h4>
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
                            <th>Title</th>
                            <th>Description</th>
                            <th>Traniner 1 Profile</th>
                            <th>Traniner 1 Name</th>
                            <th>Traniner 1 FaceBook Link</th>
                            <th>Traniner 2 Profile</th>
                            <th>Traniner 2 Name</th>
                            <th>Traniner 2 FaceBook Link</th>
                            <th>Traniner 3 Profile</th>
                            <th>Traniner 3 Name</th>
                            <th>Traniner 3 FaceBook Link</th>
                            <th>Traniner 4 Profile</th>
                            <th>Traniner 4 Name</th>
                            <th>Traniner 4 FaceBook Link</th>
                            <th>Traniner 5 Profile</th>
                            <th>Traniner 5 Name</th>
                            <th>Traniner 5 FaceBook Link</th>
                            <th>Traniner 6 Profile</th>
                            <th>Traniner 6 Name</th>
                            <th>Traniner 6 FaceBook Link</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($trainer as $postData)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $postData->title }}</td>
                                <td>{!! Str::limit($postData->description, '30', '...') !!}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_1) !!}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $postData->name_1 }}</td>
                                <td>{!! Str::limit($postData->fb_1, '30', '...') !!}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_2) !!}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $postData->name_2 }}</td>
                                <td>{!! Str::limit($postData->fb_2, '30', '...') !!}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_3) !!}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $postData->name_3 }}</td>
                                <td>{!! Str::limit($postData->fb_3, '30', '...') !!}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_4) !!}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $postData->name_4 }}</td>
                                <td>{!! Str::limit($postData->fb_4, '30', '...') !!}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_5) !!}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $postData->name_5 }}</td>
                                <td>{!! Str::limit($postData->fb_5, '30', '...') !!}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_6) !!}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $postData->name_6 }}</td>
                                <td>{!! Str::limit($postData->fb_6, '30', '...') !!}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="{{ '#Edit' . $postData->id . 'update' }}"><i
                                            class="bx bx-edit-alt me-1"></i></button>

                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="{{ '#dlt' . $postData->id . 'delete' }}"><i
                                            class="bx bx-trash me-1"></i></button>
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

    <!-- Addd Modal -->
    <div class="modal fade" data-bs-backdrop="static" id="largeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Traine Insert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('trainer.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-0">
                                <label for="emailLarge" class="form-label">Title</label>
                                <input type="text" id="emailLarge" class="form-control" name="title"
                                    placeholder="Title" />
                                <span class="text-danger">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-0">
                                <label for="emailLarge" class="form-label">Description</label>
                                <textarea name="description" class="form-control"></textarea>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Traniner 1 Profile <span>80*80</span></label>
                                <input type="file" id="nameLarge" class="form-control" name="image_1" />
                                <span class="text-danger">
                                    @error('image_1')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Name</label>
                                <input type="text" id="dobLarge" class="form-control" name="name_1"
                                    placeholder="Name" />
                                <span class="text-danger">
                                    @error('name_1')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Facebook Link</label>
                                <input type="text" id="dobLarge" class="form-control" name="fb_1"
                                    placeholder="Facebook Link" />
                                <span class="text-danger">
                                    @error('fb_1')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Traniner 2 Profile <span>80*80</span></label>
                                <input type="file" id="nameLarge" class="form-control" name="image_2" />
                                <span class="text-danger">
                                    @error('image_2')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Name</label>
                                <input type="text" id="dobLarge" class="form-control" name="name_2"
                                    placeholder="Name" />
                                <span class="text-danger">
                                    @error('name_2')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Facebook Link</label>
                                <input type="text" id="dobLarge" class="form-control" name="fb_2"
                                    placeholder="Facebook Link" />
                                <span class="text-danger">
                                    @error('fb_2')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Traniner 3 Profile <span>80*80</span></label>
                                <input type="file" id="nameLarge" class="form-control" name="image_3" />
                                <span class="text-danger">
                                    @error('image_3')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Name</label>
                                <input type="text" id="dobLarge" class="form-control" name="name_3"
                                    placeholder="Name" />
                                <span class="text-danger">
                                    @error('name_3')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Facebook Link</label>
                                <input type="text" id="dobLarge" class="form-control" name="fb_3"
                                    placeholder="Facebook Link" />
                                <span class="text-danger">
                                    @error('fb_3')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Traniner 4 Profile <span>80*80</span></label>
                                <input type="file" id="nameLarge" class="form-control" name="image_4" />
                                <span class="text-danger">
                                    @error('image_4')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Name</label>
                                <input type="text" id="dobLarge" class="form-control" name="name_4"
                                    placeholder="Name" />
                                <span class="text-danger">
                                    @error('name_4')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Facebook Link</label>
                                <input type="text" id="dobLarge" class="form-control" name="fb_4"
                                    placeholder="Facebook Link" />
                                <span class="text-danger">
                                    @error('fb_4')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Traniner 5 Profile <span>80*80</span></label>
                                <input type="file" id="nameLarge" class="form-control" name="image_5" />
                                <span class="text-danger">
                                    @error('image_5')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Name</label>
                                <input type="text" id="dobLarge" class="form-control" name="name_5"
                                    placeholder="Name" />
                                <span class="text-danger">
                                    @error('name_5')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Facebook Link</label>
                                <input type="text" id="dobLarge" class="form-control" name="fb_5"
                                    placeholder="Facebook Link" />
                                <span class="text-danger">
                                    @error('fb_5')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Traniner 6 Profile <span>80*80</span></label>
                                <input type="file" id="nameLarge" class="form-control" name="image_6" />
                                <span class="text-danger">
                                    @error('image_6')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Name</label>
                                <input type="text" id="dobLarge" class="form-control" name="name_6"
                                    placeholder="Name" />
                                <span class="text-danger">
                                    @error('name_6')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="dobLarge" class="form-label">Facebook Link</label>
                                <input type="text" id="dobLarge" class="form-control" name="fb_6"
                                    placeholder="Facebook Link" />
                                <span class="text-danger">
                                    @error('fb_6')
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
    @foreach ($trainer as $postData)
        <div class="modal fade" data-bs-backdrop="static" id="{{ 'Edit' . $postData->id . 'update' }}" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">trainer Update</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('trainer.update', $postData->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-0">
                                    <label for="emailLarge" class="form-label">Title</label>
                                    <input type="text" id="emailLarge" class="form-control" name="title"
                                        value="{{ $postData->title }}" />
                                    <span class="text-danger">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-0">
                                    <label for="emailLarge" class="form-label">Description</label>
                                    <textarea name="description" class="form-control">{{ $postData->description }}</textarea>
                                    <span class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameLarge" class="form-label">Traniner 1 Profile <span>80*80</span></label>
                                    <input type="file" id="nameLarge" class="form-control" name="image_1" />
                                    <span class="text-danger">
                                        @error('image_1')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Name</label>
                                    <input type="text" id="dobLarge" class="form-control" name="name_1"
                                        value="{{ $postData->name_1 }}" />
                                    <span class="text-danger">
                                        @error('name_1')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Facebook Link</label>
                                    <input type="text" id="dobLarge" class="form-control" name="fb_1"
                                    value="{{ $postData->fb_1 }}" />
                                    <span class="text-danger">
                                        @error('fb_1')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameLarge" class="form-label">Traniner 2 Profile <span>80*80</span></label>
                                    <input type="file" id="nameLarge" class="form-control" name="image_2" />
                                    <span class="text-danger">
                                        @error('image_2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Name</label>
                                    <input type="text" id="dobLarge" class="form-control" name="name_2"
                                    value="{{ $postData->name_2 }}" />
                                    <span class="text-danger">
                                        @error('name_2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Facebook Link</label>
                                    <input type="text" id="dobLarge" class="form-control" name="fb_2"
                                    value="{{ $postData->fb_2 }}" />
                                    <span class="text-danger">
                                        @error('fb_2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameLarge" class="form-label">Traniner 3 Profile <span>80*80</span></label>
                                    <input type="file" id="nameLarge" class="form-control" name="image_3" />
                                    <span class="text-danger">
                                        @error('image_3')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Name</label>
                                    <input type="text" id="dobLarge" class="form-control" name="name_3"
                                    value="{{ $postData->name_3 }}" />
                                    <span class="text-danger">
                                        @error('name_3')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Facebook Link</label>
                                    <input type="text" id="dobLarge" class="form-control" name="fb_3"
                                    value="{{ $postData->fb_3 }}" />
                                    <span class="text-danger">
                                        @error('fb_3')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameLarge" class="form-label">Traniner 4 Profile <span>80*80</span></label>
                                    <input type="file" id="nameLarge" class="form-control" name="image_4" />
                                    <span class="text-danger">
                                        @error('image_4')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Name</label>
                                    <input type="text" id="dobLarge" class="form-control" name="name_4"
                                    value="{{ $postData->name_4 }}" />
                                    <span class="text-danger">
                                        @error('name_4')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Facebook Link</label>
                                    <input type="text" id="dobLarge" class="form-control" name="fb_4"
                                    value="{{ $postData->fb_4 }}" />
                                    <span class="text-danger">
                                        @error('fb_4')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameLarge" class="form-label">Traniner 5 Profile <span>80*80</span></label>
                                    <input type="file" id="nameLarge" class="form-control" name="image_5" />
                                    <span class="text-danger">
                                        @error('image_5')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Name</label>
                                    <input type="text" id="dobLarge" class="form-control" name="name_5"
                                    value="{{ $postData->name_5 }}" />
                                    <span class="text-danger">
                                        @error('name_5')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Facebook Link</label>
                                    <input type="text" id="dobLarge" class="form-control" name="fb_5"
                                    value="{{ $postData->fb_5 }}" />
                                    <span class="text-danger">
                                        @error('fb_5')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameLarge" class="form-label">Traniner 6 Profile <span>80*80</span></label>
                                    <input type="file" id="nameLarge" class="form-control" name="image_6" />
                                    <span class="text-danger">
                                        @error('image_6')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Name</label>
                                    <input type="text" id="dobLarge" class="form-control" name="name_6"
                                    value="{{ $postData->name_6 }}" />
                                    <span class="text-danger">
                                        @error('name_6')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobLarge" class="form-label">Facebook Link</label>
                                    <input type="text" id="dobLarge" class="form-control" name="fb_6"
                                    value="{{ $postData->fb_6 }}" />
                                    <span class="text-danger">
                                        @error('fb_6')
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
    @foreach ($trainer as $postData)
        <div class="modal fade" data-bs-backdrop="static" id="{{ 'dlt' . $postData->id . 'delete' }}" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Header Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('trainer.delete', $postData->id) }}" method="get"
                        enctype="multipart/form-data">
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
