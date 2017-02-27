<?php 
require_once "test.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAX BT</title>
</head>
<body>
	<div class="wrapper">
		<div id="result"></div>
		<ul id="users"></ul>
		<h3>Add Post</h3>
		<form id="postForm" action="https://jsonplaceholder.typicode.com/posts">
			<input type="text" id="title" placeholder="Title">
			<br>
			<textarea id="body" placeholder="Body"></textarea>
			<br>
			<input type="submit" value="Submit">
		</form>
		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script>
		$(document).ready(function() {

			/* load method */

			/*$('#result').load('test.php', function(responseTxt, statusTxt, xhr){
				if(statusTxt == "success"){
					alert('It went fine');
				} else if (statusTxt == "error") {
					alert("Error" + xhr.statusText);
				}
			});*/

			/* load method eof */

			/* get method */

			/*$.get('test.html', function(data){
				$('#result').html(data);
			});*/

			/* get method */

			/* getJSON method */

			// $.getJSON('users.json', function(data){
			// 	//console.log(data);
			// 	$.each(data, function(i, user){
			// 		$('ul#users').append('<li>' + user.firstName + ' || userIndex: ' + i + '</li>');
			// 	});
			// });

			/* getJSON method eof */

			/* ajax GET */

			/*$.ajax({
				method: 'GET',
				url: 'https://jsonplaceholder.typicode.com/posts',
				type: 'default GET (Other values: POST)',
				dataType: 'json',
			})
			.done(function(data) {
				//console.log(data);
				$.map(data, function(post, i) {
					$('#result').append('<h3>'+ post.title +'</h3><p>' + post.body+'</p>')
				})
			});*/

			/* ajax GET  eof */

			/*$('#postForm').submit(function(e) {
				
				e.preventDefault();

				var title = $('#title').val();
				var body = $('#body').val();
				var url = $(this).attr('action');

				$.post(url, {title:title, body:body}).
					done(function(data){
						console.log('Post Saved');
						console.log(data);
					});
			});*/


			
		});
	</script>
</body>
</html>