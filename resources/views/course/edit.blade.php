@extends('course.layout.template')

@section('title', 'Página de Cadastro')


@section('content')
<h1>Editar</h1>
<form action="{{route('course.update',$user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Informe seu nome" name="name" value="{{$user->name}}">
    <button type="submit">Enviar</button>
    
</form>

<a href="{{route('course.show',$user->id)}}">
    <button type="submit">Visualizar</button>  <br>
  </a>
  <a href="{{route('course.edit',$user->id)}}">
   <button type="submit"> editar</button>     
  </a><br>
  
  <form action="{{route('course.delete',$user->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" onclick="alert('Tem certeza que deseja excluir?')">Excluir</button>
  </form>