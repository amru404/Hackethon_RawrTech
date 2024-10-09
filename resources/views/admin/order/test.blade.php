@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <form method="POST" action="{{ route('admin.order.store') }}">
        @csrf
        <div class="form-group">
            <label for="tanggal_ticket">Select Date</label>
            <input type="date" class="form-control" id="tanggal_ticket" name="tanggal_ticket" required>
        </div>

        <div class="form-group">
            <label for="ticket_id">Ticket</label>
            <select class="form-control" id="ticket_id" name="ticket_id" required>
                <option value="">Select a date first</option>
            </select>
        </div>

        <input type="hidden" name="kode_order" value="0">
        <input type="hidden" name="total_harga" value="0" >
        <input type="hidden" name="status_pembayaran" value="belum_bibayar" >


        <div class="form-group">
            <label for="user_id">Nama User </label>
            <select class="form-control" id="user_id" name="user_id">
                @foreach ($user as $u)
                <option value="{{$u->id}}">{{$u->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="qty">Quantity</label>
            <input type="number" name="qty" class="form-control" id="qty" aria-describedby="emailHelp">
            @if ($errors->has('qty'))
            <div class="alert alert-danger">
                {{ $errors->first('qty') }}
            </div>
            @endif
        </div>


        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select class="form-control" id="metode_pembayaran" name="metode_pembayaran">
            <option value='-'>.. Select ..</option>
            <option value='transfer'>Transfer Bank</option>
            <option value='qris'>Qris</option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
</div>

<script>
    document.getElementById('tanggal_ticket').addEventListener('change', function () {
        let date = this.value; 
        

        fetch(`/api/tickets?date=${date}`)
            .then(response => response.json()) // Ubah respon menjadi JSON
            .then(data => {
                let ticketSelect = document.getElementById('ticket_id');
                ticketSelect.innerHTML = '';

                if (data.length > 0) {
                    // Loop melalui tiket yang didapatkan dari API
                    data.forEach(ticket => {
                        let option = document.createElement('option');
                        option.value = ticket.id; // Set value dengan id tiket
                        option.text = `${ticket.product.nama} | Stock: ${ticket.stock}`; // Tampilkan nama produk dan stok
                        ticketSelect.appendChild(option); // Tambahkan opsi ke dropdown
                    });
                } else {
                    // Jika tidak ada tiket untuk tanggal yang dipilih
                    let option = document.createElement('option');
                    option.text = 'Ticket tidak tersedia untuk tanggal tersebut'; // Pesan jika tiket tidak tersedia
                    ticketSelect.appendChild(option);
                }
            })
            .catch(error => {
                console.error('Error fetching tickets:', error);
                let ticketSelect = document.getElementById('ticket_id');
                let option = document.createElement('option');
                option.text = 'Error loading tickets'; // Pesan error jika terjadi kesalahan
                ticketSelect.appendChild(option);
            });
    });
</script>



@endsection
