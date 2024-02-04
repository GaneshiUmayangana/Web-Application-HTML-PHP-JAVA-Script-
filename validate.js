 function validate() {

	if( document.loginform.Registration_No.value == "" ) {
            alert( "Please provide your Registration No!" );
            document.loginform.Registration_No.focus() ;
            return false;
    }

	if(document.loginform.Password.value == ''){
		alert('Please enter password');
		document.loginform.Password.focus() ;
		return false;
	}
	
	return true;
}