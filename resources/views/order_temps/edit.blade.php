@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Order Temp
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($orderTemp, ['route' => ['orderTemps.update', $orderTemp->id], 'method' => 'patch']) !!}

                        @include('order_temps.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection