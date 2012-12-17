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

function validarCamposUsuario(){
	if(document.cadastro_usuario.nome.value=="")
	 {
	     alert("O Campo: Título é obrigatório!");
	     return false;
	 }
	else
	 if(document.cadastro_usuario.password.value=="")
	 {
	     alert("O Campo: Valor é obrigatório!");
	     return false;
	 }
         
         else
	 if(document.cadastro_usuario.email.value=="")
	 {
	     alert("O Campo: Valor é obrigatório!");
	     return false;
	 }
	 
         else
	 if(document.cadastro_usuario.password.value != document.cadastro_usuario.password_confirm.value)
	 {
	     alert("Confirmação da Senha está Incorreta!");
	     return false;
	 }
	else
		return true;
}

function validarCamposLoginUsuario(){
	if(document.login_usuario.user.value=="")
	 {
	     alert("O Campo: Usuário é obrigatório!");
	     return false;
	 }
	else
	 if(document.login_usuario.password.value=="")
	 {
	     alert("O Campo: Senha é obrigatório!");
	     return false;
	 }
	else
		return true;
}

