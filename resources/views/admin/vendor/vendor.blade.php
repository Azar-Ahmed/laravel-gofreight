@extends('admin.includes.layout')
@section('page_title', 'Vendor')
    @section('container')

    


    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vendor</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Vendor's List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <?php $id = 'add'; ?>
                <a href="{{url('admin/vendor-form/'.$id)}}" class="btn btn-primary float-end">Add Vendor</a>
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
                                <th>Date</th>
                                <th>Vendor Name</th>
                                <th>Amount</th>
                                <th>Reason</th>
                                <th>Remark</th>
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
                                    <td>{{ date('d M Y', strtotime($item->date)) }}</td>
                                    <td>{{ $item->vendor_name }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->reason }}</td>
                                    <td>{{ $item->remark }}</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <a href="{{ url('vendor-status/deactive/' . $item->id) }}" class="btn btn-success btn-circle btn-sm" title="Active">Active</a>
                                        @elseif ($item->status == 0)
                                            <a href="{{ url('vendor-status/active/' . $item->id) }}" class="btn btn-danger btn-circle btn-sm" title="Deactive">Deactive</a>
                                        @endif
                                    </td>                                
                                    <td class="text-center">
                                        {{-- Edit --}}
                                          <a href="{{ url('admin/vendor-form/'.$item->id) }}" class="m-1" title="Edit"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                        {{-- Delete --}}
                                         <a href="{{ url('vendor-delete/'.$item->id)}}" title="Delete" class="text-danger" onclick="return checkDelete()"><i class="fa-solid fa-trash fa-lg"></i></a>
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