@extends('layouts_warga.app')
@section ('content')
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <style>
                .big-text {
                    font-size: 28px; /* Ubah ukuran font sesuai kebutuhan */
                }
            </style>
            <title>Halaman Warga</title>
        </head>
        <body>
            <div class="body">
                <div class="card">
                    <div class="card-body text-white text-center font-weight-bold" style="background-image: url('https://backpanel.kemlu.go.id/PublishingImages/News_Kopenhagen/12_22062019_Indonesian_Bazaar_Horsens/2.%20Dubes%20RI%20dan%20Masyarakat%20Indonesia.jpg'); background-size: cover; background-position: center;">
                        <p class="card-text big-text">Selamat Datang di Halaman Warga!</p>
                        <form class="mx-auto" style="width: 400px;">
                            <div class="input-group">
                                <input type="text" class="form-control border-12" placeholder="Search Mail" aria-label="Search Mail" aria-describedby="search-mail">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </body>
        
        {{-- tabel data warga  --}}
    <div class="card">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="background-color: #f8f9fa; border: 1px solid #dee2e6;">
                            <thead style="background-color: #4ac9ec; color: #fff;">
                                <tr>
                                    <th style="border: 1px solid #dee2e6;">No</th>
                                    <th style="border: 1px solid #dee2e6;">NAMA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datawarga as $index => $penduduk)
                                <tr>
                                    <td style="border: 1px solid #dee2e6;">{{ $index + 1 }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $penduduk->nama }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- Button Pagination --}}
                        <div class="text-center mt-3">
                            <a href="{{ $datawarga->previousPageUrl() }}" class="btn btn-primary {{ $datawarga->onFirstPage() ? 'disabled' : '' }}">Previous</a>
                            <a href="{{ $datawarga->nextPageUrl() }}" class="btn btn-primary {{ $datawarga->hasMorePages() ? '' : 'disabled' }}">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </div>
    

@endsection

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
