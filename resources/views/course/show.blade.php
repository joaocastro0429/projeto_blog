@extends('course.layout.template')

@section('title','visualizar')

@section('content')

<h1>Visualizar</h1>
<p>
    ID:{{$user->id}}
</p>
<p>
    NOME:{{$user->name}}
</p>

<a href="{{route('course.show',$user->id)}}">
   <br> <button type="submit">Visualizar</button> 
</a>
  <a href="{{route('course.edit',$user->id)}}">
   <button type="submit"> editar</button>     
  </a>
  
  <form action="{{route('course.delete',$user->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" onclick="alert('Tem certeza que deseja excluir?')">Excluir</button>
  </form>


    
@endsection