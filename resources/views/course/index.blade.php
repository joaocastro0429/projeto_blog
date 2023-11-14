@extends('course.layout.template')


@section('title','listagem')


@section('content')

<h1>Listagem</h1>

<a href="{{route('course.create')}}">cadastrar</a>

@foreach ($users as $user)
<p>

</p>
<p>
   NOME: {{$user->name}}
</p>
<p>
        PREÇO: {{ 'R$ ' . number_format($user->price, 2, ',', '.') }}<br></p>
<hr>


<a href="{{route('course.show',$user->id)}}">
  <button type="submit">Visualizar</button>  
</a><br>
<a href="{{route('course.edit',$user->id)}}">
 <button type="submit"> editar</button>     
</a><br>

<form action="{{route('course.delete',$user->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="alert('Tem certeza que deseja excluir?')">Excluir</button>
</form>
    
@endforeach
    
@endsection