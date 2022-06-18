<?php

echo date();

if(isset($_POST["submit"])){
    mail("lukas@vieth.email", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"]. 'Nachricht: '.$_POST["nachricht"]);

}

