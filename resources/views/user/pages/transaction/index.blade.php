<x-user.layout>
    @push('css')
        {{-- <link rel="stylesheet" href="{{ asset('css/datatable-bootstrap-5.min.css') }}">
        --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    @endpush

    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 20%">ID Transaksi</th>
                                <th style="width: 20%">Status Transaksi</th>
                                <th style="width: 60%">Daftar Item</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>
                                        <a href="{{ route('user.transaction_detail', $transaction->id) }}">
                                            {{ $transaction->id }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $transaction->status }}
                                    </td>
                                    <td>
                                        @foreach ($transaction->transactionItems as $item)
                                            <div class="card mb-1">
                                                <div class="card-body">
                                                    {{ $item->product->name }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>


    @push('js')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script>
            const table = new DataTable('#example');

            // table.on('order.dt search.dt', function() {
            //     let i = 1;

            //     table
            //         .cells(null, 0, {
            //             search: 'applied',
            //             order: 'applied'
            //         })
            //         .every(function(cell) {
            //             this.data(i++);
            //         });
            // }).draw();
        </script>
    @endpush
</x-user.layout>
