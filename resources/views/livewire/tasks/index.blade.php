<div>
    <div>
        <flux:heading size="xl">Tasks</flux:heading>
        <flux:subheading>List of all your tasks</flux:subheading>
        <flux:separator class="mt-4" />
    </div>
    <flux:table>
        <flux:columns>
            <flux:column>Title</flux:column>
            <flux:column>Description</flux:column>
            <flux:column>Status</flux:column>
            <flux:column>Created At</flux:column>
        </flux:columns>

        <flux:rows>
            @foreach ($tasks as $task)
                <flux:row>
                    <flux:cell>{{ $task->title }}</flux:cell>
                    <flux:cell class="text-wrap">{{ $task->description }}</flux:cell>
                    <flux:cell>
                        <flux:badge color="{{ $task->status->color() }}" size="sm" inset="top bottom">
                            {{ $task->status->label() }}</flux:badge>
                    </flux:cell>
                    <flux:cell>{{ $task->createdAt() }}</flux:cell>
                </flux:row>
            @endforeach
        </flux:rows>
    </flux:table>
</div>
