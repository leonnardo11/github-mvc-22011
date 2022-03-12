@extends('layouts.layout-exercio')
@section('title', 'Países do Mundo.')

@section('sidebar')
    @parent
    <hr>
    @if($pais)
    <div class="alert alert-danger" role="alert">
        {{pais}}
    </div>
    @else
    <div></div>
    @endif
@endsection
@section('content')
   <table class="table">
   <?php 
        foreach($paises as $pais){
            echo "<tr><td>País: #{$pais['id']} <br>{$pais['pais']} <td></tr>\n";
         }
    ?>
       </tr>
   </table>
@endsection