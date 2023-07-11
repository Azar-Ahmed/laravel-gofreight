@extends('admin.includes.layout')
@section('page_title', 'Charges')
    @section('container')
    <style>
        p{
            font-size: 15px;
        }
    </style>
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Rate Manager</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Rate Manager Detail</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{url('admin/charges')}}" class="btn btn-primary float-end">Rate Manager List</a>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        @foreach ($data as $item)
                        <h3 >{{$item->company}}
                            @if ($item->status == 1)
                            <small class="text-success fs-5" title="Status"><i class="fa-solid fa-circle-check"></i></small>
                            @elseif ($item->status == 0)
                            <small class="text-danger fs-5" title="Status"><i class="fa-solid fa-circle-xmark"></i></small>
                            @endif
                        </h3>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="card-body">
                        @foreach ($data as $item)
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 my-3">
                                    <h4 class="my-3">Company Name:</h4>
                                    <p class="fs-5">{{$item->company}}</p>
                                </div>
                                <div class="col-md-3 my-3">
                                    <h4 class="my-3">Source:</h4>
                                    <p class="fs-5">{{$item->source}}</p>
                                </div>
                                <div class="col-md-3 my-3">
                                    <h4 class="my-3">Destination:</h4>
                                    <p class="fs-5">{{$item->destination}}</p>
                                </div>
                                <div class="col-md-3 my-3">
                                    <h4 class="my-3">Code:</h4>
                                    <p class="fs-5">{{$item->code}}</p>
                                </div>
                             </div>
                             <div class="row">
                                
                                <div class="col-md-2 my-3">
                                    <h4 class="my-3">Rate:</h4>
                                    <p class="fs-5">{{$item->rate}}</p>
                                </div>
                                <div class="col-md-2 my-3">
                                    <h4 class="my-3">XBC:</h4>
                                    <p class="fs-5">{{$item->xbc}}</p>
                                </div>
                                <div class="col-md-2 my-3">
                                    <h4 class="my-3">CHC:</h4>
                                    <p class="fs-5">{{$item->chc}}</p>
                                </div>
                                <div class="col-md-2 my-3">
                                    <h4 class="my-3">MBC:</h4>
                                    <p class="fs-5">{{$item->mbc}}</p>
                                </div>
                                <div class="col-md-2 my-3">
                                    <h4 class="my-3">CDC:</h4>
                                    <p class="fs-5">{{$item->cdc}}</p>
                                </div>
                             </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
 

    @endsection
@section('custom_script')
@endsection