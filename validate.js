function validateForm()
	{
		if(document.healthForm.firstName.value=="")
			{
				alert("Please provide your name");
				document.healthForm.focus();				
				return false;
			}
			if(document.healthForm.age.value=="")
			{
				alert("Please provide your age");
				document.healthForm.focus();
				return false;
			}
			if(document.healthForm.gender.value=="")
			{
				alert("Please choose your sex");
				document.healthForm.focus();
				return false;
			}
			if(document.healthForm.cups_of_water.value=="")
			{
				alert("Please enter the number of cups of water you drank");
				document.healthForm.focus();
				return false;
			}
			if(document.healthForm.fruit.value=="")
			{
				alert("Please enter the number of servings of fruits");
				document.healthForm.focus();
				return false;
			}
			if(document.healthForm.vegetables.value=="")
			{
				alert("Please enter the number od servings of vegetables");
				document.healthForm.focus();
				return false;
			}
			if(document.healthForm.days.value=="Day of Week")
			{
				alert("Please select a day of the week");
				document.healthForm.focus();
				return false;
			}			
			return(true);
	}