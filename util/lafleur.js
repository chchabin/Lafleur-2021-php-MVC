const myform=document.querySelector('#panier');
const hidde=document.querySelectorAll('input[type=hidden]');

qte=(prix)=>{
    let retour=0
    const cost='p'+prix
    hidde.forEach((price)=>{
        if(price.id===cost)
        {retour= price.value}
    });
    return retour
}


myform.oninput=(e)=>{
    const id ='t'+e.target.id
    const total=e.target.value * qte(e.target.id)
    document.getElementById(id).innerHTML=total.toString()+ ',00 €'
};
