<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ten Media Case Study</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>
<body>
		<header>
			<div class="header">
				<a>Ten Media Case Study<a>
				<div>
					<a href="/jobs">Jobs</a>
					<a href="/companies">Companies</a>
					<a href="/users">Users</a>
				</div>
			</div>
		</header>

		<main>
			{{$slot}}
		</main>
</body>
</html>