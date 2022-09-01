<?php echo $this->extend('layout/login_layout');

echo $this->section('konten'); ?>
<main class="main" id="top">
    <div class="container-fluid">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        <div class="row min-vh-100 bg-100">
            <div class="col-6 d-none d-lg-block position-relative">
                <div class="bg-holder overlay" style="background-image:url(/template/assets/img/generic/taman_singapur.jpg);background-position: 50% 76%;">
                </div>
                <!--/.bg-holder-->

            </div>
            <div class="col-sm-10 col-md-6 px-sm-0 align-self-center mx-auto py-5">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-9 col-xl-8 col-xxl-6">
                        <div class="card">
                            <div class="card-header bg-circle-shape bg-shape text-center p-2"><a class="font-sans-serif fw-bolder fs-4 z-index-1 position-relative link-light light" href="/">SID</a></div>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h4 class="mb-0"> Lupa Password Anda?</h4><small>Masukkan email Anda dan kami akan mengirimkan tautan reset.</small>
                                    <form class="mb-3 mt-4">
                                        <input class="form-control" type="email" name="email" placeholder="Alaman Email" />
                                        <div class="mb-3"></div>
                                        <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Kirim</button>
                                    </form><a class="fs--1 text-600" href="/">Kembali ke halaman login<span class="d-inline-block ms-1">&rarr;</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php echo $this->endSection(); ?>