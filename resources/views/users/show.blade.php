<x-layout>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>address</th>
				<th>city</th>
				<th>zipcode</th>
				<th>phone</th>
				<th>gender</th>
				<th>email</th>
				<th>password</th>
				<th>birthdate</th>
				<th>picture</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->address}}</td>
				<td>{{$user->city}}</td>
				<td>{{$user->zipcode}}</td>
				<td>{{$user->phone}}</td>
				<td>{{$user->gender}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->password}}</td>
				<td>{{$user->birthdate}}</td>
				<td>{{$user->picture}}</td>
				<th><button><a href="/users/{{$user->id}}">view</a></button></th>
				<th><button>edit</button></th>
				<th><button>delete</button></th>
			</tr>		

		</tbody>
	</table>
</x-layout>

