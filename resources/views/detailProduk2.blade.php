@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/styleSingleProduk.css') }}">
@endsection

@section('title','produk')

@section('notif','hidden')

@section('konten')
      <!-- Breadcrum -->
        <div class="container">
            <nav aria-label="breadcrumb" style="background-color: #f2f2f2;" class="mt-4">
                <ol class="breadcrumb p-4 ">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none" >Home</a></li>
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none" >Kategori</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Produk</li>
                </ol>
              </nav>
        </div>

      <!-- Akhir Breadcrum -->

      <!-- Detail Produk -->
            <div class="container">
                <div class="row row-produk">
                    <div class="col-lg-5">
                        <figure class="figure">
                            <img src="{{ asset('gambar/slide6.jpg') }}" class="figure-img img-fluid " style="border-radius: 5px; width: 450px;" >
                            <figcaption class="figure-caption d-flex justify-content-evenly">
                                <a href="#">
                                    <img src="{{ asset('gambar/slide6.jpg') }}" class="figure-img img-fluid " style="border-radius: 5px; width: 70px;" >
                                </a>
                                <a href="#">
                                    <img src="{{ asset('gambar/slide6.jpg') }}" class="figure-img img-fluid " style="border-radius: 5px; width: 70px;" >
                                </a>
                                <a href="#">
                                    <img src="{{ asset('gambar/slide6.jpg') }}" class="figure-img img-fluid " style="border-radius: 5px; width: 70px;" >
                                </a>
                                <a href="#">
                                    <img src="{{ asset('gambar/slide6.jpg') }}" class="figure-img img-fluid " style="border-radius: 5px; width: 70px;" >
                                </a>
                                <a href="#">
                                    <img src="{{ asset('gambar/slide6.jpg') }}" class="figure-img img-fluid " style="border-radius: 5px; width: 70px;" >
                                </a>
                            </figcaption>
                          </figure>

                    </div>

                    <div class="col-lg-7">
                        <h3>CREWNECK NY</h3>
                        
                        <h6 class=" d-inline-block label-rating rating">4.5</h6>
                        <i class="fa fa-star text-succes rating"></i>
                        <i class="fa fa-star text-succes rating"></i>
                        <i class="fa fa-star text-succes rating"></i>
                        <i class="fa fa-star text-succes rating"></i>
                        <i class="fa fa-star-half-alt text-succes rating"></i>
                        
                        
                        <h6 class=" d-inline-block penilaian"><strong>10</strong> Penilaian</h6>
                        <h6 class=" d-inline-block"><strong>20</strong> Terjual</h6>

                        <br>
                        <br>
                        <h3 class="mb-3 harga">Rp 199,000</h3>
                        <br>
                        <h6 class=" d-inline-block" style="margin-right:20px;">Kuantitas</h6>
                        <button type="button" class="btn btn-dark btn-sm" id="kurang"><i class="fas fa-minus"></i></button>
                        <input class=" mx-2" id="total" name="total" value="1" style="width:40px;height:31px;padding-bottom:6px;"></input>
                        <button type="button" class="btn btn-warning btn-sm" id="tambah"><i class="fas fa-plus text-white"></i></button>
                        <span class="mx-2">tersisa 94 PCS</span>
                        <br>
                        <br>
                        <div>
                            <p>Pilih variasi : </p>
                        </div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="variasi" id="variasi1"  checked>
                                <label class="form-check-label" >
                                    M - 61 cm x 49 cm
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="variasi" id="variasi2">
                                <label class="form-check-label" >
                                    L - 64 cm x 55 cm
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="variasi" id="variasi3">
                                <label class="form-check-label">
                                    XL - 69 cm x 58 cm
                                </label>
                            </div>
                        </div>
                        <br>
                        <h7>Perhatikan JAPMAR size chart (Panjang x Lebar)</h7>

                        <div class="btn-produk mt-4">
                            <a href="#" class="btn btn-primary me-2 btn-custom" ><i class="fas fa-shopping-cart fs-6 me-2"></i> Masukkan Keranjang</a>
                            <a href="#" class="btn btn-danger btn-custom" >Beli Sekarang</a>
                        </div>





                        <table class="table table-borderless d-none">
                            <tr>
                                <th>CREWNECK NY</th>
                            </tr>
                            <tr>
                                <td>Refrensi tinggi 170 cm, BB 68 kg pakai size L 100% real pict</td>
                            </tr>
                            <tr>
                                <td>Perhatikan JAPMAR size chart (Panjang x Lebar)</td>
                                <td>M - 61 cm x 49 cm</td>
                                <td>L - 64 cm x 55 cm</td>
                                <td>XL - 69 cm x 58 cm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3>Deskripsi Produk</h3>
                <br>
                <div class="container-label-deskripsi">
                    <p class="label-deskripsi">Kategori</p>
                    <p class="deskripsi">: Kategori</p>
                    <br>
                    <p class="label-deskripsi">Merk</p>
                    <p class="deskripsi">: Merk</p>
                    <br>
                    <p class="label-deskripsi">Stok</p>
                    <p class="deskripsi">: Stok</p>
                    <br>
                    <p class="label-deskripsi">Dikirim Dari</p>
                    <p class="deskripsi">: Dikirim Dari</p>
                </div>
                <br>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae cumque, animi nesciunt expedita nam enim aperiam inventore ad accusantium facilis dicta possimus cum deserunt maiores impedit vero, ratione quibusdam cupiditate.
                </p>
                
            </div>
@endsection

@section('footer')

      <FOOter class="bg-dark text-white p-5">
          <div class="row">
              <div class="col-md-3">
                  <h5>LAYANAN PELANGGAN</h5>
                  <ul>
                      <li>Pusat Bantuan</li>
                      <li>Cara Pembelian</li>
                      <li>Pengiriman</li>
                      <li>Cara Pengembalian</li>
                  </ul>
              </div>
              <div class="col-md-3">
                  <h5>TENTANG KAMI</h5>
              </div>
              <div class="col-md-3">
                  <h5>MITRA KERJA SAMA</h5>
                  <ul>
                      <li>JNT Express</li>
                      <li>JNE</li>
                      <li>Si Cepat</li>
                      <li>Pos Indonesia</li>
                      <li>Ninja Express</li>
                  </ul>
              </div>
              <div class="col-md-3">
                  <h5>HUBUNGI KAMI</h5>
                  <ul>
                      <li>+62 888 777 999 111</li>
                      <li>Customer@T-shirtshop.com</li>
                  </ul>
              </div>
          </div>
      </FOOter>
@endsection

@section('script2')
    <script>
        $("#tambah").click(function(){
            $('#total').get(0).value++ 
        });

        $("#kurang").click(function(){
            if($('#total').val() > 1){
                $('#total').get(0).value--
            } 
        });


    </script>
@endsection