@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header"> 
    <h5>Users</h5>
 <a class="btn btn-primary" href="{{ route('users.index') }}"> back</a>       
  </div>


  <div class="card-body">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
       

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>

            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Timestamp:</strong>
                {{ $user->created_at}}
            </div>
        </div>
    </div>
  </div>
</div>
@endsection