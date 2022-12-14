<div class="px-8 py-4 w-80 h-80 mx-auto bg-white rounded-lg shadow-md flex flex-col justify-between">
	<div class="flex items-center justify-between flex-none">
		<span class="text-sm font-light text-gray-600">{{ $project->created_at->diffForHumans() }}</span>
	</div>

	<div class="mt-2 flex-1">
		<a href="{{ route('project.show', $project) }}"
		   class="text-2xl font-bold text-gray-700 hover:text-gray-600 hover:underline">{{ $project->title }}</a>
		<p class="mt-2 text-gray-600 line-clamp-5">{{ $project->description }}</p>
	</div>

	<div class="flex items-center justify-between text-sm mt-4">
		<div class="flex items-center text-sm">
			<img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y"
			     alt="avatar"
			     class="rounded-full w-6 mr-2">
			<a class="font-bold text-gray-700 cursor-pointer">{{ $project->owner->name }}</a>
		</div>
		@can('delete', $project)
			<form action="{{ route('project.destroy', $project) }}" method="POST">
				@method('DELETE')
				@csrf

				<button type="submit" onclick="return confirm('Delete this project?')" class="text-xs text-red-500">
					Delete
				</button>
			</form>
		@endcan
	</div>
</div>