@extends('layouts.app')

@section('content')

<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Portfolio Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Portfolio List
            <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Type</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-15p">Action</th>
                 
                </tr>
              </thead>
                <tbody>
                @foreach($portfolio as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->type }}</td>
                  <td>{{ $row->title }}</td>
                  <td><img src="{{ URL::to($row->image) }}" height="70px;" width="80px;"></td>
                  <td>
                    <a href="{{ URL::to('edit/portfolio/'.$row->id) }}" class="btn btn-sm btn-info">edit</a>
                    <a href="{{ URL::to('delete/portfolio/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
                  </td>
                 
                </tr>
                @endforeach
              </tbody>
            
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->


<!--modal-->
        <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Portfolio Add</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form method="post" action="{{ route('store.portfolio') }}" enctype="multipart/form-data">
              @csrf
              <div class="modal-body pd-20">


             
                   <div class="form-group">
                   <label for="exampleInputEmail1">Select </label>
                   <select name="type" class="form-control" required="">
                     <option selected="" disabled="">Select One</option> 

                       <option value="Performance" >Performance</option> 
                       <option value="Painting" >Painting</option> 
                       <option value="Installation" >Installation</option>
                       <option value="Videos" >Videos</option>
                     
                     </select>
                   
                  </div>


              
                <div class="form-group">
                  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title"  >
                </div>
            
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control"  aria-describedby="emailHelp" placeholder="Image" name="image">
                </div>
               
              </div><!-- modal-body -->

              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
            </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->



@endsection