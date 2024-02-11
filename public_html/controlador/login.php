<?php
    require_once __DIR__.'/../model/usuaris.php';
    require __DIR__.'/../controlador/sessions/sessioUsuari.php';
    include("./model/connectaBD.php");
    $connexio = connectaBD();
    if(isset($_POST['Iniciar_sessió'])){
        $usuari = $_POST['nom'];
        $contrasenya = $_POST['clau'];
        $resultat = buscarUsuari($usuari,$connexio);
        if($resultat)
        {
            $contrasenyaCorrecta = comprovaContrasenya($usuari,$contrasenya,$connexio);
            if($contrasenyaCorrecta){
                $_SESSION['usuari']['id'] = $resultat[0]['id'];
                $_SESSION['usuari']['nom_usuari'] = $resultat[0]['nom_usuari'];
                $_SESSION['usuari']['contrasenya'] = $resultat[0]['contrasenya'];
                $_SESSION['usuari']['correu'] = $resultat[0]['correu'];
                $_SESSION['usuari']['codi_postal'] = $resultat[0]['codi_postal'];
                $_SESSION['usuari']['poblacio'] = $resultat[0]['poblacio'];
                $_SESSION['usuari']['adreca'] = $resultat[0]['adreca'];
                $_SESSION['usuari']['foto_perfil'] = $resultat[0]['foto_perfil']; 
                echo "<script src='/../js/funcions.js'></script>";
                echo "<script>redirigir();</script>";
                
            }   
            else
            {
                ?>
                <h3>Contrasenya incorrecta</h3>
                <?php
            }
        }
        else
        {
            ?>
                <h3>No hi ha cap usuari amb aquest nom</h3>
            <?php
        }

    }


  
    
?>