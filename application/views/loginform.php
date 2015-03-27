<?php
/*
 * Authent form
 */
?>
<div class="container text-center center">
    <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-3"></div>
        <div class="col-lg-4 col-md-6 col-sm-6" id="loginform">
            <div class="row" >
                <!--div de notification d'erreur de connexion-->
                <div id="notif_login" class="col-md-6 text-left">

                </div>
                <!--mot de passe oublié-->
                <div class="col-md-6 text-right">
                    <a id="passforget" class="toggleFormForget" href="#">Mot de passe oublié</a>
                </div>
            </div>
            <form name="login" class="formLogin" id="login" method="post" action="" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <input name="username" id="username" type="text" class="form-control" required="required" placeholder="Nom d'utilisateur">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="">
                        <input name="passwd" id="passwd" type="password" class="form-control" required="required" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary btnLoginForm"><i class="icon-unlock"></i> Connexion</button>
                    </div>  
                </div>
            </form>
            <form name="passForgetForm" class="formLogin" id="passForgetForm" action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <input name="email" id="email" type="email" class="form-control" required="required" placeholder="E-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary btnLoginForm"><i class="icon-mail-reply"></i> Envoyer</button>
                    </div>  
                </div>
            </form>   
        </div>
        <div class="col-lg-4 col-md-3 col-sm-3"></div>
    </div>
</div>

<script type="text/javascript">

    //Afficher/masquer élément
    $(".toggleFormForget").on("click touchstart", function () {
        $('.formLogin').each(function () {
            $(this).toggle("slow");
        });

        if ($("#passforget").text() === "Retour") {
            $("#passforget").text("Mot de passe oublié");
        } else if ($("#passforget").text() === "Mot de passe oublié") {
            $("#passforget").text("Retour");
        }
    });

    //Ajax login
    $("#login").submit(function (e) {
        e.preventDefault();
        //console.log('serialize : '+$('#login').serialize());//test
        try {
        $.ajax({
        url: 'includes/ajaxLogin.php',
                type: 'POST',
                datatype: 'json',
                data: $('#login').serialize(),
                timeout:30000,
                error: function (jqXHR, textStatus, errorThrown) {
                    if (textStatus === 'timeout')
                    {
                       alert("Problème de connexion : Vérifiez votre connexion internet");
                    }else{
                      throw "errorThrown : " + errorThrown + " | textStatus : " + textStatus + " | Error : AjaxContent has not a valid path";  
                    }              
                },
                success: function (data, jqXHR, textStatus) {
                    $('#notif_login').html(data);
                    var successfullLogin = $(data);
                    if (successfullLogin.attr("data-success") === "1") {
                        //console.log('login OK');//test ok
                        $('#passforget').hide();
                        $('#login').hide(1000);
                        $('#notif_login').width('700');
                        $('#notif_login').animate({fontSize: '28px'});
                        //redirection si login ok
                        setTimeout(function(){
                          // window.location.replace("index.php");
                        },3000);

                    } else if (successfullLogin.attr("data-success") === "0") {
                        //console.log('login false');test ok
                    }
                },
                beforeSend: function () {
                    $('#notif_login').html('<div id="spinner" class="spinner icon-spinner"></div> Loading');
                    }
            
                    
        });
        } catch (e) {
            console.log(e);
        }
    });
</script>
