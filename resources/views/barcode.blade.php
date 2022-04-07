<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Generar Barcode en Laravel - Edinsoncs.com</title>
</head>
<body>
<div class="container text-center" style="margin-top: 50px;">
    <h3 class="mb-5">Barcode Laravel</h3>
    <div>{!! DNS1D::getBarcodeHTML('4445645656', 'C39') !!}</div></br>
    <div>{!! DNS1D::getBarcodeHTML('4445645656', 'POSTNET') !!}</div></br>
    <div>{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA') !!}</div></br>
    <div>{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</div></br>
</div>
</body>
</html>