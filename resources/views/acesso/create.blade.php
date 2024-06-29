@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar acesso</div>

                <div class="card-body">
                    <form method="post" action="{{ route('acesso.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input type="text" class="form-control" name="descricao">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">E-mail ou usuário de acesso</label>
                            <input type="text" class="form-control" name="username">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Senha de acesso</label>
                            <input type="text" class="form-control" name="senha_acesso">
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection