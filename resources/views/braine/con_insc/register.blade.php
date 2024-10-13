@extends('base')
@section('title', 'Inscrivez-vous')
@section('content')
    <section class="register-one">
        <div class="auto-container">
            <div class="inner-container">
                <h3>Inscription</h3>
                <div class="text">Votre adresse email ne sera pas publiée.</div>

                <!-- Register Form -->
                <div class="register-form">
                    <form method="post" action="contact.html">

                        <div class="form-group">
                            <label>Nom*</label>
                            <input type="text" name="name" placeholder="" required="">
                        </div>

                        <div class="form-group">
                            <label>Email*</label>
                            <input type="text" name="email" placeholder="" required="">
                        </div>

                        <div class="form-group">
                            <label>Mot de passe*</label>
                            <span class="icon fa-regular fa-eye fa-fw" style="cursor: pointer" id="on_see"></span>
                            <input type="password" name="password" placeholder="" required="" id="my_password">
                        </div>

                        <div class="form-group">
                            <!-- Button Box -->
                            <button type="submit" class="btn-style-one submit-btn template-btn">
                                <span class="btn-wrap">
                                    <span class="text-one">S'inscrire</span>
                                    <span class="text-two">S'inscrire</span>
                                </span>
                            </button>
                        </div>

                        <div class="form-group">
                            <div class="creat-account">Avez-vous déjà un compte? <a
                                    href="{{ route('braine.con_insc.login') }}">Se connecter</a></div>
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
