function verif1() {

  
    var categorie = document.querySelector('#type').value;
    
    

if ( categorie === 'select')
{
    alert("Veuillez Saisir la catégorie") ;
    return false ;
}
else 
{  
    return true ;
}

     
}