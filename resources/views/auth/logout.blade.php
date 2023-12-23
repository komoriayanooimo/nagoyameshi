@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <h3 class="mt-3 mb-3">ログアウトしました</h3>
 
             <hr>
             <form method="POST" action="{{ route('logout') }}">
                 @csrf
 @endsection