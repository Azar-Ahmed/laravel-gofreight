@extends('admin.includes.layout')
@section('page_title', 'Dashboard')
    @section('container')
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
           <div class="col">
             <div class="card radius-10 border-start border-0 border-3 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Customer's</p>
                            <h4 class="my-1 text-info">{{$customerCount}}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxs-group'></i>
                        </div>
                    </div>
                </div>
             </div>
           </div>
           <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-danger">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Total Quotation's</p>
                           <h4 class="my-1 text-danger">{{$quotationCount}}</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-wallet'></i>
                       </div>
                   </div>
               </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-success">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">On Going Request</p>
                           <h4 class="my-1 text-success">{{$ongoingCount}}</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
                       </div>
                   </div>
               </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-warning">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Approved Quotation's</p>
                           <h4 class="my-1 text-warning">{{$approvedCount}}</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                       </div>
                   </div>
               </div>
            </div>
          </div> 
          <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-warning">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Unapproved Quotation's</p>
                           <h4 class="my-1 text-warning">{{$unapprovedCount}}</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                       </div>
                   </div>
               </div>
            </div>
          </div> 
        </div><!--end row-->

        

                 <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Customer's</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Is Registered</th>
                        <th>Status</th>
                        <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($customers as $item)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>
                                        @if ($item->is_reg == 1)
                                        <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Completed</span>
                                        @else
                                            <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status == 1)
                                        <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Active</span>
                                        @elseif ($item->status == 0)
                                            <span class="badge bg-gradient-blooker text-white shadow-sm w-100">Deactive</span>
                                        @endif
                                    </td>         
                                    <td>{{ date('d M Y', strtotime($item->created_at)) }}</td>
                                </tr>  
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                 </div>
<hr>
<div class="card-body">
    <div class="d-flex align-items-center">
        <div>
            <h6 class="mb-0">Todays Order's</h6>
        </div>
        <div class="dropdown ms-auto">
            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Action</a>
                </li>
                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table align-middle mb-0">
        <thead class="table-light">
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>Pickup Date</th>
        <th>Pickup City</th>
        <th>Delivery City</th>
        <th>Mode of Shipment</th>
        <th>Nature Of Goods</th>
        <th>Chargable Weight</th>
        <th>Charges Per K.g</th>
        <th>Progress</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($today_order as $item)
                <?php $i++; ?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ date('d M Y', strtotime($item->pickup_date)) }}</td>
                    <td>{{ $item->pickup_city }}</td>
                    <td>{{ $item->delivery_city }}</td>
                    <td>
                        <?php 
                        $service_mode = str_replace("-", " ", $item->service_mode);
                        echo $service_mode; 
                        ?>
                        </td>
                    <td>{{ $item->goods_nature }}</td>
                    <td>
                        @if ($item->chargeable_weight == null)
                            Pending
                        @else
                        {{ $item->chargeable_weight }}</td>
                        @endif
                    <td>
                        @if ($item->chargeable_weight < 45)
                        {{$item->rate_other}}
                    
                        @elseif($item->chargeable_weight >= 45 && $item->chargeable_weight < 100)
                        {{$item->rate_45kg}}
                    
                        @elseif($item->chargeable_weight >= 100 &&  $item->chargeable_weight < 250)
                        {{$item->rate_100kg}}
                    
                        @elseif($item->chargeable_weight >= 250 &&  $item->chargeable_weight < 500)
                        {{$item->rate_250kg}}
                    
                        @elseif($item->chargeable_weight >= 500)
                        {{$item->rate_500kg}}
                        @else
                       Pending

                    @endif 
                    </td>
                    <td class="text-uppercase">
                        <?php 
                        $progress = str_replace("-", " ", $item->progress);
                        echo $progress; 
                        ?>
                    </td>
                    <td class="text-center">
                        {{-- View --}}
                          <a href="{{ url('quotation-view/'.$item->id) }}" title="View" class="text-warning m-1"><i class="fa-solid fa-eye fa-lg"></i></a>
                       </td>
                </tr>  
            @endforeach
        </tbody>
    </table>
    </div>
 </div>

            </div>


       
             </div><!--end row-->


    </div>
    @endsection
@section('custom_script')
@endsection