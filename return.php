<?php
session_start();

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
	require 'includes/db.inc.php';
	require 'includes/navbar.inc.php';
	require 'includes/assetcounter.inc.php';

?>
<head>
  <link rel="stylesheet" type="text/css" href="design/additemdesign.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
			<div class="text-center">
				<a href="homepage.php" class="btn btn-danger float-left">Back</a><h1 style="color: black; margin-right: 90px;">Return Asset</h1>
						<form action="includes/return.inc.php" method="POST">
						<div class="container">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Search</span>
									<input type="text" name="search_text" id="search_text" placeholder="Search" class="form-control" />
								</div>
							</div>
							<br />
							<div id="result"></div>
						</div>
						<div style="clear:both"></div>
						<br />
						
						<br />
						<br />
						<br />
                
						</form>

			
			</div>
		</div>
    

		</div>
</body>
</html>

<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}

	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.first_name', function(){  
        var id = $(this).data("id1");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "productStatus");  
    });  
    $(document).on('blur', '.last_name', function(){  
        var id = $(this).data("id2");  
        var last_name = $(this).text(); 
        edit_data(id, last_name, "datePurchased");  
    }); 
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>

