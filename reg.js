function test() {
	
			if(document.regform.Name.value=="") {
				alert("Please enter your name");
				document.regform.Name.focus();
				return false;
			}
			if(document.regform.Contact_No.value=="") {
				alert("Please enter your contact no");
				document.regform.Name.focus();
				return false;
			}
			if(document.regform.Email.value=="") {
				alert("Please enter your Email");
				return false;
			}
			if(document.regform.Gender.value=="") {
				alert("Please enter your Gender");
				return false;
			}
			
			if(document.regform.Registration_No.value=="") {
				alert("Please enter your Registration Number");
				return false;
			}
			if(document.regform.regform_Type.value=="") {
				alert("Please enter your regform_Type");
				return false;
			}
			if(document.regform.Payment_Type.value=="") {
				alert("Please enter your Payment_Type");
				return false;
			}
			if(document.regform.Address.value=="") {
				alert("Please enter your Address");
				return false;
			
			}
			if(document.regform.NIC.value=="") {
				alert("Please enter your NIC");
				return false;
			}
			if(document.regform.Specialities.value=="") {
				alert("Please enter your specialties");
				return false;
			}
			if(document.regform.User_Name.value=="") {
				alert("Please enter your user name");
				return false;
			}
			if(document.regform.Password.value=="") {
				alert("Please enter your password");
				return false;
			}
			return confirm("Do you want to register?");
		}