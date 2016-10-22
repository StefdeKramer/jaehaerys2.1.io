@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <table class="table">
                        <thead>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>User</th>
                        <th>Admin</th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <form action="{{ route('admin.assign') }}" method="post">
                                    <td>{{ $user->name }}</td>

                                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}">
                                    </td>
                                    <td><input type="checkbox"
                                               {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>

                                    <td><input type="checkbox"
                                               {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                                    {{ csrf_field() }}
                                    <td>
                                        <button type="submit">Assign Roles</button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection