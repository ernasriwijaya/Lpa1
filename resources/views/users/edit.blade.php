@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit User
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
            <form method="post" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PUT')

        <div class="form-group">
          <label for="name">Name:</label>
          <textarea name="name" id="name" class="form-control">{{ $user->name }}</textarea>        
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <textarea name="email" id="user_email" class="form-control">{{ $user->email }}</textarea>
        </div>
        


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection
