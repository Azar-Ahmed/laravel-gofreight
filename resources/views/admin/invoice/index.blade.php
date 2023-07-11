@extends('admin.includes.layout')
@section('page_title', 'Invoice')
    @section('container')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Invoice</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <?php $id = 'add'; ?>
                <a href="{{url('admin/invoice-form/'.$id)}}" class="btn btn-primary float-end">Generate Invoice</a>
            </div>
        </div>
        <!--end breadcrumb-->
       
        @if (session('success_msg'))
            <p class="message text-primary fw-bold fs-4 mb-0 text-uppercase">{{ session('success_msg') }}</p>                                          
        @endif
        <form action="{{url('invoice-filter')}}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <label>Select Client Name</label>
                    <select class="form-select form-select-sm" name="client_name" aria-label="Default select example" required>
                    <option selected disabled>Select Client</option>
                        @foreach ($clients as $client)
                            <option value="{{$client->client_name}}">{{$client->client_name}}</option>
                        @endforeach     
                    </select>
                    <p class="text-danger"> @error('client_name'){{ $message }} @enderror</p>
                </div> 
                <div class="col-md-2">
                    <label>Select Invoice Status</label>
                    <select class="form-select form-select-sm" name="invoice_status" aria-label="Default select example" required>
                            <option selected disabled>All</option>
                            <option value="Paid">Paid</option>
                            <option value="Pending">Pending</option>
                    </select>
                    <p class="text-danger"> @error('invoice_status'){{ $message }} @enderror</p>
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
                  <button type="submit" class="btn btn-warning mt-3">Filter Invoice</button>
                </div>
                <div class="col-md-2">
                    <a href="{{url('admin/invoice')}}" class="btn btn-dark mt-3">Get All Invoice</a>
                </div>
            </div>
        </form>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Invoice No</th>
                                <th>Client Name</th>
                                <th>Inv Amt</th>
                                <th>Inv Status</th>
                                <th>Payment Date</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Payment Method</th>
                                <th>TDS</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($data as $item)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{$item->invoice_no}}</td>
                                    <td>{{ $item->client_name }}</td>
                                    <td>{{ $item->invoice_amt }}</td>
                                    <td>{{ $item->invoice_status }}</td>
                                    <td>{{ date('d M Y', strtotime($item->payment_date)) }}</td>
                                    <td>{{ date('d M Y', strtotime($item->from_date)) }}</td>
                                    <td>{{ date('d M Y', strtotime($item->to_date)) }}</td>
                                    <td>{{ $item->payment_method }}</td>
                                    <td>{{ $item->tds }}</td>

                                    <td class="text-center">
                                        <a href="{{ url('admin/invoice-view/'.$item->id) }}" title="View" class="text-warning m-1"><i class="fa-solid fa-eye fa-lg"></i></a>
                                        <a href="{{ url('admin/invoice-form/'.$item->id) }}" class="m-1" title="Edit"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                        <a href="{{ url('invoice-delete/'.$item->id)}}" title="Delete" class="text-danger" onclick="return checkDelete()"><i class="fa-solid fa-trash fa-lg"></i></a>
                                    
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