<style>
  * {
      box-sizing: border-box;
    }
    
    html {
      height: 100%;
    }
    body{
      margin: 0;
      padding: 0;
    }
    .homepagebg {
      background-image:url(./img/backgroundForm.jpg);
      color: #000000;
      font: 300 1rem/1.5 Helvetica Neue, sans-serif;
      margin: 0;
      min-height: 100%;
      background-size:cover;
      overflow-x: scroll;
    }
    
    
    .align {
      align-items: center;
      display: flex;
      flex-direction: row;
    }
    .align__item--start {
      align-self: flex-start;
    }
    .align__item--end {
      align-self: flex-end;
    }
    
    .site__logo {
      margin-bottom: 2rem;
    }
    
    .inputForm {
      border: 0;
      font: inherit;
    }
    .inputForm::placeholder {
      color: #434549;
    }
    
    .form__field {
      margin-bottom: 1rem;
    }
    .form input {
      outline: 0;
      padding: .5rem 1rem;
    }
    .form input[type="email"], .form input[type="password"],.form input[type="name"] {
      width: 100%;
    }
    
    .grid {
      margin: 0 auto;
      max-width: 25rem;
      width: 100%;
    }
    
    .logo {
      height: auto;
      max-width: 100%;
      vertical-align: middle;
    }
    
    .tituloForms {
      font-size: 2.75rem;
      font-weight: 100;
      margin: 0 0 1rem;
      text-transform: none;
    }
    
    
    .linkCadastrar {
      color: #5277b9;
    }
    
    .register {
      box-shadow: 0 0 50px #000;
      background-color: rgba(255, 255, 255, 0.685);
      text-align: center;
      padding: 4rem 2rem;
    }
    .register input {
      border: 1px solid #242c37;
      border-radius: 999px;
      background-color: transparent;
      text-align: center;
    }
    
    .register input[type="submit"] {
      background-image: linear-gradient(160deg, #305890 0%, #1D3557 100%);
      color: #fff;
      margin-top: 2rem;
      margin-bottom: 0rem;
      width: 100%;
    }

    
  #msg-erro{
    color: red;
    float: left;
  }
</style>