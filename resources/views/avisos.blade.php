@extends('layouts.externo')
@section('title', 'Minha primeira view')
@section('sidebar')
    @parent
    <hr>
@endsection
@section('content')
   <table class="table">
   <h1>Olá, {{$nome}}</h1>

   @foreach($avisos as $aviso)
   <tr><td>Aviso #{{$aviso['id']}} <br> {{$aviso['aviso']}}</td><tr>
   @endforeach

       <tr><td>Quadro de Avisos</td><tr>
       <tr><td>Aviso #1 </br> Blá Blá Blá<tr></td>
       <tr><td>Aviso #1 </br> Blá Blá Blá<tr></td>

       <?php 
            foreach($avisos as $aviso){
                echo "<tr><td>Aviso #{$aviso['id']} <br>{$aviso['aviso']}<td></tr>\n";
            }
       ?>
       </tr>
   </table>
@endsection