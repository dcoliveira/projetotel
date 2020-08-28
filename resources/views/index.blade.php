@extends('layout.app', ["current" => "home"])

@section('body')
    <br/>
    <div class="jumbotron bg-light border border-secondary">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Clientes</h5>
                    <p class="card=text">
                        Aqui você pode cadastrar os clientes.
                    </p>
                    <a href="/pessoas/novo" class="btn btn-primary"> Cadastre um Clientes</a>    
                </div> 

            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Listar Clientes</h5>
                    <p class="card=text">
                        Aqui você pode listar os clientes.
                    </p>
                    <a href="/pessoas/lista" class="btn btn-primary"> Edite um Cliente</a>    
                </div> 

            </div>
            <!-- <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Editar/Detetar Clientes</h5>
                    <p class="card=text">
                        Aqui você pode Editar/Deletar os clientes.
                    </p>
                    <a href="/clientes" class="btn btn-primary"> Delete um Cliente</a>    
                </div> 
            -->    
            </div>            
    </div>
        
@endsection