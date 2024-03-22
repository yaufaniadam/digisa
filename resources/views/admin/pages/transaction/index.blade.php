<x-admin.layout>
    @push('css')
        <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    @endpush

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Transaksi</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Nama Pengguna</th>
                            <th>Tanggal Pembelian</th>
                            <th>Daftar Item</th>
                            <th>Status Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>
                                    <h6>
                                        {{ $transaction->id }}
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <a href="{{ route('admin.detail_transaction', $transaction->id) }}">
                                            {{ $transaction->user->name }}
                                        </a>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        {{ $transaction->created_at }}
                                    </h6>
                                </td>
                                <td>
                                    @foreach ($transaction->transactionItems as $item)
                                        <h6>{{ $item->product->name }}</h6>
                                    @endforeach
                                </td>
                                <td>
                                    <h6>{{ $transaction->status }}</h6>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
    @endpush


</x-admin.layout>
