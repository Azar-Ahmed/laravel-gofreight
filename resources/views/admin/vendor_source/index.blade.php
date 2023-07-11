@extends('admin.includes.layout')
@section('page_title', 'Vendor Source')
    @section('container')

    


    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vendor Source</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Vendor Source List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <?php //$id = 'add'; ?>
                 {{--<a href="{{url('admin/vendor-form/'.$id)}}" class="btn btn-primary float-end">Add Vendor</a> --}}
            </div>
        </div>
        <!--end breadcrumb-->
       
        @if (session('success_msg'))
            <p class="message text-primary fw-bold fs-4 mb-0 text-uppercase">{{ session('success_msg') }}</p>                                          
        @endif
        <form action="{{url('vendor-source-filter')}}" method="post">
            @csrf
            <div class="row justify-content-center">
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
                  <button type="submit" class="btn btn-warning mt-3">Filter Vendor Source</button>
                </div>
                <div class="col-md-2">
                    <a href="{{url('admin/vendor-source')}}" class="btn btn-dark mt-3">Get All List</a>
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
                                <th>Ewb no</th>
                                <th>Awb no</th>
                                <th>Service Type</th>
                                <th>Date</th>
                                <th>Source</th>
                                <th>Destination</th>
                                <th>Transit</th>
                                <th>No Of Pcs</th>
                                <th>Gross Wt</th>
                                <th>Chargable Wt</th>
                                <th>Freight Amt</th>
                                <th>Other Charges</th>
                                <th>Discount Type</th>
                                <th>Discount Value</th>
                                {{-- <th>Discount Kg</th>
                                <th>Discount %</th> --}}
                                <th>Gst</th>
                                <th>Awb Amt</th>
                                <th>Discount Amt</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($ewb_source_data as $item)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->ewb_no }}</td>
                                    <td>{{ $item->source_awb_no }}</td>
                                    <td>{{ $item->source_service_type }}</td>
                                    <td>{{ date('d M Y', strtotime($item->airline_date)) }}</td>
                                    <td>{{ $item->source_origin }}</td>
                                    <td>{{ $item->source_destination }}</td>
                                    <td>{{ $item->source_transit }}</td>
                                    <td>{{ $item->source_no_of_pics }}</td>
                                    <td>{{ number_format((float)$item->source_gross_wt, 2, '.', '')}}</td>
                                    <td>{{ number_format((float)$item->source_chargeable_wt, 2, '.', '') }}</td>
                                    <td>{{ number_format((float)$item->source_freight_amt, 2, '.', '') }}</td>
                                    <td>{{  number_format((float)$item->source_other_charges, 2, '.', '')}}</td>
                                    
                                    <td>{{ $item->source_discount_type }}</td>
                                    <td>{{ number_format((float)$item->source_discount_value, 2, '.', '') }}</td>
                                    
                                    {{-- <td>{{ $item->source_discount_kg }}</td>
                                    <td>{{ $item->source_discount_percentage }}</td> --}}
                                    <td>{{ $item->source_gst }}</td>
                                    <td>{{ number_format((float)$item->source_awb_amt, 2, '.', '') }}</td>
                                    <td>{{ number_format((float)$item->source_discount_amt, 2, '.', '')}}</td>
                                    <td class="text-center"> 
                                          {{-- <a href="{{url('admin/edit-vendor-source/'.$item->id)}}" class="m-1" title="Edit"><i class="fa-solid fa-pen-to-square fa-lg"></i></a> --}}

                                        <a href="{{ url('admin/vendor-source-view/'.$item->id) }}" title="View" class="text-warning m-1"><i class="fa-solid fa-eye fa-lg"></i></a>
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