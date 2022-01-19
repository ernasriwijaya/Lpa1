@extends('layouts.app')
 
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
 
  <div class="card uper">
  <div class="card-header">
    <a class="btn btn-secondary" href="{{ url('/home') }}"> Home</a>
    <a class="btn btn-secondary" href="{{ route('users.create') }}"> Add New Users</a>
  </div>

  <div class="card-body">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
     <table class="table table-striped">
    <thead>
        <tr>
          <td>Id</td>
          <td>Name</td>
          <td>Email</td>
          <td>Timestamp</td>
          <td colspan="3">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            <td><a class="btn btn-success" href="{{ route('users.show',$user->id) }}">Show</a></td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
</div>
  
@endsection