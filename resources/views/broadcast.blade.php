<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
       <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
    </head>
    <body>
    	<h1>hai</h1>
        <script>
        	(function(){
        		 var pusher = new Pusher('b4885e7086d94d07d02b', {
			      cluster: 'ap2',
			      encrypted: true
    			 });
    			 var channel = pusher.subscribe('private-test');
    			 channel.bind('App\Events\UserHasRegistered', function(data) {
      			 console.log(data);
      			});
        	})();
        </script>
    </body>
</html>