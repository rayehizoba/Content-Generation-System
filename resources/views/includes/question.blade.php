<div class="rounded p-4 shadow-lg text-white flex {{ $question->className }}">
    <div>
        <p class="text-xs text-white">
            {{ $question->created_at->format('M d,y') }}
        </p>
        <p class="font-bold pt-1 pb-6 text-white">
            {{ $question->label }}
        </p>
    </div>
    <div class="flex flex-col justify-between items-end -m-2">
        <div></div>
        <div class="rounded p-2 text-xs font-semibold whitespace-nowrap {{ $question->status->className }}">
            {{ $question->status->label }}
        </div>
    </div>
</div>
