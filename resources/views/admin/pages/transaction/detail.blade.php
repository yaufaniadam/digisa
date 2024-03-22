<x-admin.layout>
    @push('css')
        <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}"
            rel="stylesheet">
    @endpush

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="col-12">
                <div class="d-flex">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <h6>
                                    ID Transaksi
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    {{ $transaction->id }}
                                </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6>
                                    Tanggal Transaksi
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    {{ $transaction->created_at }}
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <h6>
                                    Status Pembayaran
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    {{ $transaction->status }}
                                </h6>
                            </div>
                        </div>
                        @if($transaction->status == 'lunas')
                            <div class="row">
                                <div class="col-6">
                                    <h6>
                                        Tanggal Konfirmasi Pembayaran
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6>
                                        {{ $transaction->updated_at }}
                                    </h6>
                                </div>
                            </div>
                        @endif
                        @if($transaction->status == 'pending')
                            <form
                                action="{{ route('admin.complete_transaction', $transaction->id) }}"
                                method="POST"
                                onsubmit="return confirm('Selesaikan transaksi? Transaksi yang telah diselesaikan tidak dapat diubah dengan cara apapun, pastikan pengguna benar-benar telah melakukan pembayaran.')">
                                @csrf
                                <button type="submit" class="btn btn-block btn-sm btn-primary">
                                    Transaksi Selesai
                                </button>
                            </form>
                        @endif

                    </div>
                </div>

                <hr>
                <div class="col-12">
                    <h4 class="mb-3">
                        Daftar Item :
                    </h4>

                    <div class="card">
                        <div class="card-header d-flex">
                            <div class="col-6">
                                <h6>
                                    Nama
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    Harga
                                </h6>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach($transaction->transactionItems  as $item)
                                <div class="d-flex mb-1">
                                    <div class="col-6">
                                        <h6>
                                            {{ $item->product->name }}
                                        </h6>
                                    </div>
                                    <div class="col-6">
                                        <h6>
                                            Rp. {{ $item->price }}
                                        </h6>
                                    </div>
                                </div>
                            @endforeach
                            <hr>
                            <div class="d-flex">
                                <div class="col-6">
                                    <h6>
                                        Total pembayaran
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6>
                                        Rp. {{ $transaction->payment_amount }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable();
            });

        </script>
    @endpush


</x-admin.layout>
