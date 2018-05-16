//pour attendre que tout les objets soient chargés
$(document).ready(function () {

    //pour pouvoir utiliser regex
    $.validator.addMethod("regex", function (value, element, regexpr) {
        return regexpr.test(value);
    }, "Format non valide.");


    //champs -> identifiants
    $("#form_inscription").validate({
        rules: {
            mail: "required",
            //email2: {
            //    equalTo: "#email1"                
            //},
            nom: "required",
            prenom: "required",
            login: "required",
            motdepasse: "required",
            adresse: "required",
            numero: "required",
            codepostal: {
                required: true,
                min: 1000,
                max: 9999
            },
            localite: "required",
            submitHandler: function (form) {
                form.submit();
            }
        }
    });

    //TRADUCTION DES MESSAGES DE VALIDATION EN FRANÇAIS
    $.extend($.validator.messages, {
        required: "Veuillez renseigner ce champ.",
        email: "Veuillez renseigner un email valide.",
        url: "Url non conforme.",
        date: "Date non valide.",
        number: "Veuillez n'entrer que des chiffres.",
        digits: "Veuillez n'entrer que des chiffres.",
        equalTo: "Les champs ne concordent pas.",
        maxlength: $.validator.format("Entrez au maximum {0} caract&egrave;res."),
        minlength: $.validator.format("Entrez au minimum {0} caract&egrave;res."),
        rangelength: $.validator.format("Votre entrée doit compter entre {0} et {1} caract&egrave;res."),
        range: $.validator.format("Entrez un nombre entre {0} et {1}."),
        max: $.validator.format("Entrez un nombre inférieur ou égal à {0}."),
        min: $.validator.format("Entrz un nombre de minimum {0}."),
        regex: "Format non conforme"
    });




    <script type="text/javascript">
     function show(){
        document.getElementById("menu").style.display = ""
      }
    </script>



    /* JS  PANIER*/
// comportement du panier au survol pour affichage de son contenu
    var timeout;

    $('#cart').on({
        mouseenter: function () {
            $('#cart-dropdown').show();
        },
        mouseleave: function () {
            timeout = setTimeout(function () {
                $('#cart-dropdown').hide();
            }, 200);
        }
    });

// laisse le contenu ouvert à son survol
// le cache quand la souris sort
    $('#cart-dropdown').on({
        mouseenter: function () {
            clearTimeout(timeout);
        },
        mouseleave: function () {
            $('#cart-dropdown').hide();
        }
    });








//ex Mozart
    $('#vie').hide();
    $('#deuxieme').fadeOut(3000);//"slow"
    $('#para1').hide();
    $('#para2').hide();
    $('#troisieme').slideDown(3000);
    $('#quatrieme').hide();
    $('#cinquieme').hide();
    $('#cacher2').hide();

    $('h1').click(function () {
        $('h1').css('color', '#FF0000');
        $('#vie').show();
    });

    $('#vie').mouseover(function () {
        $('#para1').show();
        $('#vie').css({
            'color': '#0000FF',
            'font-weight': 'bold'
        });
    });
    $('#vie').mouseout(function () {
        $('#vie').css({
            'color': '#FF0000'
        });
    });

    $('#para1').click(function () {
        $('#deuxieme').show();
        $('#para2').show();
    });
    $('#para2').click(function () {
        $('#troisieme').show();
        $('#para3').show();
    });
    $('#para3').click(function () {
        $('#quatrieme').show();
        $('#cacher2').show();
    });

    $('#cacher2').click(function () {

        $('#cinquieme').toggle();
        if ($('#cinquieme').is(':visible'))
        {
            $(this).val('Cacher la suite');
        } else
        {
            $(this).val('Montrer la suite');
        }
    });

//enlever "activer js" sur accueil.php
    $('#no-js').remove();
// conseil page d'accueil

    $('#cacher').click(function ()
    {
        $('#avertisst').toggle();
        if ($('#avertisst').is(':visible'))
        {
            $(this).val('Cacher le conseil');
        } else
        {
            $(this).val('Afficher le conseil');
        }
    });

//supprimer le bouton d'envoi form page confort.php

    $('#submit_search_td').remove();

// traitement automatisé du changement liste deroul

    $('#choix_liste_deroulante').change(function ()
    {
//on se place sur l'attribut name du select
        var attribut = $(this).attr('name');
        //on récupère sa valeur 
        var val = $(this).val();
        //alert('attribut='+attribut+'et valeur = '+val);
        //reconstruction de l'url
        var url = 'index.php?' + attribut + '=' + val + '&submit_choix=Voir';
        //alert(url);
        window.location.href = url;
    });
}
);