<div>
    <h2 class="text-lg font-semibold">Gérer les Réservations</h2>

    <div class="space-y-4 mt-4">
        <div>
            <label for="startDate" class="block text-sm font-medium text-gray-700">Date de début</label>
            <input type="date" id="startDate" wire:model="startDate" class="mt-1 block w-full" />
        </div>

        <div>
            <label for="endDate" class="block text-sm font-medium text-gray-700">Date de fin</label>
            <input type="date" id="endDate" wire:model="endDate" class="mt-1 block w-full" />
        </div>

        <div>
            <button wire:click="createBooking" class="bg-primary text-white px-4 py-2 rounded">
                Créer une réservation
            </button>
        </div>

        @if (session()->has('message'))
        <div class="mt-4 text-green-600">{{ session('message') }}</div>
        @endif
    </div>
</div>