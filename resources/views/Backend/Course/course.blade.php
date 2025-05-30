

@extends('Backend.layouts.app')
@section('content')
    {{-- container --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Course Tables</h4>
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
                            <th>Course Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th>Fee</th>
                            <th>Instructor Name</th>
                            <th>Icon</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($course as $postData)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $postData->CatName->name }}</td>
                                <td>{{ $postData->title }}</td>
                                <td>{!! Str::limit($postData->description, '30', '...') !!}</td>
                                <td>{{ $postData->time}}</td>
                                <td>{{ $postData->fee}}</td>
                                <td>{{ $postData->instructor_name}}</td>
                                <td>{{ $postData->icon}}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{!! asset('assets/img/uploaded/course/' . $postData->icon) !!}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{!! asset('assets/img/uploaded/course/' . $postData->image) !!}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
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
                    <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('course.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-0">
                                <label for="defaultSelect" class="form-label">Course Name</label>
                                <select id="defaultSelect" name="cat_id" class="form-select">
                                    <option disabled selected >select Course</option>
                                    @foreach ($cat as $postData)
                                        <option value="{{ $postData->id }}">{{ $postData->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('cat_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
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
                        <div class="row g-2 mt-3">
                            <div class="col mb-0">
                                <label for="emailLarge" class="form-label">Course Time</label>
                                <input type="time" id="emailLarge" class="form-control" name="time"
                                    placeholder="time" />
                                <span class="text-danger">
                                    @error('time')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-0">
                                <label for="emailLarge" class="form-label">Course Fee</label>
                                <input type="number" id="emailLarge" class="form-control" name="fee"
                                    placeholder="Course Fee" />
                                <span class="text-danger">
                                    @error('fee')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col mb-0">
                                <label for="emailLarge" class="form-label">Instructor Name</label>
                                <input type="text" id="emailLarge" class="form-control" name="instructor_name"
                                    placeholder="Instructor Name" />
                                <span class="text-danger">
                                    @error('instructor_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row g-2 mt-3">
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Image</label>
                                <input type="file" id="nameLarge" class="form-control" name="image" required />
                                <span class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Icon</label>
                                <input type="file" id="nameLarge" class="form-control" name="icon" required />
                                <span class="text-danger">
                                    @error('icon')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row">
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
    @foreach ($course as $postData)
        <div class="modal fade" data-bs-backdrop="static" id="{{ 'Edit' . $postData->id . 'update' }}" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Course Update</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('course.update', $postData->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="defaultSelect" class="form-label">Course Name</label>
                                    <select id="defaultSelect" name="cat_id" class="form-select">
                                        <option disabled selected >select Course</option>
                                        @foreach ($cat as $postdata)
                                            <option value="{{ $postdata->id }}">{{ $postdata->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">
                                        @error('cat_id')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
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
                            <div class="row g-2 mt-3">
                                <div class="col mb-0">
                                    <label for="emailLarge" class="form-label">Course Time</label>
                                    <input type="time" id="emailLarge" class="form-control" name="time"
                                        value="{{ $postData->time }}" />
                                    <span class="text-danger">
                                        @error('time')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-0">
                                    <label for="emailLarge" class="form-label">Course Fee</label>
                                    <input type="number" id="emailLarge" class="form-control" name="fee"
                                        value="{{ $postData->fee }}" />
                                    <span class="text-danger">
                                        @error('fee')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col mb-0">
                                    <label for="emailLarge" class="form-label">Instructor Name</label>
                                    <input type="text" id="emailLarge" class="form-control" name="instructor_name"
                                        value="{{ $postData->instructor_name }}" />
                                    <span class="text-danger">
                                        @error('instructor_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="nameLarge" class="form-label">Icon</label>
                                    <input type="file" id="nameLarge" class="form-control" name="icon"
                                     />
                                    <span class="text-danger">
                                        @error('icon')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col mb-3">
                                    <label for="nameLarge" class="form-label">Image</label>
                                    <input type="file" id="nameLarge" class="form-control" name="image"
                                        />
                                    <span class="text-danger">
                                        @error('image')
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
    @foreach ($course as $postData)
        <div class="modal fade" data-bs-backdrop="static" id="{{ 'dlt' . $postData->id . 'delete' }}" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Header Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('course.delete', $postData->id) }}" method="get"
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
