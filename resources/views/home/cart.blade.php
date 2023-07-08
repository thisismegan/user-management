@extends('home.layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-start detail-produk">
            <h4>Karanjang</h4>
            @if($carts->count()!=0)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @foreach ($carts as $cart)
                             <div class="card mb-2">
                            <a href="{{ route('detail-product',$cart->product->id) }}" style="text-decoration: none">
                            <div class="card-body text-dark">
                                 @foreach ($cart->product->image as $index => $key)
                                    @if($index == 0)
                                     <img src="{{ asset('storage/product/'.$key['image_name']) }}" class="card-image-top" width="60"> {{ $cart->product->title }}
                                    @endif
                                @endforeach
                                <h5>Rp{{ number_format($cart->product->price,0,',','.') }}</h5>
                                {{-- <div class="row">
                                    <div class="col-md-2 offset-8">
                                        <button class="btn btn-danger btn-sm me-2"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-sm mb-2">
                                            <button class="btn btn-success btn-sm"><i class="fa fa-minus"></i></button>
                                            <input type="text" class="form-control text-center" min="1" max="stock"
                                                value="1">
                                            <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            </a>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-body">
                        <input name="kode_voucher" id="kode_voucher" class="form-control" type="text"
                            placeholder="Masukkan kode voucher">
                        <small>* S&K Berlaku</small>
                        <hr>
                        <h4>Ringkasan Belanja</h4>
                        <table>
                            <tr>
                                <td>Harga Barang ({{$cart->qty}})</td>
                                <?php $subtotal = $cart->qty * $cart->product->price  ?>
                                <td class="align-content-end">: Rp{{ number_format($subtotal,0,',','.')}}</td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td class="align-content-end">: -</td>
                            </tr>
                            <tr>
                                <td><b>Total Harga</b></td>
                                <td class="align-content-end">
                                    <b>: Rp{{ number_format( $subtotal,0,',','.') }}</b>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark d-grid">Bayar</button>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="card">
                <div class="card-body">
                     <div class="alert alert-warning" role="alert">
                    Keranjangmu masih kosong
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection