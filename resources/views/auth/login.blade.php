@extends('layouts.full') 

@section('content')
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
  <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
    <div class="panel">
      <div class="panel-body">
        <div class="brand">
          <img class="brand-img" src="{{ asset('images/logo-azul-02.svg') }}" alt="...">
          <h2 class="brand-text font-size-18">Plataforma</h2>
        </div>
        <form method="post" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="email" class="form-control" name="email" />
            <label class="floating-label">Email</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="password" class="form-control" name="password" />
            <label class="floating-label">Contraseña</label>
          </div>
          <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
              <input type="checkbox" id="inputCheckbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}>
              <label for="inputCheckbox">Recuérdame</label>
            </div>
            <a class="float-right" href="{{ route('password.request') }}">¿Olvidaste tu Contraseña?</a>
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Ingresar</button>
        </form>
        <p><a href="register-v3.html">Solicita tu acceso como Taller.</a></p>
      </div>
    </div>

    <footer class="page-copyright page-copyright-inverse">
      <p>Creado por <a href="http://www.tintamail.com"><b style="color: #fff353;">Tintamail</b></a></p>
      <p>© 2018. Todos los derechos reservados.</p>
      <div class="social">
        <a class="btn btn-icon btn-pure" href="https://www.twitter.com/tintamail" target="_blank">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
        <a class="btn btn-icon btn-pure" href="https://www.fb.me/tintamail" target="_blank">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>


        </a>
      </div>
    </footer>
  </div>
</div>
@endsection