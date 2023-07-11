@extends('admin.includes.layout')
@section('page_title', 'Drive')
    @section('container')
    <style>
        .latest_img{
            max-width:180px;
          }
          input[type=file]{
          padding:10px;
        }
</style>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
       <div class="breadcrumb-title pe-3">Drive Together</div>
       <div class="ps-3">
           <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                   <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                   </li>
                   <li class="breadcrumb-item active" aria-current="page"> @if ($id >  0)
                       Update Drive
                   @else
                       Add Drive
                   @endif</li>
               </ol>
           </nav>
       </div>
       <div class="ms-auto">
           <a href="{{url('admin/drive')}}" class="btn btn-primary float-end">Drive's List</a>
       </div>
   </div>
   <!--end breadcrumb-->
   {{-- form --}}
   <div class="row">
       <div class="col-xl-12 mx-auto">
           {{-- <h6 class="mb-0 text-uppercase">Personal Details</h6> --}}
           <hr/>
           <div class="card">
               <div class="card-body">
                   <div class="p-4 border rounded">
                    <form  method="POST" action="{{url('admin/drive/save')}}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Name</label>
                                        <input type="text" name="name" value="{{$name}}" class="form-control border border-dark border-1" placeholder="Full Name">
                                         <p class="text-danger" style="margin-left: 10px">@error('name'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Email ID</label>
                                        <input type="text" name="email" value="{{$email}}" class="form-control border border-dark border-1" placeholder="Email ID">
                                         <p class="text-danger" style="margin-left: 10px">@error('email'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Phone Number</label>
                                        <input type="number" name="mobile" value="{{$mobile}}" class="form-control border border-dark border-1" placeholder="Phone Number">
                                         <p class="text-danger" style="margin-left: 10px">@error('mobile'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Document</label> 
                                        <input type="file" name="doc"  class="form-control border border-dark border-1" accept="doc/pdf">
                                         <p class="text-danger" style="margin-left: 10px">@error('doc'){{$message}} @enderror</p>
                                         <p class="text-muted">*Upload doc & pdf only</p>
                                        @if ($id > 0)
                                            <?php $file = url("uploads/dive_together/$doc"); ?>
                                           <table>
                                            <thead>
                                                <tr>
                                                    <th>Document</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> <embed src="{{ $file }}" width="300" height="200"></td>
                                                </tr>
                                            </tbody>
                                           </table>
                                           </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 text-center my-3">
                                    @if ($id > 0)
                                         <button id="submit" type="submit" class="btn btn-primary btn-lg" onclick="return checkDelete()"> Update Drive</button>
                                    @else
                                         <button id="submit" type="submit" class="btn btn-primary btn-lg" onclick="return checkDelete()" > Add Drive</button>
                                    @endif
                                </div>
                            </div>
                         
                    </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

    @endsection
@section('custom_script')
   
@endsection