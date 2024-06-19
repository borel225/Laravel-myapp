/*
* script pour la verification de mon formulaire d'enregistrement des utilisateur
*/
$('#register-user').click(function(){
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var password_confirm = $('#password-confirm').val();
    var passwordLength = password.length;
    var agrreetrems = $('#agrreetrems');

    if(firstname != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(firstname))
        {
            $('#firstname').removeClass('is-invalid');
            $('#error-resgister-firstname').text('');

                if(lastname != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(lastname))
                    {
                        $('#lastname').removeClass('is-invalid');
                        $('#error-resgister-lastname').text('');

                        if(passwordLength>= 8)
                            {
                                $('#password').removeClass('is-invalid');
                                $('#error-resgister-password').text("");

                                if(password == password_confirm)
                                {

                                if(agrreetrems.is(':checked'))
                                    {
                                        $('#agrreetrems').removeClass('is-invalid');

                                        // envoyer le formulaire

                                        var res = emailExistjs(email);

                                        if(res != "exist")
                                        {
                                            $('#form-register').submit();
                                        }else
                                        {
                                            $('#email').addClass('is-invalid');
                                            $('#error-resgister-email').text("L'adresse email existe déjà ");
                                        }



                                    }else{

                                        $('#agrreetrems').addClass('is-invalid');
                                        $('#error-resgister-agrreetrems').text("vous devez accepter les conditions d'utilisation ");
                                    }

                                }else
                                {
                                $('#password-confirm').addClass('is-invalid');
                                $('#error-resgister-password-confirm').text("Les mots de passe ne sont pas conforme");
                                }

                            }else
                            {
                                $('#password').addClass('is-invalid');
                                $('#error-resgister-password').text("Le mot de passe doit-être suppérieur a 8 caractères!");
                            }
                    }
                    else
                    {
                        $('#lastname').addClass('is-invalid');
                        $('#lastname').removeClass('is-valid');
                        $('#error-resgister-lastname"').text("prenoms non valable");

                    }

        }else{
            $('#firstname').addClass('is-invalid');
            $('#firstname').removeClass('is-valid');
            $('#error-resgister-firstname').text("Nom non valable");
        }

    });

    // Evenement pour supprimer le message d'erreur des condition d'utilisarion

    $('#agrreetrems').change(function(){

        var agrreetrems = $('#agrreetrems');

        if(agrreetrems.is(':checked'))
        {

        }else
        {
            $('#agrreetrems').addClass('is-invalid');
            $('#error-resgister-agrreetrems').text("vous devez accepter les conditions d'utilisation ");
        }

    });

    $()

    function emailExistjs(email)
    {
        var url =$('#email').attr('url-emailExist');
        var token =$('#email').attr('token');
        var res = "";

        $.ajax({

            type:'POST',
            url:url,
            data:{
                '_token':token,
                email:email,

            },
            success:function(result){
                res = result.response;
            },
            async:false
        });

        return res;

    }
