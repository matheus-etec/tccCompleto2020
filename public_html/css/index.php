<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
    * {
        font-family: Roboto;
    }

    body {
    width: 100%;
    padding: 0;
    margin: 0;
    }

    .homepagebg {
        width: 100%;
        /*box-shadow: 1px 1px 3000px 250px rgba(0, 0, 0, 0.5) inset;*/
        /*-webkit-box-shadow: 50px 10px 999999999px 100px rgba(255, 255, 255, 0.377) inset;*/
        background-image: url(../css/backgrounds/backgroundNovo.jpg);
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        user-select: none;
        height: auto;
        padding-bottom: 450px;
        text-align: center;
    }

    .bkg-color {
        width: 100%;
        background-color: #1d3557;
    }
    
    #imagem-corpo {
        width: 100%;
        box-shadow: 0 0 3000px rgb(0, 0, 0) inset;
        background-image: url(../css/backgrounds/scroll.jpg);
        background-attachment: cover;
        background-position: fixed;
        user-select: none;
        padding-top: 100px;
        padding-bottom: 20px;
        text-align: center;
        height: auto;
    }

    /*#imagem-corpo .imagem-corpo-titulo {*/
    /*    text-align: center;*/
    /*    margin-left: 55px;*/
    /*    padding-top: 100px;*/
    /*    padding-bottom: 150px;*/
    /*    background-repeat: no-repeat;*/
    /*    background-image: url(../css/backgrounds/background4.png);*/
    /*}*/

    .botoes-nav {
        width: 100%;
        display: flex;
        position: absolute;
    }

    #imagem-corpo button {
        width: 100%;
        background-color: #1d3557;
        color: rgb(255, 255, 255);
        /*opacity: 90%;*/
        /*box-shadow: 2px 2px 10px 2px;*/
        font-weight: bolder;
        font-size: 24px;
        border-radius: 7.5px;
        margin: 10px;
        height: 50px;
        width: 350px;
        letter-spacing: 2px;
    }

    .botoes-nav a {
        width: 100%;
        color: rgb(255, 255, 255);
        background-color: #1d3557;
        /*opacity: 90%;*/
        /*box-shadow: 1px 2px 10px 1px;*/
        font-size: 18.5px;
        border-radius: 7.5px;
        margin: 10px;
        height: 45px;
        width: 200px;
    }

    #imagem-corpo button:hover,
    .botoes-nav a:hover {
        /*width: 100%;*/
        color: rgb(255, 255, 255);
        border-radius: 10px;
        opacity: 80%;
    }

    .homepagebg p,
    .homepagebg strong {
        padding-top: 40px;
        letter-spacing: 3.5px;
        font-size: 45px;
        font-weight: bolder;
        color: #fff;
        text-shadow: 0.1em 0.2em 0.2em black,
                    0.1em 0.2em 0.2em black
    }

    #imagem-corpo h2 {
        width: 100%;
        padding-top: 100px;
        font-weight: bolder;
        color: #000;
        padding-bottom: 5px;
        font-size: 45px;
        letter-spacing: 1px;
    }

    #imagem-corpo p {
        width: 100%;
        letter-spacing: 1px;
        font-weight: bolder;
        color: #000;
        font-size: 24px;
        text-justify: initial;
        padding: 40px 90px;
    }
    
    h6 {
        width: 100%;
        text-align: right;
        padding-top: 30px;
        color: #000;
        font-size: 15px;
        padding-right: 15px;
    }
    #card-mesa {
        width: 100%;
        background-color: white;
    }
</style>