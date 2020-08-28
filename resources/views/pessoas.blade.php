@extends('layout.app', ["current" => "pessoas"])

@section('body')
    <br/>
    <div class="row">
        <div class="container col-md-9 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Lista de Clientes
                    </div> 
                </div>   
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="tabelapessoas">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>RG</th>    
                                <th>Data Nascimento</th>    
                                <th>Telefone</th>
                                <th>UF</th>   
                                <th>Editar</th>  
                                <th>Deletar</th>                                   
                            </tr> 
                            <tbody> 
                                @foreach ($pessoas as $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->nome }}</td>
                                        <td>{{ $p->cpf }}</td>
                                        <td>{{ $p->rg }}</td>
                                        <td>{{ $p->data_nascimento }}</td>
                                        <td>{{ $p->telefone }}</td>
                                        <td>{{ $p->uf_nascimento }}</td>
                                        <td>
                                        <a href="/pessoas/edita/{{ $p->id }}" class="btn btn-sm btn-primary">Editar</a>
                                        </td>
                                        <td>
                                            <a href="/pessoas/delete/{{ $p->id }}" class="btn btn-sm btn-danger">Deletar</a>
                                        </td>
                                        
                                    </tr>
                                    
                                @endforeach 
                            </tbody>     
                        </thead>    
                    </table>   
                </div>
                <div class="card-footer">
                    <a href="/pessoas/novo" class="btn btn-sm btn-primary" role="butoon">Novo Cliente</a>
                </div>
            </div>
        </div> 
    </div>       
@endsection