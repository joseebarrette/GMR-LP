// JavaScript Document
$(document).ready(function() {

    "use strict";

    $(".contact-form").submit(function(e) {
        e.preventDefault();
        var firstname = $('[name="firstname"]');
        var lastname = $('[name="lastname"]');
        var organisation = $('[name="organisation"]');
        var telephone = $('[name="telephone"]');
        var email = $('[name="email"]');

        var flag = false;

        if (firstname.val() == "") {
            firstname.closest(".form-control").addClass("error");
            firstname.focus();
            flag = false;
            return false;
        } else {
            firstname.closest(".form-control").removeClass("error").addClass("success");
        }

        if (lastname.val() == "") {
            lastname.closest(".form-control").addClass("error");
            lastname.focus();
            flag = false;
            return false;
        } else {
            lastname.closest(".form-control").removeClass("error").addClass("success");
        }

        if (organisation.val() == "") {
            organisation.closest(".form-control").addClass("error");
            organisation.focus();
            flag = false;
            return false;
        } else {
            organisation.closest(".form-control").removeClass("error").addClass("success");
        }

        if (telephone.val() == "") {
            telephone.closest(".form-control").addClass("error");
            telephone.focus();
            flag = false;
            return false;
        } else {
            telephone.closest(".form-control").removeClass("error").addClass("success");
        }

        if (email.val() == "") {
            email.closest(".form-control").addClass("error");
            email.focus();
            flag = false;
            return false;
        } else {
            email.closest(".form-control").removeClass("error").addClass("success");
        }

        var dataString = "firstname=" + firstname.val() + "&lastname=" + lastname.val() + "&organisation=" + organisation.val() + "&telephone=" + telephone.val() + "&email=" + email.val();
        $(".loading").fadeIn("slow").html("Chargement...");
        $.ajax({
            type: "POST",
            data: dataString,
            url: "php/contact.php",
            cache: false,
            success: function (d) {
                $(".form-control").removeClass("success");
             if(d == 'success') // Message Sent? Show the 'Thank You' message and hide the form
 $('.loading').fadeIn('slow').html('<font color="#48af4b">Courriel envoyé avec succès.</font>').delay(3000).fadeOut('slow');

     else
     $('.loading').fadeIn('slow').html('<font color="#ff5607">Un problème est survenu, le courriel n\'a pas été envoyé.</font>').delay(3000).fadeOut('slow');

            }
        });
        return false;
    });
    $("#reset").on('click', function() {
        $(".form-control").removeClass("success").removeClass("error");
    });

})
