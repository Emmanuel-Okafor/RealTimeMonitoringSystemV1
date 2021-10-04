<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>
<style>
	a:hover,a:active{
	background-color: hotpink;
	
}
a:link,a:visited{
	background-color: indigo;
	color: white;
	padding: 5px 10px;
	text-decoration: none;
	display: inline-block;
	margin:5px;
	border-radius:1rem;
}
img{
	border-radius: 1rem;
}
.container{
	display:flex;
	justify-content: flex-start;
	flex-direction:column;
}
.content{
	margin-left: 1rem;
}
.chart{
	margin-top:1rem;
}
.Educhart{
	display:flex;
	flex-direction:vertical;
	width:40%;
}


</style>
<div class="container">
<div class="content">
	<h2>Welcome to Nodal Savvy Limited, we provide a pilot monitoring system that visualizes the demography of the  most vulnerable  children in Nigeria</h2>
</div>
<td>
<div class="Educhart">
	<!-- Demograph Visualization of the Most Vulnerable Children -->
	<br>
	<?php include 'demography_visualization.php';?> 
</div>
</td>


<tr>
 <div class="row">
	 <td>
        <div class="column">
			<div class="content"><h2>We believe every child needs a  home and quality education. Lets join hands  to support <br> the most vulnerable children by deploying a personalized conversational learning assistant  that will aid in improving  a child numeracy literacy and  grammar skills.</h2>
			<img src="orphans.jpeg" alt="orphans"><br>
			<a href="donate.php" class="create-contact">Make a Donation</a>
		</div>
    </td>
	
	<td>
      
            <div class="column">
				<img src="img/ChatBot.gif" alt="Snow" style="width:20%">
				<a href="create.php">Become a Guardian</a>
				</div>
    </td>
 
</tr>
</div>


<?=template_footer()?>