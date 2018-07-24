@extends('layouts.manage');

@section('content')

<div class="flex-container">
    <div class="columns">
        <div class="columns">
            <h1 class="title">Kullanıcı Yönetimi</h1>
        </div>
        
    </div>
<hr class="m-t-0">

<form action="{{route('users.store')}}" method="POST">
    <div class="field">
        <label for="name" class="label">İsim</label>
        <p class="control">
            <input type="text" class="input" name="name" id="name">
        </p>
    </div>
    <div class="field">
        <label for="email" class="label">E-Posta</label>
        <p class="control">
            <input type="text" class="input" name="email" id="email">
        </p>
    </div>

    <div class="field">
        <label for="password" class="label">Şifre</label>
        <p class="control">
            <input type="text" class="input" name="password" id="password" v-if="!auto_password" placeholder="Şifre Giriniz">
            <b-checkbox name="auto_generate" class="m-t-15" :checked="true" v-model="auto_password">Otomatik Parola Oluştur</b-checkbox>
    </div>
<button class="button is-success">Kullanıcı Oluştur</button>
</form>

</div>

@endsection

@section('scripts')

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true
            }

        });
    </script>

@endsection