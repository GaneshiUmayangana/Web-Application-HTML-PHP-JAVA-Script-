function testform() {
	
			if(document.Guides.Name.value=='') {
				alert("Please enter your name");
				return false;
			}
			if(document.Guides.Contact_No.value=='') {
				alert("Please enter your contact no");
				return false;
			}
			if(document.Guides.Email.value=='') {
				alert("Please enter your Email");
				return false;
			}
			if(document.Guides.Gender.value=='') {
				alert("Please enter your Gender");
				return false;
			}
			if(document.Guides.Guide_Type.value=='') {
				alert("Please enter your Guide_Type");
				return false;
			}
			if(document.Guides.Registration_No.value=='') {
				alert("Please enter confirm Guide_Type");
				return false;
			}
			if(document.Guides.Tour_Type.value=="") {
				alert("Please enter your Tour_Type");
				return false;
			}
			if(document.Guides.Preferred_Area.value=='') {
				alert("Please enter your Preferred_Area");
				return false;
			}
			if(document.Guides.Language.value=='') {
				alert("Please enter your Language");
				return false;
			}
			if(document.Guides.Preferred_Duration.value=='') {
				alert("Please enter your Preferred_Duration");
				return false;
			}
			if(document.Guides.NIC.value=='') {
				alert("Please enter your NIC");
				return false;
			}
			if(document.Guides.Specialities.value=='') {
				alert("Please enter your specialties");
				return false;
			}
			if(document.Guides.User_Name.value=='') {
				alert("Please enter your user name");
				return false;
			}
			if(document.Guides.Password.value=='') {
				alert("Please enter your password");
				return false;
			}
			return confirm("Do you want to register?");
		}

