<x-app-layout>
	<header class="flex items-center my-6 pb-4">
		<div class="flex justify-between items-end w-full">
			<p class="text-gray-400 font-light">
				<a href="{{ route('projects.index') }}" class="text-gray-400 no-underline hover:underline">My
				                                                                                           projects</a>
				/ {{ $project->title }}
			</p>

			<div class="flex items-center">
				<img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y"
				     alt="avatar"
				     class="rounded-full w-6 mr-2">

				<a href="{{ route('projects.edit', $project) }}"
				   class="ml-4 bg-teal-600 text-white py-2 px-4 shadow hover:bg-teal-700 rounded-md transition ease-in-out duration-150">Edit
				                                                                                                                         Project</a>
			</div>
		</div>
	</header>

	<main>
		<h2 class="text-lg text-gray-400 font-light mb-3">Tasks</h2>
		<div class="flex space-x-10">
			<div class="w-3/4 mb-6">
				<div class="w-full mb-8">

					<div class="w-full mb-10">
						<form action="{{ route('projects.tasks', $project) }}" method="POST">
							@csrf
							<input type="text"
							       name="body"
							       placeholder="Add new task"
							       class="w-full border-none px-5 py-4 rounded shadow">
						</form>
					</div>

					<div class="w-full">
						@foreach($project->tasks as $task)
							<form action="{{ route('task.update', [$project, $task]) }}" method="POST">
								@method('PATCH')
								@csrf

								<div class="flex items-center mb-5">
									<input type="text"
									       name="body"
									       value="{{ $task->body }}"
									       class="w-full border-none px-5 py-4 mr-2 rounded shadow {{ $task->completed ? 'line-through text-gray-300' : '' }}">
									<input type="checkbox"
									       name="completed"
									       onChange="this.form.submit()"
									       {{ $task->completed ? 'checked' : '' }} class="accent-green-400 rounded border-gray-300 shadow-md">
								</div>
							</form>
						@endforeach
					</div>
				</div>
			</div>

			<div class="w-1/4">
				@include('components.card')
			</div>
		</div>
	</main>
</x-app-layout>