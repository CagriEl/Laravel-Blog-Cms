@extends('layouts.manage')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Kullanıcı Yönetimi</h1>
                
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i>Kullanıcı Oluştur</a>
            </div>
        </div>
        <hr class="m-t-0">
        <div class="card-content">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                İd
                            </th>
                            <th>
                                İsim
                            </th>
                            <th>
                                E-Posta
                            </th>
                            <th>
                                Oluşturma Tarihi
                            </th>
                            <th>
                                Olay
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->toFormattedDateString()}}</td>
                            <td><a class="button is-outlined" href="{{route('users.edit', $user->id)}}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$users->links()}}
    </div>


@endsection