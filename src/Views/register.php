<link rel="stylesheet" href="css/register.css" />

<section class="container">
  <article class="content">
    <div>
      <a href="index.php">
        <img class="icon-close" src="assets/icon/icon-close.svg" alt="icon close">
      </a>
    </div>
    <div class="login">
      <div class="titleLogin titleRegister contentLogin">
        <h1>Welcome Back !</h1>
      </div>
      <div class="contentLogin">
        <a href="index.php?url=login">
          <button class="btnLogin btnRegister">Se connecter</button>
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
  </article>

  <article class="content">
    <div class="signup">
      <div class="titleLogin contentLogin"><h1>Créer un compte</h1></div>
       <div class="contentLogin">
        <div>
          <form method="POST" action="?url=subscribe">
            <div class="contentInput">
              <p>
                <label for="company-name"></label>
                <img class="iconLogin" src="assets/icon/icon-user.svg" alt="icon user">
                <input class="inputSignUp" name="company-name" type="text" placeholder="Entreprise" required/>
              </p>
            </div>

            <div class="contentInput">
              <p>
                <label for="mail"></label>
                <img class="iconLogin" src="assets/icon/icon-email.svg" alt="icon email">
                <input class="inputSignUp" name="email" type="text" placeholder="Email" required/>
              </p>
            </div>


            <div class="contentInput">
              <p>
                <label for="password"></label>
                <img class="iconLogin" src="assets/icon/icon-password.svg" alt="icon password">
                <input class="inputSignUp" name="password" type="password" placeholder="Mot de passe" />
              </p>
            </div>

            <div class="contentLogin BtnSignUp">
              <button class="btnLogin" type="submit">S'inscrire</button>
            </div>
          </form>
        </div>
    </div>
  </article>
</section>
 