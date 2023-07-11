@extends('admin.includes.layout')
@section('page_title', 'Customers')
    @section('container')
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Customers</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Customer's List</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <?php $id = 'add'; ?>
                    <a href="{{url('admin/user-form/'.$id)}}" class="btn btn-primary float-end">Create New Customer</a>
                </div>
            </div>
            <!--end breadcrumb-->
           
            @if (session('success_msg'))
                <p class="message text-primary fw-bold fs-4 mb-0 text-uppercase">{{ session('success_msg') }}</p>                                          
            @endif
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Is Registered</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($data as $item)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>@if ($item->is_reg == '1')
                                            Registration Complete
                                        @else
                                        Registration Incomplete
                                        @endif</td>
                                        <td>
                                            @if ($item->status == 1)
                                                <a href="{{ url('user-status/deactive/' . $item->id) }}" class="btn btn-success btn-circle btn-sm" title="Active">Active</a>
                                            @elseif ($item->status == 0)
                                                <a href="{{ url('user-status/active/' . $item->id) }}" class="btn btn-danger btn-circle btn-sm" title="Deactive">Deactive</a>
                                            @endif
                                        </td>                                
                                        <td class="text-center">
                                            {{-- Edit --}}
                                              <a href="{{ url('admin/user-form/'.$item->id) }}" class="m-1" title="Edit"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                            {{-- View --}}
                                              <a href="{{ url('users-view/'.$item->id) }}" title="View" class="text-warning m-1"><i class="fa-solid fa-eye fa-lg"></i></a>
                                            {{-- Delete --}}
                                             <a href="{{ url('user-delete/'.$item->id)}}" title="Delete" class="text-danger" onclick="return checkDelete()"><i class="fa-solid fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@section('custom_script')

@endsection