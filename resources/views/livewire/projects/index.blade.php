<div class="grid grid-cols-2 gap-4">
    @foreach ($this->projects as $project)
    <a wire:navigate href="{{ route('projects.show', $project) }}">
        {{-- {{ $project->id }}. {{ $project->title }} --}}

        <x-projects.simple-card :$project />
    </a>
    @endforeach
</div>