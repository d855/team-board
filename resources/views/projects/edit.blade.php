<x-app-layout>
	<div class="lg:w-1/2 lg:mx-auto p-6 mt-12 shadow md:py-12 md:px-16 bg-white">
		<h1 class="text-2xl font-normal mb-10 text-center">
			Edit your project
		</h1>

		<form action="{{ route('projects.update', $project) }}" method="POST">
			@method('PATCH')
			@csrf

			<div class="field mb-6">
				<label for="title" class="label text-sm mb-2 block">Title</label>

				<div class="control">
					<input type="text"
					       class="input bg-transparent border border-teal-500 rounded p-2 text-xs w-full"
					       name="title"
					       placeholder="Project title"
					       value="{{ $project->title }}"
					       required>
				</div>
			</div>

			<div class="field mb-6">
				<label for="description" class="label text-sm mb-2 block">Description</label>

				<div class="control">
					<textarea name="description" rows="10" class="textarea bg-transparent border border-teal-500 rounded p-2 text-xs w-full" placeholder="I should start learning piano.">{{ $project->description }}</textarea>
				</div>

			</div>

			<div class="field">
				<div class="control">
					<button type="submit" class="button is-link mr-2 px-5 py-2.5 text-sm font-medium text-teal-600 bg-gray-100 rounded-md hover:text-teal-600/75 transition">Update project</button>

					<a href="{{ route('projects.index') }}" class="text-xs text-red-500">Cancel</a>
				</div>
			</div>
		</form>
	</div>
</x-app-layout>