@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
  <div class="bg-lighter p-3 p-sm-5 rounded">
    <h1>Hello Laravel</h1>
    <p class="lead">
      Now you see <a href="https://laravel.com">Laravel</a> demo home page.
    </p>
    <p>
      It all starts here.
    </p>
    <p>
      <a class="btn btn-lg btn-success"  href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
  @endif
@stop
