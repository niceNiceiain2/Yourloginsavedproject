<script src="assets/js/jquery-3.5.1.js"></script>

<?php
echo '<section id="home">';
echo '<div class = "row">';
echo '<div class = "container">';
echo '<h2>Database Entries</h2>';
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Auto Id</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Username</th><th>Password</th><th>Comments</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody id="results">';
echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';
echo '</section>';
?>
<script>
	function refresh_data(){
		$.ajax({
			type:'post',
			url: 'https://ec2-3-135-224-182.us-east-2.compute.amazonaws.com/hw20/query_contacts.php',
			success: function(data){
				$('#results').html(data);
			}
			
		});
		
	}
	setInterval(function(){ refresh_data();},500);//call the newly created refresh_data function every 500ms
</script>