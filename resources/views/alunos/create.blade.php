@extends('layout.master')

@section('conteudo')

        <h1>Inserir Aluno</h1>

        <form method="post" action="/alunos">

          {{ csrf_field() }}
          <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" />
          </div>
          <div class="form-group">
          <label for="rua">Rua</label>
          <input type="text" name="rua" class="form-control" />
          </div>
           <div class="form-group">
          <label for="numero">Número</label>
          <input type="text" name="numero" class="form-control" /><br>
          </div>
           <div class="form-group">
          <label for="bairro">Bairro</label>
          <input type="text" name="bairro" class="form-control" /><br>
          </div>
          <div class="form-group">
          <label for="cidade">Id da cidade</label>
          <input type="text" name="cidade_id" class="form-control" /><br>
          </div>
          <div class="form-group">
          <label for="cep">CEP</label>
          <input type="text" name="cep" class="form-control" /><br>
          </div>
          <div class="form-group">
          <label for="codigo">E-mail</label>
          <input type="text" name="mail" class="form-control" /><br>
          </div>
          <input type="submit" value="Salvar" class="btn  btn-primary"/>
          <a href="/cidades" value="Voltar" class="btn  btn-primary">Voltar</a>


</form>
@endsection
