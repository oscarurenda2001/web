<?php
    include("./model/connectaBD.php");
    
    $connexio = connectaBD();

    if(isset($_POST['register'])){
        if(strlen($_POST['nom_usuari']) >= 1 &&
        strlen($_POST['contrasenya']) >= 1 &&
        strlen($_POST['correu']) >= 1 &&
        strlen($_POST['codi_postal']) == 5 &&
        strlen($_POST['poblacio']) >= 1 &&
        strlen($_POST['adreca']) >= 1 &&
        strpos($_POST['correu'], '@') !== false ) {
            $nom =$_POST['nom_usuari'];
            $consultaSQL = ("SELECT * FROM usuaris WHERE nom_usuari = $1");
            $consulta = pg_query_params($connexio,$consultaSQL,array($nom));
            
            if(pg_num_rows($consulta) < 1)
            {
                $contrasenya = $_POST['contrasenya'];
                $contrasenya = password_hash($contrasenya, PASSWORD_DEFAULT);
                $correu =$_POST['correu'];
                $codi_postal =$_POST['codi_postal'];
                $poblacio =$_POST['poblacio'];
                $adreca =$_POST['adreca'];
                $sql_insertar = "INSERT INTO usuaris(nom_usuari,contrasenya,correu,codi_postal,poblacio,adreca)
                VALUES($1,$2,$3,$4,$5,$6)";
                $parametres_insertar = array($nom,$contrasenya,$correu,$codi_postal,$poblacio,$adreca);     
                $result_insertar = pg_query_params($connexio,$sql_insertar,$parametres_insertar);
                    if(!$result_insertar){
                        ?>
                        <h3> No esta bé</h3>
                        <?php
                    }
                
            }
                
        }

        else{
            ?>
            <h3>Tots els camps son obligatoris per registrar-se</h3>
            <?php
        }
    }
    
?>