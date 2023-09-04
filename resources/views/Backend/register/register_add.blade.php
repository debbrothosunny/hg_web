@extends('Backend.layouts.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User/</span> Entry</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">

            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Insert Data</h5> <small class="text-muted float-end"> <a
                                href="{{ url('/user_register') }}" class="btn btn-info">Back</a></small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user_register_store') }}" method="POST" enctype="multipart/form-data">
                            {{-- @if (Session::has('success'))
                                <div class="alert-success p-3 mb-3">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert-danger p-3 mb-3">{{ Session::get('fail') }}</div>
                            @endif --}}
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-company" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="basic-default-company" name="email"
                                        :value="old('email')" required />
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="basic-default-company" name="password"
                                        required autocomplete="password" />
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Status Mode</label>
                                <div class="col-sm-5">
                                    <select id="defaultSelect" class="form-select" name="status">
                                        <option value='1'>Admin</option>
                                        <option value='0'>User</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('category')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>
    <!-- / Content -->
@endsection
