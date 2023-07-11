@extends('admin.includes.layout')
@section('page_title', 'Ewb Bill')
    @section('container')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Ewb Bill</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Ewb Bill List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <?php $id = 'add'; ?>
                <a href="{{url('admin/ewb-bill')}}" class="btn btn-primary float-end">Get All Data</a>

            </div>
        </div>
        <!--end breadcrumb-->
       
        @if (session('success_msg'))
            <p class="message text-primary fw-bold fs-4 mb-0 text-uppercase">{{ session('success_msg') }}</p>                                          
        @endif
        <div class="col-md-12">
            <form action="{{url('ewb-date-filter')}}" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <label>Slect Customer</label>
                        <select class="form-select form-select-sm" name="user_id" aria-label="Default select example" required>
                        <option selected disabled>Select Customer</option>
                        @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                        <p class="text-danger"> @error('user_id'){{ $message }} @enderror</p>
                    </div>  
                    <div class="col-md-2">
                        <label>From</label>
                        <input type="date" name="first_date" class="form-control form-control-sm" placeholder="First Data" required>
                        <p class="text-danger"> @error('first_date'){{ $message }} @enderror</p>
                    </div>
                    <div class="col-md-2">
                        <label>To</label>
                        <input type="date" name="second_date" class="form-control form-control-sm" placeholder="Second Data" required>
                        <p class="text-danger"> @error('second_date'){{ $message }} @enderror</p>
                    </div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-warning mt-3">Filter</button>
                    </div>
                </div>
            </form>
        </div>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Awb No</th>
                                <th>Shipper Name</th>
                                <th>Pics</th>
                                <th>Gross Wt</th>
                                <th>Chargable Wt</th>
                                <th>Rate Kg</th>
                                <th>Total Amt</th>
                                <th>Other Charges</th>
                                <th>GST</th>
                                <th>Taxes GST/ S & C</th>
                                <th>Grand Total</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($ewb_data as $item)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ date('d M Y', strtotime($item->issuing_date)) }}</td>
                                    <td>{{ $item->awb_no }}</td>
                                    <td>{{ $item->shipper_name }}</td>
                                    <td>{{ $item->no_of_pcs }}</td>
                                    <td>{{ number_format((float)$item->gr_wt, 2, '.', '')}}</td>
                                    <td>{{ number_format((float)$item->chargable_wt, 2, '.', '')}}</td>
                                    <td>{{ number_format((float)$item->rate_kg, 2, '.', '')}}</td>
                                    <td>{{ number_format((float)$item->total_amt, 2, '.', '')}}</td>
                                    <td>{{ number_format((float)$item->other_charges, 2, '.', '')}}</td>
                                    <td>{{ $item->gst }}</td>
                                    <td>{{ number_format((float)$item->taxes_gst, 2, '.', '')}}</td>
                                    <td>{{ number_format((float)$item->grand_total, 2, '.', '')}}</td>

                                                            
                                    <td class="text-center">
                                          <a href="{{ url('admin/edit-ewb/'.$item->id) }}" class="btn btn-info btn-sm m-1" title="Edit">Edit</a>
                                          <a href="{{ url('admin/print-ewb-bill/'.$item->id) }}" class="btn btn-warning btn-sm" target="_blank">Generate PDF</a>
                                         {{-- <a href="{{ url('ewb-delete/'.$item->id)}}" title="Delete" class="text-danger" onclick="return checkDelete()"><i class="fa-solid fa-trash fa-lg"></i></a> --}}
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