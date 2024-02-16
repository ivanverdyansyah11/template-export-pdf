<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .wrapper{
            /*margin: 2cm;*/
        }
        .title-surat{
            font-size: 18px;
            text-decoration: underline;
        }
        .title-surat-wrapper{
            width: 100%;
            text-align: center;
            font-weight: bold;
            margin-top: 30px;
            border-bottom: 3px double black;
            padding-bottom: 3px;
        }
        .content-surat{
            margin-top: 15px;
            font-size: 14px;
        }
        table{
            font-size: 14px;
        }
        .paragraph{
            text-indent: 20px;
        }
        .table-mt{
            margin-top: 20px;
        }
        .last-paragraph{
            margin-top: -10px;
        }
        .ttd-text{
            width: 100%;
            text-align: center;
        }
        .w-full{
            width: 100%;
        }
        .title-list{
            width: 150px;
        }
        .table-title tr td{
            font-weight: normal;
        }
        .table-title tr td:nth-child(2){
            text-align: right;
        }
        .table-title tr td:last-child{
            text-transform: uppercase;
        }
        .flex{
            display: flex;
        }
    </style>
</head>
<body>
<div class="wrapper">

    <div class="title-surat-wrapper">
        <h1 class="title-surat">“SILSILAH WARIS”</h1>
        <table class="table-mt w-full table-title">
            <tr>
                <td class="title-list">Nama</td>
                <td>:</td>
                <td>Putu Yasa</td>
            </tr>
            <tr>
                <td class="title-list">Dusun / Lingkungan/Br </td>
                <td>:</td>
                <td>DESA</td>
            </tr>
            <tr>
                <td class="title-list">Desa / Kelurahan </td>
                <td>:</td>
                <td>Subangan</td>
            </tr>
            <tr>
                <td class="title-list">Kecamatan</td>
                <td>:</td>
                <td>karangasem</td>
            </tr>
            <tr>
                <td class="title-list">Kabupaten</td>
                <td>:</td>
                <td>Karangasem</td>
            </tr>
            <tr>
                <td class="title-list">Provinsi</td>
                <td>:</td>
                <td>Bali</td>
            </tr>
        </table>
    </div>
    <div class="content-surat">
        <img class="w-full" height="auto" src="{{public_path('assets/silsilah.png')}}" alt="">
        <div class="" style="margin-top: 10px;">
            <img src="{{public_path('assets/keterangan.png')}}" style="width: 330px" height="auto" alt="">
        </div>
        <p class="paragraph">
            Demikianlah Silsilah Keturunan / waris ini saya buat dengan sebenarnya, saya menjamin tidak ada keturunan/ahli waris lain selain yang saya sebutkan diatas dan saya bersedia menanggung akibat hukum apabila dikemudian hari terjadi silsilah yang saya buat salah/tidak benar serta tanpa melibatkan para pejabat yang melegalisir/mengetahui dibawah ini, dipergunakan sebagaimana mestinya.
        </p>
    </div>

    <div class="" style="margin-top: 30px;">
        <table class="w-full">
            <tr>
                <td class="w-full" style="text-align: center"></td>
                <td class="w-full" style="text-align: center">Subagan,  26 Desember 2019</td>
            </tr>
        </table>
        <table class="w-full">
            <tr class="w-full">
                <td class="ttd-text">
                    Mengetahui <br>
                    Kepala Lingkungan Desa
                </td>
                <td class="ttd-text">Saya yang membuat Silsilah Keluarga</td>
            </tr>
            <tr style="text-align: center">
                <td style="height: 60px;">
                    <img width="100px" height="auto" src="{{public_path('assets/ttd.png')}}" alt="">
                </td>
                <td style="height: 60px;">
                    <img width="100px" height="auto" src="{{public_path('assets/ttd.png')}}" alt="">
                </td>
            </tr>
            <tr class="w-full">
                <td class="ttd-text" style="text-transform: uppercase">
                    <strong style="font-size: 14px;">
                        I GEDE SUASTA ARDIKA
                    </strong>
                </td>
                <td class="ttd-text" style="text-transform: uppercase">
                    <strong style="font-size: 14px">
                        DODDY CAHYO INDRYAWAN SH
                    </strong>
                </td>
            </tr>
        </table>
        <table class="w-full table-mt">
            <tr class="w-full">
                <td class="ttd-text">
                    Mengetahui <br>
                    Lurah Subagan
                </td>
                <td class="ttd-text">
                    Mengetahui <br>
                    Camat Karangasem
                </td>
            </tr>
            <tr style="text-align: center">
                <td style="height: 60px;">
                    <img width="100" height="auto" src="{{public_path('assets/ttd.png')}}" alt="">
                </td>
                <td style="height: 60px;">
                    <img width="100" height="auto" src="{{public_path('assets/ttd.png')}}" alt="">
                </td>
            </tr>

        </table>
    </div>
</div>
</body>
</html>
