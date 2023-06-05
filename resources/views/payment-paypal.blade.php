<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Paypal Wallet') }}
        </h2>
    </x-slot>

    <div class="p-12">
        <div class="col-lg-5 mx-auto sm:px-6 lg:px-8 py-5">
            <x-message-success />
            <x-message-danger />
            <div class="dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-5">
                <x-form-paypal />
            </div>
            <div class="dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-5 mt-5">
                <div class="card-header pb-5">
                    <h1 class="text-white">Paypal Payment Summary</h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paypal as $item)
                                <tr>
                                    <td>$ {{ $item->amount }}</td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
