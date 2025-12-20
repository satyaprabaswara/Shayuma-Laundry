<h2>Order Laundry</h2>

@foreach($layanans as $l)
    <p>{{ $l->nama }} - Rp {{ $l->harga_perkg }}</p>
@endforeach
