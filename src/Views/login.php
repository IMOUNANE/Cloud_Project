<link rel="stylesheet" href="css/config/fonts.css"/>
<link rel="stylesheet" href="css/login.css"/>

<section class="container">
    <article class="content">
        <div >
            <a href="index.php"><img class="iconClose" src="assets/icon/icon-close.svg" alt=""></a>
        </div>
        <div class="signin">
            <div class="titleLogin">
                <h1 class="contenttitleLogin">Connectez-vous à SERENITY</h1>
            </div>
            <div class="contentLogin">
                <div>
                    <form action="?url=checkuser" method="POST">
                        <div class="contentInput">
                            <p>
                                <label for="email"></label>
                                <img class="iconLogin" src="assets/icon/icon-email.svg" alt="icon email">
                                <input class="inputSignUp" name="login" type="text" placeholder="Email" required/>
                            </p>
                        </div>
                        <div class="contentInput">
                            <p>
                                <label for="password"></label>
                                <img class="iconLogin" src="assets/icon/icon-password.svg" alt="icon password">
                                <input class="inputSignUp" name="password" type="password" placeholder="Mot de passe" required/>
                            </p>
                        </div>

                        <div class="contentLogin BtnSignUp">
                            <button class="btnLogin" type="submit">Se connecter</button>
                        </div>

                        <div class="contentLogin contentForgotPass">
                            <a class="forgotPassword" href=""><p>Mot de passe oublié, cliquez ici !</p></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
    
    <article class="content">
        <div class="signupBis">
            <div class="titleLogin titleRegister contentLogin">
                <div>           
                    <h1 class="contenttitleLogin" class="titleFirst">Hello !</h1>
                    <h2 class="titleSecond">Entrez vos informations personnelles et commencez</h2>
                </div>
            </div>
            <div class="contentLogin">
                <a href="index.php?url=register">
                    <button class="btnLogin btnRegister">S'inscrire</button>
                </a>    
            </div>
            <div class="containerSignImg">
                <div class="contentSignImg">
                 <img
                    class="imgSignIn"
                    src="assets/img/imgViewSignIn2.png"
                    alt="connection image"
                />
                </div>
            </div>
        </div>
    </article>
</section>