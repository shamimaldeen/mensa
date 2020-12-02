@extends('layouts.app')

@section('content')

   <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Portfolio Update</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Portfolio Update
          	
          </h6>
          <br>
          <div class="table-wrapper">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form method="post" action="{{ url('update/portfolio/'.$portfolio->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="modal-body pd-20">
                   <div class="form-group">
                   <label for="exampleInputEmail1">Select </label>
                   <select name="type" class="form-control" required="">
                     <option selected="" disabled="">Select One</option> 

                       <option value="Performance" @if($portfolio->type = "Performance") selected="" @endif >Performance</option> 
                       <option value="Painting" @if($portfolio->type = "Painting") selected="" @endif  >Painting</option> 
                       <option value="Installation" @if($portfolio->type = "Installation") selected="" @endif  >Installation</option> 
                       <option value="Videos" @if($portfolio->type = "Videos") selected="" @endif  >Videos</option> 
                     </select>
                   
                  </div>
               
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Old Image</label>
                 <img src="{{ URL::to($portfolio->image) }}" style="height: 70px; width: 90px;">
                 <input type="hidden" name="old_logo" value="{{ $portfolio->image }}">
                </div>
              </div><!-- modal-body -->



              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Update</button>
              </div>
            </form>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

@endsection