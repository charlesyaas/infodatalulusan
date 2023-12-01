<x-filament::breadcrumbs :breadcrumbs="[
    '/admin' => 'Dashboard',
    '#' => 'Kelulusan'
]" />

<div class="flex justify-between mt-1">
    <div class="font-bold text-3xl">
        Data Kelulusan
    </div>
    <div>
        {{ $data }}
    </div>
</div>
<div>
    <form wire:submit="save" class="w-full max-w-sm flex mt-2">
        <div class="mb-4">

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            id="file_input" type="file" wire:model='file'>
        </div>
        <div class="flex items-center justify-between mt-3">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Unggah
            </button>
        </div>
    </form>
</div>
