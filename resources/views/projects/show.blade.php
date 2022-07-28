<x-app-layout>
	<header class="flex items-center my-6 pb-4">
		<div class="flex justify-between items-end w-full">
			<p class="text-gray-400 font-light">
				<a href="{{ route('projects.index') }}" class="text-gray-400 no-underline hover:underline">My projects</a>
				/ {{ $project->title }}
			</p>

			<div class="flex items-center">
				<img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y" alt="avatar" class="rounded-full w-6 mr-2">

				<a href="#" class="ml-4 bg-teal-600 text-white py-2 px-4 shadow hover:bg-teal-700 rounded-md transition ease-in-out duration-150">Edit Project</a>
			</div>
		</div>
	</header>

	<main>
		<div class="flex space-x-10">
			<div class="w-3/4 mb-6">
				<div class="w-full mb-8">
					<h2 class="text-lg text-gray-400 font-light mb-3">Tasks</h2>

					<div class="w-full">
						<div class="flex items-center">
							<input type="text" class="w-full">
							<input type="checkbox">
						</div>
					</div>
				</div>
			</div>

			<div class="w-1/4">
				@include('components.card')
			</div>
		</div>
	</main>
</x-app-layout>