<div class="w-full md:max-w-2xl px-8 py-4 mx-auto bg-white rounded-lg shadow-md flex flex-col justify-between">
	<div class="flex items-center justify-between flex-none">
		<span class="text-sm font-light text-gray-600">{{ $project->created_at->diffForHumans() }}</span>
	</div>

	<div class="mt-2 flex-1">
		<a href="{{ route('projects.show', $project) }}" class="text-2xl font-bold text-gray-700 hover:text-gray-600 hover:underline">{{ $project->title }}</a>
		<p class="mt-2 text-gray-600">{{ $project->description }}</p>
	</div>

	<div class="flex items-center justify-between mt-4">
		<a href="#" class="text-blue-600 hover:underline">See more</a>

		<div class="flex items-center">
			<img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80" alt="avatar">
			<a class="font-bold text-gray-700 cursor-pointer">Khatab wedaa</a>
		</div>
	</div>
</div>