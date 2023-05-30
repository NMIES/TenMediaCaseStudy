<x-layout>
	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif
    <form method="POST" action="/jobs/{{$job->id}}/edit">
		@csrf
		@method('GET')
		<label for="company">Company:</label><br>
		<select name="company_id">
			{{$company = App\Models\Company::pluck('name')}}
			@foreach ($company as $name)
				<option value="">{{$name}}</option>     
			@endforeach
		</select><br>
		<label for="title">Title:</label><br>
		<input type="text" id="title" name="title" value=""><br><br>
		<label for="description">Description:</label><br>
		<textarea id="description" name="description" value=""></textarea><br><br>
		<label for="startDate">Start Date:</label><br>
		<input type="Date" id="startDate" name="startDate" value=""><br><br>
		<input type="submit" value="Save changes">

    </form> 
</x-layout>