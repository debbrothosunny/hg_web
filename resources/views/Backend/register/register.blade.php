@extends('Backend.layouts.app')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="row">
                <div class=" col-md-10 col-sm-8">
                    <h5 class="card-header">Data Table</h5>
                </div>
                <div class="demo-inline-spacing px-4 col-md-2 col-sm-4">
                    <a href="{{ 'user_register/add' }}" class="btn btn-info ">&nbsp; Add User</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>status</th>
                            @if (Auth::user()->status == 1)
                                <th>Actions</th>
                            @else
                            @endif
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 ">
                        @foreach ($user as $postData)
                            <tr>
                                <td>{!! $postData->name !!}</td>
                                <td>{!! $postData->email !!}</td>
                                <td>
                                    @if ($postData->status == 1)
                                        <a href="#" class="btn btn-sm btn-primary">Admin </a>
                                    @else
                                        <a href="#" class="btn btn-sm btn-success">User</a>
                                    @endif
                                </td>
                                @if (Auth::user()->status == 1)
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i
                                                    class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ url('/user_register/edit/') }}/{{ $postData->id }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                @if ($postData->status == 0)
                                                    <a class="dropdown-item"
                                                        href="{{ url('/user_register/destroy/') }}/{{ $postData->id }}"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                @else
                                                    <p style="padding: 0px 23px;color: red;">You Can't Delete Admin</p>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="container pt-3 ">
                    {!! $user->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
    </div>
    <!-- / Content -->
@endsection
