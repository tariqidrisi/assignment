@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        @can('add_users')
        <div class="pull-right" style='float: right;'>
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div>
        @endcan
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   @can('edit_users', 'delete_users')
   <th width="280px">Action</th>
   @endcan
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    @can('edit_users', 'delete_users')
    <td>
           
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger glyphicon glyphicon-trash']) !!}
        {!! Form::close() !!}
      
    </td>
    @endcan
    
  </tr>
 @endforeach
</table>


{!! $data->render() !!}


@endsection