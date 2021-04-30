<div>
    <div class="px-3 py-2 bg-#FAFAFA">
        <div class="relative">
            <a href="#">
                <i class="mdi mdi-chevron-left text-4xl"></i>
            </a>
            <div class="font-bold absolute left-0 right-0 top-0 bottom-0 flex items-center justify-center text-lg">
                My Questions
            </div>
        </div>
    </div>

    <div class="p-5 py-2">
        <div class="rounded border border-#D5D5D5 flex items-center overflow-hidden">
            <i class="mdi mdi-magnify text-3xl ml-2"></i>
            <input wire:model="search" type="text" class="w-full p-2 font-semibold focus:outline-none" placeholder="Search Question" />
        </div>
    </div>

    <ul class="py-2 overflow-x-auto flex text-sm">
        <li>
            <div class="w-5"></div>
        </li>
        <li>
            <button wire:click="setStatus" type="button" class="whitespace-nowrap p-2 py-1 border rounded font-semibold focus:outline-none {{ $status ? 'border-#D5D5D5' : 'border-#4B93F5 text-#4B93F5 bg-#4B93F526' }}">
                All
            </button>
        </li>
        @foreach($statuses as $each)
            <li>
                <div class="w-3"></div>
            </li>
            <li>
                <button wire:click="setStatus({{ $each->id }})" type="button"
                        class="whitespace-nowrap p-2 py-1 border rounded font-semibold focus:outline-none {{ $each->id == $status ? 'border-#4B93F5 text-#4B93F5 bg-#4B93F526' : 'border-#D5D5D5' }}">
                    {{ $each->label }}
                </button>
            </li>
        @endforeach
        <li>
            <div class="w-5"></div>
        </li>
    </ul>

    <ul class="px-5 py-4">
        @foreach ($questions as $question)
            <li class="mb-4">
                @include('includes.question', $question)
            </li>
        @endforeach
    </ul>
</div>
