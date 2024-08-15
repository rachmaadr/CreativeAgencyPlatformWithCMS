<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-28 flex flex-col">
            
            <hr class="my-10">
            <div class="flex flex-col gap-y-5">
                @forelse ($orders as $order)
                <div class="item-project flex flex-col sm:flex-row sm:items-center sm:justify-between p-5 bg-gray-100 rounded-lg shadow-md">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-x-5 mb-5 sm:mb-0">
                        
                        <div class="flex flex-col gap-y-1">
                            <h3 class="font-bold text-xl">
                                {{ $order->name }}
                            </h3>
                            <p class="text-sm text-slate-400">
                                {{ $order->category }}
                            </p>
                        </div>
                    </div>
                    <h3 class="font-bold text-xl">
                                {{ $order->budget }}
                            </h3>
                    <div class="flex flex-col sm:flex-row gap-x-2 gap-y-2 sm:gap-y-0">
                        
                        <a href="{{ route('admin.project_orders.show', $order) }}" class="py-3 px-5 rounded-full bg-indigo-500 text-white text-center">
                            View Detail
                        </a>
                    </div>
                </div>
                @empty
                <p class="text-center text-gray-500">Belum ada Order Tersedia</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

</x-app-layout>
