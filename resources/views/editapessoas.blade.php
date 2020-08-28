@extends('layout.app', ["current" => "pessoas"])

@section('body')
    <br/>
    <div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Cadastro Cliente
                    </div> 
                </div>   
                <div class="card-body">
                <form name='form1' action="/pessoas/{{$pessoas->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                           <!--  <label for="nomePessoa"> Nome </label> -->
                        <input type="text" class="form-control" name="nomePessoa" value="{{ $pessoas->nome }}" id="nomePessoa" required  placeholder="Nome"> 
                        </div>
                        <div class="form-group">
                            <!-- <label for="cpfPessoa"> CPF </label> -->
                            <input type="text" class="form-control" name="cpfPessoa"  value="{{ $pessoas->cpf }}" id="cpfPessoa" required placeholder="CPF"> 
                        </div>
                        <div class="form-group">
                            <!-- <label for="rgPessoa"> RG </label> -->
                            <input type="text" class="form-control" name="rgPessoa" value="{{ $pessoas->rg }}" id="rgPessoa" placeholder="RG"> 
                        </div>
                        <div class="form-group">
                            <label for="dataNascimento"> Data Nascimento </label>
                            <input type="date" class="form-control" name="dataNascimento" value="{{ $pessoas->data_nascimento }}" id="dataNascimento" placeholder="Data Nascimento"> 
                        </div>   
                        <div class="form-group">
                            <!-- <label for="telPessoa"> Telefone </label> -->
                            <input type="text" class="form-control" name="telPessoa" value="{{ $pessoas->telefone }}" id="telPessoa" required placeholder="Telefone"> 
                        </div>                           
                        <button type="submit" class="btn btn-primary btn-sm" > Salvar </button>
                        <button type="cancel" class="btn btn-danger btn-sm" > Cancelar </button>
                    </form>        
                </div>
            </div>
        </div> 
    </div> 
    <script language="javascript" type="text/javascript">
        function validar() {
            var ufNascimento = form1.ufNascimento.value;
            var rgPessoa = form1.rgPessoa.value;
            var cpfPessoa = form1.cpfPessoa.value;
            var dataNascimento = form1.dataNascimento.value;
            var telPessoa = form1.telPessoa.value; 
            var ufNascimento = form1.ufNascimento.value; 
            var ano_atual = new Date().getFullYear();
            var ano_informado = dataNascimento.getFullYear();
            var idade = ano_informado - ano_atual ;
           
            if (ufNascimento == 'SP' && rgPessoa=='') {
                alert('Preencha o campo com RG');
                form1.rgPessoa.focus();
                return false;
            }
            if (ufNascimento == 'BA' && (idade<18)){
                
                alert('menor de idade cadastro cancelado'); 
                form1.rgPessoa.focus();
                return false;    
            }
        }
        function retornar() {
            window.location.href = "http://localhost:8000/pessoas/novo";
        }
    </script>
       
@endsection