@extends('base')
@section('title', 'Connectez-vous')
@section('content')
    <section class="page-title">
        <div class="page-title-icon" style="background-image:url({{ asset('images/icons/page-title_icon-1.png') }})"></div>
        <div class="page-title-icon-two" style="background-image:url({{ asset('images/icons/page-title_icon-2.png') }})">
        </div>
        <div class="page-title-shadow" style="background-image:url({{ asset('images/background/page-title-1.png') }})"></div>
        <div class="page-title-shadow_two" style="background-image:url({{ asset('images/background/page-title-2.png') }})">
        </div>
        <div class="auto-container">
            <h2>Se connecter maintenant</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('index') }}">Accueil</a></li>
                <li>Se connecter maintenant</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Register One -->
    <section class="register-one">
        <div class="auto-container">
            <div class="inner-container">
                <h3>Se connecter</h3>
                <div class="text">Votre adresse email ne sera pas publiée.</div>

                <!-- Register Form -->
                <div class="register-form">
                    <form method="post" action="#">

                        <div class="form-group">
                            <label>Nom*</label>
                            <input type="text" name="name" placeholder="" required="">
                        </div>

                        <div class="form-group">
                            <label>Mot de passe*</label>
                            <span class="icon fa-regular fa-eye fa-fw" id="on_see"></span>
                            <input type="password" name="password" placeholder="" required="" id="my_password">
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="check-box">
                                    <input type="checkbox" name="remember-password" id="type-1">
                                    <label for="type-1">Se souvenir de moi</label>
                                </div>
                                <a class="forgot-psw" href="#">Mot de passe oublier?</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button Box -->
                            <button type="submit" class="submit-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Se connecter maintenant</span>
                                    <span class="text-two">Se connecter maintenant</span>
                                </span>
                            </button>
                        </div>

                        <div class="form-group">
                            <div class="creat-account">Vous n'avez pas de compte? <a href="#">Créer un compte
                                    gratuit</a>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- End Default Form -->

            </div>
        </div>
    </section>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const my_password = document.getElementById('my_password');
        const on_see = document.getElementById('on_see');

        on_see.addEventListener('click', function() {
            // Change le type de l'input entre 'password' et 'text'
            if (my_password.type === 'password') {
                my_password.type = 'text';
                // Change l'icône pour indiquer que le mot de passe est visible
                on_see.classList.remove('fa-eye');
                on_see.classList.add('fa-eye-slash');
            } else {
                my_password.type = 'password';
                // Rétablit l'icône pour indiquer que le mot de passe est caché
                on_see.classList.remove('fa-eye-slash');
                on_see.classList.add('fa-eye');
            }
        });
    });
</script>
