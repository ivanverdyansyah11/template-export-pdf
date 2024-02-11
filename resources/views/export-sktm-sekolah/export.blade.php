<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .image-full {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-bottom: 3px solid black;
        }

        .title {
            width: 51%;
            text-align: center;
            position: absolute;
            top: 24%;
            left: 50%;
            transform: translate(-50%);
            text-transform: uppercase;
            font-size: 1.2rem;
            border-bottom: 2px solid black;
        }

        .subtitle {
            position: absolute;
            top: 28.5%;
            left: 50%;
            transform: translate(-50%);
            font-size: 0.913rem;
        }

        .description {
            position: absolute;
            top: 31.5%;
            left: 50%;
            width: 92%;
            transform: translate(-50%);
            font-size: 0.913rem;
            line-height: 150%;
            text-indent: 42px;
        }

        .input-group label {
            width: 22% !important;
            position: absolute;
            transform: translate(-50%);
            font-size: 0.913rem !important;
        }

        .input-group div {
            width: 5% !important;
            position: absolute;
            transform: translate(-50%);
            font-size: 0.913rem !important;
        }

        .input-group span {
            width: 67% !important;
            position: absolute;
            transform: translate(-50%);
            font-size: 0.913rem !important;
        }

        .input-group.one label {
            top: 39%;
            left: 17.5%;
        }

        .input-group.one div {
            top: 39%;
            left: 28%;
        }

        .input-group.one span {
            top: 39%;
            left: 61.3%;
            text-transform: uppercase;
            font-weight: bold;
        }

        .input-group.two label {
            top: 42%;
            left: 17.5%;
        }

        .input-group.two div {
            top: 42%;
            left: 28%;
        }

        .input-group.two span {
            top: 42%;
            left: 61.3%;
        }

        .input-group.three label {
            top: 45%;
            left: 17.5%;
        }

        .input-group.three div {
            top: 45%;
            left: 28%;
        }

        .input-group.three span {
            top: 45%;
            left: 61.3%;
        }

        .input-group.four label {
            top: 48%;
            left: 17.5%;
        }

        .input-group.four div {
            top: 48%;
            left: 28%;
        }

        .input-group.four span {
            top: 48%;
            left: 61.3%;
        }

        .input-group.seven label {
            top: 51%;
            left: 17.5%;
        }

        .input-group.seven div {
            top: 51%;
            left: 28%;
        }

        .input-group.seven span {
            top: 51%;
            left: 61.3%;
        }

        .input-group.eight label {
            top: 54%;
            left: 17.5%;
        }

        .input-group.eight div {
            top: 54%;
            left: 28%;
        }

        .input-group.eight span {
            top: 54%;
            left: 61.3%;
        }

        .input-group.five label {
            top: 57%;
            left: 17.5%;
        }

        .input-group.five div {
            top: 57%;
            left: 28%;
        }

        .input-group.five span {
            top: 57%;
            left: 61.3%;
        }

        .input-group.nine label {
            top: 68%;
            left: 17.5%;
        }

        .input-group.nine div {
            top: 68%;
            left: 28%;
        }

        .input-group.nine span {
            top: 68%;
            left: 61.3%;
        }

        .input-group.ten label {
            top: 71%;
            left: 17.5%;
        }

        .input-group.ten div {
            top: 71%;
            left: 28%;
        }

        .input-group.ten span {
            top: 71%;
            left: 61.3%;
        }

        .input-group.eleven label {
            top: 74%;
            left: 17.5%;
        }

        .input-group.eleven div {
            top: 74%;
            left: 28%;
        }

        .input-group.eleven span {
            top: 74%;
            left: 61.3%;
        }

        .input-group.twelve label {
            top: 77%;
            left: 17.5%;
        }

        .input-group.twelve div {
            top: 77%;
            left: 28%;
        }

        .input-group.twelve span {
            top: 77%;
            left: 61.3%;
        }

        .card-ttd:first-child p:first-child {
            text-align: center;
            font-size: 0.913rem;
            width: 40%;
            position: absolute;
            bottom: 11.7%;
            left: 20%;
            transform: translate(-50%);
        }

        .card-ttd:first-child p:nth-child(2) {
            text-align: center;
            font-size: 0.913rem;
            width: 40%;
            position: absolute;
            bottom: 9.8%;
            left: 20%;
            transform: translate(-50%);
        }

        .card-ttd:first-child p.other {
            text-align: center;
            font-size: 0.913rem;
            width: 40%;
            position: absolute;
            bottom: 7.9%;
            left: 20%;
            transform: translate(-50%);
        }

        .card-ttd:first-child .card-canvas {
            width: 30%;
            height: 70px;
            position: absolute;
            bottom: 1%;
            left: 20%;
            transform: translate(-50%);
            border-bottom: 1px dashed black;
        }

        .card-ttd:last-child p:first-child {
            text-align: center;
            font-size: 0.913rem;
            width: 40%;
            position: absolute;
            bottom: 11.7%;
            left: 80%;
            transform: translate(-50%);
        }

        .card-ttd:last-child p:nth-child(2) {
            text-align: center;
            font-size: 0.913rem;
            width: 40%;
            position: absolute;
            bottom: 9.8%;
            left: 80%;
            transform: translate(-50%);
        }

        .card-ttd:last-child p.other {
            text-align: center;
            font-size: 0.913rem;
            width: 40%;
            position: absolute;
            bottom: 7.9%;
            left: 80%;
            transform: translate(-50%);
        }

        .card-ttd:last-child .card-canvas {
            width: 30%;
            height: 70px;
            position: absolute;
            bottom: 1%;
            left: 80%;
            transform: translate(-50%);
            border-bottom: 1px dashed black;
        }

        .description-other {
            position: relative;
            top: 60%;
            left: 50%;
            width: 92%;
            transform: translate(-50%);
        }

        .paragraph-one {
            font-size: 0.913rem;
            line-height: 150%;
            text-indent: 42px;
        }

        .description-other-bottom {
            position: relative;
            top: 70.5%;
            left: 50%;
            width: 92%;
            transform: translate(-50%);
        }

        .paragraph-two {
            font-size: 0.913rem;
            line-height: 150%;
            text-indent: 42px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <img src="{{ public_path('assets/banner-top.png') }}" alt="Banner Top" class="image-full">
        <img src="{{ public_path('assets/border-top.png') }}" alt="Border Top" class="border-full">
        <h3 class="title">Surat Keterangan Tidak Mampu</h3>
        <div class="content-form">
            <p class="subtitle">Nomor: 416/ 05 / I / Ket / Kel.Sub / 2024</p>
            <p class="description">Yang bertanda tangan di bawah ini, Lurah Subagan, Kecamatan Karangasem, Kabupaten Karangasem, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
            <div class="input-group one">
                <label>Nama</label>
                <div>:</div>
                <span>Putu Aditya Prayatna</span>
            </div>
            <div class="input-group two">
                <label>Tempat Tanggal Lahir</label>
                <div>:</div>
                <span>Subagan, 04-06-1976</span>
            </div>
            <div class="input-group three">
                <label>Jenis Kelamin</label>
                <div>:</div>
                <span>Laki-Laki</span>
            </div>
            <div class="input-group four">
                <label>Agama</label>
                <div>:</div>
                <span>Hindu</span>
            </div>
            <div class="input-group seven">
                <label>Pekerjaan</label>
                <div>:</div>
                <span>Wiraswasta</span>
            </div>
            <div class="input-group eight">
                <label>Agama</label>
                <div>:</div>
                <span>Hindu</span>
            </div>
            <div class="input-group five">
                <label>Alamat</label>
                <div>:</div>
                <span>Lingkungan Desa, Kelurahan Subagan,  Kecamatan Karangasem, Kabupaten Karangasem.</span>
            </div>
            <div class="description-other">
                <p class="paragraph-one">Berdasarkan Surat Pengantar dari Kepala Lingkungan Desa, No. 04 / LD / I / 2023 tanggal 05 Januari 2024, memang benar orang tersebut diatas kurang mampu, untuk Membiayai Sekolah Anaknya, Atas Nama:</p>
            </div>
            <div class="input-group nine">
                <label>Nama</label>
                <div>:</div>
                <span>Putu Aditya Prayatna</span>
            </div>
            <div class="input-group ten">
                <label>Tempat Tanggal Lahir</label>
                <div>:</div>
                <span>Subagan, 04-06-1976</span>
            </div>
            <div class="input-group eleven">
                <label>Jenis Kelamin</label>
                <div>:</div>
                <span>Laki-Laki</span>
            </div>
            <div class="input-group twelve">
                <label>Sekolah</label>
                <div>:</div>
                <span>STKIP AMLAPURA</span>
            </div>
            <div class="description-other-bottom">
                <p class="paragraph-two">Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
            </div>
        </div>
        <div class="content-ttd">
            <div class="card-ttd">
                <p>Mengetahui</p>
                <p>Camat Karangasem</p>
                {{-- <p class="other">Kepala Lingkungan Jasri Kelod</p> --}}
                <div class="card-canvas">
                    <img src="{{ public_path('assets/banner-top.png') }}" style="width: 100%; height: 100%;">
                </div>
            </div>
            <div class="card-ttd">
                <p>Subagan, 22 Pebruari 2023</p>
                <p>A.n, Lurah Subagan</p>
                <p class="other">Sekretaris</p>
                <div class="card-canvas">
                    <img src="{{ public_path('assets/banner-top.png') }}" style="width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
</body>
</html>