let admin=document.querySelector('.hamburger');


admin.addEventListener('click', changedisplay);


  function changedisplay(){


    let body=document.querySelector('.form_display');
    let container=document.querySelector('.container');






    if(body.style.display==="block"){

    body.style.display="none";
    container.style.visibility="visible";
    
    }else{

    body.style.display="block";
    container.style.visibility="hidden";

    }

  }


  
