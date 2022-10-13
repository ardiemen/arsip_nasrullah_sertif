@extends('layouts.adminApp')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <div class="card-header py-3">
                    <h3>About</h3>
                </div>
            </div>
        </div>

        <!-- Hoverable rows start -->
        <section class="section">
            <div class="card">
                <div class="card-content">
                    <div class="row m-4">
                        <div class="col-2">
                            <img src="{{ asset('about.png') }}" alt="" width="100%" height="100%" class="rounded">
                        </div>
                        <div class="col-10">
                            <p class="fw-4">
                                Aplikasi ini dibuat oleh: <br>
                                Nama:  M. Nasrullah Ardiansyah <br>
                                NIM:   1931730121 <br>
                                Tanggal: 13 Oktober 2022 <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hoverable rows end -->

    </div>
</section>
@endsection
