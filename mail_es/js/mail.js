var check=document.querySelector(".check");
check.addEventListener('click',idioma);

function idioma(){
    let id=check.checked;
    if(id==true){
        location.href="https://inversor.milenion.com";
    }
    else{
        location.href="https://investor.milenion.com";
    }
}