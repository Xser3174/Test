
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <table class="table table-striped">	
		<thread class="thead-dark">
            <tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Phone</th>
				<th scope="col">Email</th>
				<th scope="col">Address</th>
                <th scope="col">First Month</th>
                <th scope="col">Score</th>
                <th scope="col">Second Month</th>
                <th scope="col">Score</th>
			</tr>
        </thread>
                    @for($j=0; $j<count($users);$j++)
                        <tr>
                        
                            <td>{{$d=1+$j}}</td>
                            <td>{{$users[$j]['name']}}</td>
                            <td>{{$users[$j]['phone']}}</td>
                            <td>{{$users[$j]['email']}}</td>
                            <td>{{$users[$j]['address']}}</td>
                                @foreach(($users[$j]['score']) as $key=>$value)
                                    <td>{{$key}}</td>
                                    <td>{{$value}}</td>
                                @endforeach
                        </tr>
                    @endfor
            


</body>
</html>






