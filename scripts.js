function validarCampos(){
	if(document.cadastro.title.value=="")
	 {
	     alert("O Campo: Título é obrigatório!");
	     return false;
	 }
	
	else
	 if(document.cadastro.description.value=="")
	 {
	     alert("O Campo: Descrição é obrigatório!");
	     return false;
	 }
	
	else
	 if(document.cadastro.price.value=="")
	 {
	     alert("O Campo: Valor é obrigatório!");
	     return false;
	 }
	else
		return true;
	



}

