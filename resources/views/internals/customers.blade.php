@extends('layout')
@section('title', 'Customers')

@section('content')
    <h1>Customers</h1>
    
    
    <form action="customers" method="post" class="pb-5">
        <div class="input-group">
            <input type="text" name="name">            
        </div>             
        
        <div class="input-group">
            <input type="text" name="email">            
        </div>             
        
        <div> {{$errors->first('name') }} </div>
        <div> {{$errors->first('email') }} </div>
        <button type="submit">Add Customer</button>
        @csrf
        
        
        
    </form>

    @foreach($customers as $cus)
        <li>{{$cus->name}} - {{$cus->email}}</li>
    @endforeach
@endsection