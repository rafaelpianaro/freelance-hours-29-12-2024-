<div class="flex items-center justify-around mt-4 text-[14px]" wire:poll.1s>
    <div class="text-[#8C8C9A]  leading-6">Encerra em:</div>
    <div class="flex items-center space-x-1 font-bold">
        <span class="text-white ">{{ $days }}</span><span>:</span>
        <span class="text-white ">{{ $hours }}</span><span>:</span>
        <span class="text-white ">{{ $minutes }}</span><span>:</span>
        <span class="text-white ">{{ $seconds }}</span>
    </div>
</div>