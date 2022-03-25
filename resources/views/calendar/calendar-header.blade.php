{{-- <div class="p-2">
    <div class="relative z-0 inline-flex shadow-sm">
        <button wire:click="goToPreviousMonth" type="button"
            class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            <
        </button>
        <button type="button"
            class="bg-orange-400 text-white -ml-px relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 text-sm leading-5 font-medium focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 transition ease-in-out duration-150">
            {{ $startsAt->format('F Y') }}
        </button>
        <button wire:click="goToNextMonth" type="button"
            class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            >
        </button>
    </div>
</div> --}}
<style>
.menu{
    display: grid;
    grid-template-columns: 20% 10% 40% 10% 20%;
    grid-template-areas: ". prev-btn calendar-title next-btn .";
    padding: 5px;
}

.title{
    grid-area: calendar-title;
    margin: auto;
}

button:hover, button:focus{
    background-color: lightgrey;
}

button#previous{
    grid-area: prev-btn
}

button#next{
    grid-area: next-btn
}

</style>

<div class="menu">
    <button id="previous" wire:click="goToPreviousMonth"><</button>
    <h3 class="title">{{ $startsAt->format('F Y') }}</h3>
    <button id="next" wire:click="goToNextMonth">></button>
</div>
