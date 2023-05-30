<x-layout>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>company</th>
				<th>title</th>
				<th>description</th>
				<th>postDate</th>
				<th>startDate</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$job->id}}</td>
				<td>{{$job->company->name}}</td>
				<td>{{$job->title}}</td>
				<td>{{$job->description}}</td>
				<td>{{$job->postDate}}</td>
				<td>{{$job->startDate}}</td>
				<th><button><a href="/jobs/{{$job->id}}">view</a></button></th>
				<th><button>edit</button></th>
				<th><button>delete</button></th>
			</tr>		
		</tbody>
	</table>
</x-layout>

