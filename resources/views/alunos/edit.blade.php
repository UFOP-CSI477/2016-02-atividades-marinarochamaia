@extends('layout.master')

@section('conteudo')

      <h1>Editar Aluno</h1>

      <form method="post" action="/alunos/{{ $aluno->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        Nome: <input type="text" name="nome" value="{{ $aluno->nome }}" /><br>
        Rua: <input type="text" name="rua" value="{{ $aluno->rua }}" /><br>
        Número: <input type="text" name="numero" value="{{ $aluno->numero }}" /><br>
        Bairro: <input type="text" name="bairro" value="{{ $aluno->bairro }}" /><br>
        Cidade: <input type="text" name="cidade" value="{{ $aluno->cidade }}" /><br>
        CEP: <input type="text" name="cep" value="{{ $aluno->cep }}" /><br>
        E-mail: <input type="text" name="email" value="{{ $aluno->mail }}" /><br>






        <input type="submit" value="Salvar"/>

      </form>

@endsection
