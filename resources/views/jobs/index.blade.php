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
			@unless(count($job) == 0)				
			@foreach ($job as $job)
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
			@endforeach
			@else 
			<p>No Jobs found</p>
			@endunless
		</tbody>
	</table>
</x-layout>

