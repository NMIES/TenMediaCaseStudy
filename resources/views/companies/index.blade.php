<x-layout>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>address</th>
				<th>city</th>
				<th>zipcode</th>
				<th>email</th>
				<th>password</th>
				<th>phone</th>
				<th>logo</th>
				<th>description</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@unless(count($company) == 0)				
			@foreach ($company as $company)
			<tr>
				<td>{{$company->id}}</td>
				<td>{{$company->name}}</td>
				<td>{{$company->address}}</td>
				<td>{{$company->city}}</td>
				<td>{{$company->zipcode}}</td>
				<td>{{$company->email}}</td>
				<td>{{$company->password}}</td>
				<td>{{$company->phone}}</td>
				<td>{{$company->logo}}</td>
				<td>{{$company->description}}</td>
				<th><button><a href="/companies/{{$company->id}}">view</a></button></th>
				<th><button>edit</button></th>
				<th><button>delete</button></th>
			</tr>		
			@endforeach
			@else 
			<p>No Companies found</p>
			@endunless
		</tbody>
	</table>
</x-layout>

