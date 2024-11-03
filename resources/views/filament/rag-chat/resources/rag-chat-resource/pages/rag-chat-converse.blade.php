<x-filament-panels::page>
<form wire:submit.prevent="submit">
        {{ $this->form }}

        <x-filament::button type="submit" class="mt-4">
            Send
        </x-filament::button>
    </form>

    <div class="mt-8 space-y-4">
        @foreach ($messages as $message)
            <div class="p-4 {{ $message['role'] === 'user' ? 'bg-blue-100' : 'bg-gray-100' }} rounded-lg">
                <p class="font-semibold">{{ ucfirst($message['role']) }}:</p>
                <p>{{ $message['content'] }}</p>
            </div>
        @endforeach
    </div>

    <div id="streaming-content" class="mt-4 p-4 bg-gray-100 rounded-lg" wire:ignore></div>

    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('newChatContent', function (data) {
                document.getElementById('streaming-content').innerHTML = data.content;
            });
        });
    </script>

</x-filament-panels::page>
