function check(form) 
	{
		if (form.usr.value == "Admin" && form.pswrd.value == "admin") 
		{
				window.open('admin.php')
		}
		else
		{
			alert("Error Password or Username")
		}
	}	