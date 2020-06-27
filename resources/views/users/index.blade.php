@extends('layouts.app')

@section('content')
<div class="container">
    
	<!-- @foreach($users as $user)
        {{ $user->name }}
        <br>
        {{ $user->email }}
    @endforeach -->
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Quản Lý User</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
					@foreach($users as $user)
                    <tr>
                      <td>{{$user->name}}</td>
                       <td>{{$user->email}}</td>
                      <td>
                      	<i class="fa fa-edit"></i>&nbsp;
                      	<i class="fa fa-trash"></i>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</div>
@endsection
