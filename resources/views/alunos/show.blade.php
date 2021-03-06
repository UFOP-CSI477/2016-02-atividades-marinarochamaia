@extends('layout.master')

@section('conteudo')

      <h1>Exibir Aluno</h1>

      <form method="post" action="/alunos/{{ $aluno->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

       Nome:  {{ $aluno->nome }}<br>
       Rua: {{ $aluno->rua}}<br>
       Número: {{ $aluno->numero}}<br>
       Bairro:{{ $aluno->bairro}}<br>
       Cidade: {{ $aluno->cidade_id}}<br>
       CEP:{{ $aluno->cep}}<br>
       E-mail{{ $aluno->mail}}<br>
<br>
        <button href="/alunos/{{ $aluno->id }}/edit" class="btn btn-primary">Editar</button>

        <button type="submit" class="btn btn-danger" value="Excluir" >Excluir</button>
        <a href="/alunos" class="btn btn-primary" >Voltar</a>


      </form>

@endsection
