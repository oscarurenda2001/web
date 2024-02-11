async function carregaProductes()
{
    var tagProd = document.getElementById("productes");
  
    if(tagProd.value > 0)
    {
        var resposta = await
        fetch("/../controlador/llistaProds.php?categoria="+tagProd.value);
        var respostaTxt = await resposta.text();
        
      
        var newDiv = document.getElementById('productes_per_cat');
        newDiv.innerHTML = respostaTxt;
    }
    //alert(tagProd.value);

    return false;
}

async function carregaDetalls_img(value)
{
    var tagProd = value;
    if(tagProd > 0)
    {
        var str = "/../controlador/mostraDetalls.php?producte="+tagProd;
    
        var resposta = await
        fetch("/../controlador/mostraDetalls.php?producte="+tagProd);
        var respostaTxt = await resposta.text();
     ;
        var newDiv = document.getElementById('productes_per_cat');
        newDiv.innerHTML = respostaTxt;
    }
    

    return false;
}

document.addEventListener("DOMContentLoader",function()
{
        var botoMostrar = document.getElementsByID("mostrarFormulari");
        var fomrulariContainer = document.getElementById("formulatiContainer");
        botoMostrar.addEventListener("click", function()
        {
            fomrulariContainer.style.display = "block";
        });
});

function enviarFormulari()
{
    
    return false;
}

function redirigir(){
    window.location.href="https://tdiw-m6.deic-docencia.uab.cat/"
    return false;
}

function acaba_compra()
{
  window.location.href="https://tdiw-m6.deic-docencia.uab.cat/index.php?action=sale_success"
  return false;
}

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
 
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      } // toggle
    }
  }
  
async function search()
{
  var term = document.getElementById("searchInput").value;

  if (term == "")
  {
    alert("Cerca buida. Introdueix termes de cerca");
  }
  else
  {
        var resposta = await
        fetch("/../controlador/cercador.php?terme="+term);
        var respostaTxt = await resposta.text();
        
      
        var newDiv = document.getElementById('productes_per_cat');
        newDiv.innerHTML = respostaTxt;
  }
}

async function afegeix_cabas(prod)
{
  var quantitat = document.getElementById("quant" + prod).value;

  if(quantitat > 0)
  {
    var respostaCabas = await fetch("/../controlador/sessions/afegeix_cabas.php?prod=" + prod + "&quant=" + quantitat);
    var respostaCabasText = await respostaCabas.text();
  }
  
}

async function cart(){
  //alert('dins cart')
  const respostaMostra = await fetch("/../controlador/sessions/cabasDinamic.php");
  const respostaMostraTxt = await respostaMostra.text();
  document.getElementById("cabas").innerHTML = respostaMostraTxt;

}
function tancar_sessio() {
  fetch("/../controlador/logout.php")
  window.location.href = 'index.php';
}

async function cart_large(){
  //alert('dins cart')
  const respostaMostra = await fetch("/../controlador/sessions/cabas.php");
  const respostaMostraTxt = await respostaMostra.text();
  document.getElementById("cabas").innerHTML = respostaMostraTxt;
}

async function buida_cabas()
{
  const buida = await fetch("/../controlador/sessions/buida.php");
}

async function modifica(opt, id){
  //alert("/../controlador/sessions/modifica.php?opt=" + opt + "&prod=" + id)
  const respostaMostra = await fetch("/../controlador/sessions/modifica.php?opt=" + opt + "&prod=" + id);
  //alert('done');
}
async function canviar(dada)
{
  
  var text;
  var correcte = false;
  
  switch(dada){
    case 1:
      while(!correcte){
        text = prompt('Nom usuari');
        correcte =await fetch("/../model/comprovaValors.php?dada=" + dada + "&text=" + text);
        correcteText = await correcte.text();

      }
      break;
    case 2:
      while(!correcte)
      {
        text = prompt('Contrasenya');
        correcte =await fetch("/../model/comprovaValors.php?dada=" + dada + "&text=" + text);
      }
      break;
    case 3:
      text = prompt('Correu');
      correcte =await fetch("/../model/comprovaValors.php?dada=" + dada + "&text=" + text);
      break;
    case 4:
      text = prompt('Codi postal');
      correcte =await fetch("/../model/comprovaValors.php?dada=" + dada + "&text=" + text);
      break;
    case 5:
      text = prompt('Poblacio');
      correcte = fetch("/../model/comprovaValors.php?dada=" + dada + "&text=" + text);
      break;
   
    default:
       text = prompt('Adreca');
      correcte = fetch("/../model/comprovaValors.php?dada=" + dada + "&text=" + text);
  };
   window.location.href="https://tdiw-m6.deic-docencia.uab.cat/index.php?action=perfil";
  return true;
}

async function compra_cabas()
{
  const res_comp = await fetch("/../controlador/sessions/compra.php");
  const res_comp_txt = await res_comp.text()
  if(res_comp_txt == "sessio")
  {
    window.location.href="https://tdiw-m6.deic-docencia.uab.cat/index.php?action=sale&sale=nologin";
    return false;
  }
  else
  {
    if(res_comp_txt == "buit")
    {
      window.location.href="https://tdiw-m6.deic-docencia.uab.cat/index.php?action=sale&sale=buit";
      return false;
    }
    else
    {
      buida_cabas();
      window.location.href="https://tdiw-m6.deic-docencia.uab.cat/index.php?action=sale&sale=success";
      return false;
    }    
  }  
}