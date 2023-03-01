@extends('layout.app')

@section('title','Listagem')

@section('Content')


        <div class="bg-white border rounded-5">
            
            <section class="w-100 p-4 d-flex justify-content-center pb-4">
            <form style="width: 22rem;">
                <!-- Email input -->
                <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control">
                <label class="form-label" for="form2Example1" style="margin-left: 0px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço de email</font></font></label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 112.8px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control">
                <label class="form-label" for="form2Example2" style="margin-left: 0px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Senha</font></font></label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 43.2px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked="">
                    <label class="form-check-label" for="form2Example31"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lembre de mim</font></font></label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esqueceu a senha?</font></font></a>
                </div>
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrar</font></font></button>

                <!-- Register buttons -->
                <div class="text-center">
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Não é um membro? </font></font><a href="#!"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registro</font></font></a></p>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ou inscreva-se com:</font></font></p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
                </div>
            </form>
            </section>

            
            
            
            <div class="p-4 text-center border-top mobile-hidden">
            <a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#login-basic-example" role="button" aria-expanded="false" aria-controls="login-basic-example" data-ripple-color="hsl(0, 0%, 67%)">
                <i class="fas fa-code me-md-2"></i>
                <span class="d-none d-md-inline-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Mostrar código
                </font></font></span>
            </a>
            
            
                <a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)">
                <i class="fas fa-file-code me-md-2 pe-none"></i>
                <span class="d-none d-md-inline-block export-to-snippet pe-none"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Editar na caixa de areia
                </font></font></span>
                </a>
            
            </div>
            
            
        </div>

@endsection