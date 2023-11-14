@extends('course.layout.template')

@section('title', 'Página de Cadastro')


@section('content')
<h1>Cadastro de Curso</h1>
<form action="{{route('course.store')}}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" placeholder="Informe seu nome" name="name" ><br><br>
    <label>Preço:</label>
    <input type="text" placeholder="Informe o valor" name="price"><br>
    <button type="submit">Enviar</button>
    
</form>



  
  

    
@endsection