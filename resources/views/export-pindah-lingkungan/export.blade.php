<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table.first {
            width: 92%;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%);
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 4px;
            text-transform: uppercase;
            font-size: 0.938rem;
        }

        .wrapper {
            width: 92%;
            position: absolute;
            top: 58%;
            left: 50%;
            transform: translate(-50%);
        }

        .wrapper .paragraph-other {
            font-size: 0.913rem;
            text-align: center;
        }

        table.name {
            width: 92%;
            text-align: center;
        }

        .title {
            width: 92%;
            text-align: center;
            position: absolute;
            top: 12%;
            left: 50%;
            transform: translate(-50%);
            text-transform: uppercase;
            font-size: 1.2rem;
            border-bottom: 2px solid black;
        }

        .subtitle {
            position: absolute;
            top: 21.5%;
            left: 50%;
            transform: translate(-50%);
            font-size: 0.913rem;
        }

        .description {
            position: absolute;
            top: 24.5%;
            left: 50%;
            width: 92%;
            transform: translate(-50%);
            font-size: 0.913rem;
            line-height: 150%;
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
            top: 30%;
            left: 17.5%;
        }

        .input-group.one div {
            top: 30%;
            left: 28%;
        }

        .input-group.one span {
            top: 30%;
            left: 61.3%;
            text-transform: uppercase;
            font-weight: bold;
        }

        .input-group.two label {
            top: 33%;
            left: 17.5%;
        }

        .input-group.two div {
            top: 33%;
            left: 28%;
        }

        .input-group.two span {
            top: 33%;
            left: 61.3%;
        }

        .input-group.three label {
            top: 36%;
            left: 17.5%;
        }

        .input-group.three div {
            top: 36%;
            left: 28%;
        }

        .input-group.three span {
            top: 36%;
            left: 61.3%;
        }

        .input-group.four label {
            top: 39%;
            left: 17.5%;
        }

        .input-group.four div {
            top: 39%;
            left: 28%;
        }

        .input-group.four span {
            top: 39%;
            left: 61.3%;
        }

        .input-group.six label {
            top: 44%;
            left: 17.5%;
        }

        .input-group.six div {
            top: 44%;
            left: 28%;
        }

        .input-group.six span {
            top: 44%;
            left: 61.3%;
            text-transform: uppercase;
            font-weight: bold;
        }

        .input-group.seven label {
            top: 47%;
            left: 17.5%;
        }

        .input-group.seven div {
            top: 47%;
            left: 28%;
        }

        .input-group.seven span {
            top: 47%;
            left: 61.3%;
        }

        .input-group.eight span {
            top: 50%;
            left: 61.3%;
        }

        .input-group.five label {
            top: 52%;
            left: 17.5%;
        }

        .input-group.five div {
            top: 52%;
            left: 28%;
        }

        .input-group.five span {
            top: 52%;
            left: 61.3%;
        }

        .input-group.nine label {
            top: 56%;
            left: 17.5%;
        }

        .input-group.nine div {
            top: 56%;
            left: 28%;
        }

        .input-group.nine span {
            top: 56%;
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
            bottom: 0.3%;
            left: 80%;
            transform: translate(-50%);
            text-transform: uppercase;
            font-weight: bold;
        }

        .card-ttd:last-child .card-canvas {
            width: 30%;
            height: 70px;
            position: absolute;
            bottom: 3.7%;
            left: 80%;
            transform: translate(-50%);
            border-bottom: 1px dashed black;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <table class="first">
            <tr>
                <td>Provinsi</td>
                <td>51</td>
                <td>Bali</td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td></td>
                <td>Karangasem</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td></td>
                <td>Karangasem</td>
            </tr>
            <tr>
                <td>Kelurahan</td>
                <td></td>
                <td>Subagan</td>
            </tr>
        </table>
        <h3 class="title">Surat Pengantar Pindah WNI <br> Antar Lingkungan <br> Dalam Desa/Kelurahan</h3>
        <div class="content-form">
            <p class="subtitle">Nomor: 475 / 65 / VII / kppdk / Kel. Subagan / 2023</p>
            <p class="description">Yang bertanda tangan di bawah ini :</p>
            <div class="input-group one">
                <label>Nama</label>
                <div>:</div>
                <span>Putu Aditya Prayatna</span>
            </div>
            <div class="input-group two">
                <label>NIK</label>
                <div>:</div>
                <span>5107040806830005</span>
            </div>
            <div class="input-group three">
                <label>Nomor KK</label>
                <div>:</div>
                <span>5107041608110002</span>
            </div>
            <div class="input-group four">
                <label>Alamat Sekarang</label>
                <div>:</div>
                <span>Lingkungan Desa, Kelurahan Subagan,  Kecamatan Karangasem, Kabupaten Karangasem.</span>
            </div>
            <div class="input-group six">
                <label>Kepala Keluarga</label>
                <div>:</div>
                <span>Putu Aditya Prayatna</span>
            </div>
            <div class="input-group seven">
                <label>Alasan Pindah</label>
                <div>:</div>
                <span>Tempat Tinggal</span>
            </div>
            <div class="input-group eight">
                <span>Dengan ini mohon pindah ke :</span>
            </div>
            <div class="input-group five">
                <label>Alamat</label>
                <div>:</div>
                <span>Lingkungan Desa, Kelurahan Subagan,  Kecamatan Karangasem, Kabupaten Karangasem.</span>
            </div>
            <div class="input-group nine">
                <label>Keluarga yang Pindah</label>
                <div>:</div>
            </div>
        </div>
        <div class="wrapper">
            <table class="name">
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama</th>
                    <th>SHDK</th>
                </tr>
                <tr>
                    <td style="width: 50px;">1</td>
                    <td>Ni Wayan Sri Eka Kumala Dewi</td>
                    <td>Istri</td>
                </tr>
                <tr>
                    <td style="width: 50px;">2</td>
                    <td>Ni Luh Putu Zerlina Palmeda Argiyanti</td>
                    <td>Anak</td>
                </tr>
                <tr>
                    <td style="width: 50px;">3</td>
                    <td>Ni Kadek Jacinda Ferica Cahyawati</td>
                    <td>Anak</td>
                </tr>
                <tr>
                    <td style="width: 50px;">4</td>
                    <td>Ni Komang Anindya Laras Utami</td>
                    <td>Anak</td>
                </tr>
            </table>
            <p class="paragraph-other">Demikian surat pengantar pindah ini agar digunakan sebagaimana mestinya.</p>
        </div>
        <div class="content-ttd">
            <div class="card-ttd">
                <p>Mengetahui</p>
                <p>An Lurah Subagan</p>
                <p class="other">Sekretaris</p>
                <div class="card-canvas">
                    <img src="{{ public_path('assets/banner-top.png') }}" style="width: 100%; height: 100%;">
                </div>
            </div>
            <div class="card-ttd">
                <p>Subagan, 6 September 2023</p>
                <p>Pemohon,</p>
                <div class="card-canvas">
                    <img src="{{ public_path('assets/banner-top.png') }}" style="width: 100%; height: 100%;">
                </div>
                <p class="other">Kadek Suarmaja</p>
            </div>
        </div>
    </div>
</body>
</html>