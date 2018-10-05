<!DOCTYPE html>
<html>
	<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>eBASE Developer Application</title>
	<style>
		body { padding: 5% 20%; }
		table { border-collapse: collapse; width: 100%; background: #f2f2f2;}
		tr:hover {background-color: #f9f9f9;}
		th {background-color: #666;color: white;}
		th, td { padding: 8px;text-align: left; height: 20px; vertical-align: bottom;}
	</style>
	</head>
	<body>
	<?php
	/**
	 *@author: norbert<pytha12@gmail.com>
	 *@date : 10/4/2018
	 *@description: Simple App which loops through the given $people array and displays it in a table.
	 *				It comes with a buton to each row which, when clicked, will alert the person's name and email.
	 */

	 $people = array(
	   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
	 );
	 
	 // Loop through $people array and append persons to table...
	 $start_table = "<table class='person_table'><thead><tr><th>ID</th><th>First Name</th>
								<th>Last Name</th><th>Email</th><th>Info</th></tr></thead>";
	 $tr = "";
	 foreach ($people as $personKey => $personVal ):
		$tr.= "<tbody><tr><td>".$personVal['id']."</td>";
		$tr.= "<td>".$personVal['first_name']."</td>";
		$tr.= "<td>".$personVal['last_name']."</td>";
		$tr.= "<td>".$personVal['email']."</td>";
		$tr.= "<td><button class='person_info' id='".$personVal['id']."'>Info</button></td></tr>";
	 endforeach;
	 $end_table = "</tbody></table>";
	 
	 // Join table parts together...
	 $table = $start_table.$tr.$end_table;
	 echo $table;
	 
	?>
	
	<script type="application/javascript">
		$(document).on('click','button.person_info', function(e) {
			// Prevents DOM from bubbling on multiple clicks.
			e.stopImmediatePropagation();
			var $this = $(this);
			// Another way of getting name and email could be assigning ids to first and last name td(s) 
			// as well as email td...eg <td id="fname_".$personVal['id']>
			var name = $this.closest('tr').find('td:eq(1)').text() + ' ' +$this.closest('tr').find('td:eq(2)').text();
			var email = $this.closest('tr').find('td:eq(3)').text();
			alert(name +'   ............    '+ email);
		});
	</script>
	</body>
</html>

 
