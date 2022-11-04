<div>
    <form wire:submit.prevent="submit">
        {{ $this->form }}
        <div class="mt-2">
            <button class="rounded-full bg-teal-500 px-6 py-2 text-white" type="submit">
                {{ __('Create Post') }}
            </button>
        </div>
    </form>
    {{ rand(0, 100) }}
</div>
