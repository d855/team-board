<x-app-layout>
	<header class="flex justify-between items-end my-6 py-4">
		<h2 class="text-gray-400 font-semibold text-sm capitalize">My projects</h2>
		<a href="#" class="bg-teal-600 text-white py-2 px-4 shadow hover:bg-teal-700 rounded-md transition ease-in-out duration-150">Add new project</a>
	</header>
	<div class="py-12">
		<div class="max-w-7xl mx-auto grid grid-cols-3 gap-4 sm:px-6 lg:px-8">
			@foreach(range(1, 5) as $item)
				<x-card></x-card>
			@endforeach
		</div>
	</div>
</x-app-layout>