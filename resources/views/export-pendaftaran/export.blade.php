<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .title {
            width: 100%;
            text-align: center;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%);
            text-transform: uppercase;
            font-size: 1.125rem;
        }

        .input-group label {
            width: 40% !important;
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
            width: 50% !important;
            position: absolute;
            transform: translate(-50%);
            font-size: 0.913rem !important;
        }

        .input-group.one label:first-child {
            top: 12%;
            left: 22%;
        }

        .input-group.one label {
            top: 12%;
            left: 26%;
        }

        .input-group.one div {
            top: 12%;
            left: 49%;
        }

        .input-group.one span {
            top: 12%;
            left: 73%;
        }

        .input-group.two label:first-child {
            top: 15%;
            left: 22%;
        }

        .input-group.two label {
            top: 15%;
            left: 26%;
        }

        .input-group.two div {
            top: 15%;
            left: 49%;
        }

        .input-group.two span {
            top: 15%;
            left: 73%;
        }

        .input-group.three label:first-child {
            top: 18%;
            left: 22%;
        }

        .input-group.three label {
            top: 18%;
            left: 26%;
        }

        .input-group.three div {
            top: 18%;
            left: 49%;
        }

        .input-group.three span {
            top: 18%;
            left: 73%;
        }

        .input-group.four label:first-child {
            top: 21%;
            left: 22%;
        }

        .input-group.four label {
            top: 21%;
            left: 26%;
        }

        .input-group.four div {
            top: 21%;
            left: 49%;
        }

        .input-group.four span {
            top: 21%;
            left: 73%;
        }

        .input-group.five label:first-child {
            top: 26%;
            left: 22%;
        }

        .input-group.five label {
            top: 26%;
            left: 26%;
        }

        .input-group.five div {
            top: 26%;
            left: 49%;
        }

        .input-group.five span {
            top: 26%;
            left: 73%;
        }

        .input-group.six label:first-child {
            top: 29%;
            left: 22%;
        }

        .input-group.six label {
            top: 29%;
            left: 26%;
        }

        .input-group.six div {
            top: 29%;
            left: 49%;
        }

        .input-group.six span {
            top: 29%;
            left: 73%;
        }

        .input-group.seven label:first-child {
            top: 32%;
            left: 22%;
        }

        .input-group.seven label {
            top: 32%;
            left: 26%;
        }

        .input-group.seven div {
            top: 32%;
            left: 49%;
        }

        .input-group.seven span {
            top: 32%;
            left: 73%;
        }

        .input-group.eight label:first-child {
            top: 35%;
            left: 22%;
        }

        .input-group.eight label {
            top: 35%;
            left: 26%;
        }

        .input-group.eight div {
            top: 35%;
            left: 49%;
        }

        .input-group.eight span {
            top: 35%;
            left: 73%;
        }

        .input-group.nine label:first-child {
            top: 38%;
            left: 22%;
        }

        .input-group.nine label {
            top: 38%;
            left: 26%;
        }

        .input-group.nine div {
            top: 38%;
            left: 49%;
        }

        .input-group.nine span {
            top: 38%;
            left: 73%;
        }

        .input-group.ten label:first-child {
            top: 41%;
            left: 22%;
        }

        .input-group.ten label {
            top: 41%;
            left: 26%;
        }

        .input-group.ten div {
            top: 41%;
            left: 49%;
        }

        .input-group.ten span {
            top: 41%;
            left: 73%;
        }

        .input-group.eleven label:first-child {
            top: 44%;
            left: 22%;
        }

        .input-group.eleven label {
            top: 44%;
            left: 26%;
        }

        .input-group.eleven div {
            top: 44%;
            left: 49%;
        }

        .input-group.eleven span {
            top: 44%;
            left: 73%;
        }

        .input-group.twelve label:first-child {
            top: 47%;
            left: 22%;
        }

        .input-group.twelve label {
            top: 47%;
            left: 26%;
        }

        .input-group.twelve div {
            top: 47%;
            left: 49%;
        }

        .input-group.twelve span {
            top: 47%;
            left: 73%;
        }

        .input-group.thirteen label:first-child {
            top: 50%;
            left: 22%;
        }

        .input-group.thirteen label {
            top: 50%;
            left: 26%;
        }

        .input-group.thirteen div {
            top: 50%;
            left: 49%;
        }

        .input-group.thirteen span {
            top: 50%;
            left: 73%;
        }

        .input-group.fourteen label:first-child {
            top: 53%;
            left: 22%;
        }

        .input-group.fourteen label {
            top: 53%;
            left: 26%;
        }

        .input-group.fourteen div {
            top: 53%;
            left: 49%;
        }

        .input-group.fourteen span {
            top: 53%;
            left: 73%;
        }

        .input-group.fifteen label:first-child {
            top: 56%;
            left: 22%;
        }

        .input-group.fifteen label {
            top: 56%;
            left: 26%;
        }

        .input-group.fifteen div {
            top: 56%;
            left: 49%;
        }

        .input-group.fifteen span {
            top: 56%;
            left: 73%;
        }

        .input-group.sixteen label:first-child {
            top: 59%;
            left: 22%;
        }

        .input-group.sixteen label {
            top: 59%;
            left: 26%;
        }

        .input-group.sixteen div {
            top: 59%;
            left: 49%;
        }

        .input-group.sixteen span {
            top: 59%;
            left: 73%;
        }

        .input-group.seventeen label:first-child {
            top: 62%;
            left: 22%;
        }

        .input-group.seventeen label {
            top: 62%;
            left: 26%;
        }

        .input-group.seventeen div {
            top: 62%;
            left: 49%;
        }

        .input-group.seventeen span {
            top: 62%;
            left: 73%;
        }

        .input-group.eighteen label:first-child {
            top: 65%;
            left: 22%;
        }

        .input-group.eighteen label {
            top: 65%;
            left: 26%;
        }

        .input-group.eighteen div {
            top: 65%;
            left: 49%;
        }

        .input-group.eighteen span {
            top: 65%;
            left: 73%;
        }

        .card-ttd:first-child p:first-child {
            font-size: 0.913rem;
            width: 26%;
            position: absolute;
            bottom: 25.7%;
            left: 18%;
            transform: translate(-50%);
            text-align: center;
        }

        .card-ttd:first-child p:nth-child(2) {
            font-size: 0.913rem;
            width: 26%;
            position: absolute;
            bottom: 23.8%;
            left: 18%;
            transform: translate(-50%);
            text-align: center;
        }

        .card-ttd:first-child .card-canvas {
            width: 26%;
            height: 70px;
            position: absolute;
            bottom: 17.7%;
            left: 18%;
            transform: translate(-50%);
            text-align: center;
            border-bottom: 1px dashed black;
        }

        .card-ttd:first-child p:last-child {
            font-size: 0.875rem;
            width: 26%;
            position: absolute;
            bottom: 14.3%;
            left: 18%;
            transform: translate(-50%);
            text-align: center;
        }

        .card-ttd:nth-child(2) p:first-child {
            font-size: 0.913rem;
            width: 26%;
            position: absolute;
            bottom: 25.7%;
            left: 49%;
            transform: translate(-50%);
            text-align: center;
        }

        .card-ttd:nth-child(2) p:nth-child(2) {
            font-size: 0.913rem;
            width: 26%;
            position: absolute;
            bottom: 23.8%;
            left: 49%;
            transform: translate(-50%);
            text-align: center;
        }

        .card-ttd:nth-child(2) .card-canvas {
            width: 26%;
            height: 70px;
            position: absolute;
            bottom: 17.7%;
            left: 49%;
            transform: translate(-50%);
            text-align: center;
            border-bottom: 1px dashed black;
        }

        .card-ttd:nth-child(2) p:last-child {
            font-size: 0.875rem;
            width: 26%;
            position: absolute;
            bottom: 14.3%;
            left: 49%;
            transform: translate(-50%);
            text-align: center;
        }

        /* .card-ttd:nth-child(2) span.other {
            font-size: 0.875rem;
            width: 26%;
            position: absolute;
            bottom: -1%;
            left: 49%;
            transform: translate(-50%);
            text-align: center;
        } */

        .card-ttd:last-child p:first-child {
            font-size: 0.913rem;
            width: 26%;
            position: absolute;
            bottom: 17.7%;
            left: 80%;
            transform: translate(-50%);
            text-align: center;
        }

        .card-ttd:last-child p:nth-child(2) {
            font-size: 0.913rem;
            width: 26%;
            position: absolute;
            bottom: 23.8%;
            left: 80%;
            transform: translate(-50%);
            text-align: center;
        }

        .card-ttd:last-child .card-canvas {
            width: 26%;
            height: 70px;
            position: absolute;
            bottom: 17.7%;
            left: 80%;
            transform: translate(-50%);
            border-bottom: 1px dashed black;
        }

        .card-ttd:last-child p:last-child {
            font-size: 0.875rem;
            width: 26%;
            position: absolute;
            bottom: 14.3%;
            left: 80%;
            transform: translate(-50%);
            text-align: center;
        }

        .description-caption {
            position: relative;
            top: 27%;
            left: 56.5%;
            width: 100%;
            transform: translate(-50%);
            font-size: 0.913rem;
        }

        .description-caption-two {
            position: relative;
            top: 56%;
            left: 56.5%;
            width: 100%;
            transform: translate(-50%);
            font-size: 0.913rem;
        }

        .description-other {
            position: relative;
            top: 70%;
            left: 50%;
            width: 92%;
            transform: translate(-50%);
        }

        .paragraph-one {
            font-size: 0.913rem;
            line-height: 150%;
            text-indent: 42px;
        }

        .paragraph-two {
            font-size: 0.913rem;
            line-height: 150%;
            text-indent: 42px;
        }

        .content-other {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h3 class="title">Pendaftaran <br>Formulir Pendaftaran Atau Pembatalan Penduduk NonPermanen<br>(F1.15)</h3>
        <div class="content-form">
            <div class="input-group one">
                <label>I.</label>
                <label>NIK</label>
                <div>:</div>
                <span>0565756868678</span>
            </div>
            <div class="input-group two">
                <label>II.</label>
                <label>Nama</label>
                <div>:</div>
                <span>Putu Aditya Prayatna</span>
            </div>
            <div class="input-group three">
                <label>III.</label>
                <label>Keterangan Sebagai Nonpermanen</label>
                <div>:</div>
                <span></span>
            </div>
            <div class="input-group four">
                <label></label>
                <label>a. Alamat</label>
                <div>:</div>
                <span>Lingkungan Desa, Kelurahan Subagan,  Kecamatan Karangasem, Kabupaten Karangasem.</span>
            </div>
            <div class="input-group five">
                <label></label>
                <label>b. RT/Rw</label>
                <div>:</div>
                <span>000/000</span>
            </div>
            <div class="input-group six">
                <label></label>
                <label>c. Kelurahan/Desa</label>
                <div>:</div>
                <span>Subagan</span>
            </div>
            <div class="input-group seven">
                <label></label>
                <label>d. Kecamatan</label>
                <div>:</div>
                <span>Subagan</span>
            </div>
            <div class="input-group eight">
                <label></label>
                <label>e. Kabupaten</label>
                <div>:</div>
                <span>Subagan</span>
            </div>
            <div class="input-group nine">
                <label></label>
                <label>f. Provinsi</label>
                <div>:</div>
                <span>Subagan</span>
            </div>
            <div class="input-group ten">
                <label>IV.</label>
                <label>Keperluan Sebagai Nonpermanen</label>
                <div>:</div>
                <span></span>
            </div>
            <div class="input-group eleven">
                <label></label>
                <label>a. Pekerjaan</label>
                <div>:</div>
                <span></span>
            </div>
            <div class="input-group twelve">
                <label></label>
                <label>b. Pendidikan</label>
                <div>:</div>
                <span></span>
            </div>
            <div class="input-group thirteen">
                <label></label>
                <label>c. Lainnya*</label>
                <div>:</div>
                <span></span>
            </div>
            <div class="input-group fourteen">
                <label>V.</label>
                <label>Jangka Waktu sebagai Nonpermanen</label>
                <div>:</div>
                <span></span>
            </div>
            <div class="input-group fifteen">
                <label>VI.</label>
                <label>Pembatalan Penduduk Nonpermanen Alasan</label>
                <div>:</div>
                <span></span>
            </div>
            <div class="input-group sixteen">
                <label></label>
                <label>a. Pekerjaan</label>
                <div>:</div>
                <span></span>
            </div>
            <div class="input-group seventeen">
                <label></label>
                <label>b. Pendidikan</label>
                <div>:</div>
                <span></span>
            </div>
            <div class="input-group eighteen">
                <label></label>
                <label>c. Lainnya*</label>
                <div>:</div>
                <span></span>
            </div>
        </div>
        <div class="content-ttd">
            <div class="card-ttd">
                {{-- <p>Find out</p> --}}
                <p>Yang menerima Hibah</p>
                <div class="card-canvas">
                    <img src="{{ public_path('assets/banner-top.png') }}" style="width: 100%; height: 100%;">
                </div>
                <p style="text-transform: uppercase;">I GUSTI AYU SARINI FEBRIYANI</p>
            </div>
            <div class="card-ttd">
                <p>Mengetahui</p>
                <p>Lurah Subagan</p>
                <div class="card-canvas">
                    <img src="{{ public_path('assets/banner-top.png') }}" style="width: 100%; height: 100%;">
                </div>
                <p><span style="text-transform: uppercase; text-decoration: underline;">IDA KETUT PUTRA SP</span> <br> <span style="text-transform: none !important; text-decoration: none !important;">NIP. 19650404 200604 1 011</span></p>
            </div>
            <div class="card-ttd">
                <p>Subagan, 03 Maret 2021</p>
                <p>Yang membuat pernyataan memberi hibah</p>
                <div class="card-canvas">
                    <img src="{{ public_path('assets/banner-top.png') }}" style="width: 100%; height: 100%;">
                </div>
                <p style="text-transform: uppercase;">NI WAYAN NASKARIYANI,drg.</p>
            </div>
        </div>
        <div class="content-other">
            <p style="margin: 0; font-size: 0.813rem;">Keterangan :</p>
            <p style="margin: 0; font-size: 0.813rem;">*Diisi sesuai dengan keperluan sebagainonpermanen</p>
            <p style="margin: 0; font-size: 0.813rem;">**Jangka Waktu Sebagai Nonpermanen 1 Tahun</p>
            <div class="wrapper-kaling" style="display: flex; align-items: center; gap: 8px;">
                <p style="margin: 0; font-size: 0.813rem;">No.Kaling <span>.................</span> : <span>.................</span></p>
            </div>
            <div class="wrapper-pemilik" style="display: flex; align-items: center; gap: 8px;">
                <p style="margin: 0; font-size: 0.813rem;">Nama Pemilik Kos: <span>..............</span></p>
            </div>
            <div class="wrapper-alamat" style="display: flex; align-items: center; gap: 8px;">
                <p style="margin: 0; font-size: 0.813rem;">Alamat: <span>............</span></p>
            </div>Z
            <div class="wrapper-handphone" style="display: flex; align-items: center; gap: 8px;">
                <p style="margin: 0; font-size: 0.813rem;">No.Hp: <span>............</span></p>
            </div>
        </div>
    </div>
</body>
</html>