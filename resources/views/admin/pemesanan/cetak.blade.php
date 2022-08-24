<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="{{ asset('public/css/print.css') }}" media="print">
    <link rel="stylesheet" href="{{ asset('public/css/print.css') }}" media="screen">
    <link href="{{ asset('public/admin/vendor/fontawesome-free/css/all.min.css') }}" media="print" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('public/admin/vendor/fontawesome-free/css/all.min.css') }}" media="screen" rel="stylesheet"
        type="text/css">
</head>

<body>
    <div class="cetak">
        <h1 style="text-align: center;">BUKTI PEMESANAN
            <br>KODE TRANSAKSI: <?php echo $pemesanan->kode_transaksi; ?>
        </h1>

        <table class="printer">
            <thead>
                <tr class="bg-info">

                    <th>PENYEDIA</th>
                    <th width="50%">DETAIL CUSTOMER (KEPADA)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <strong><?php echo strtoupper($site->namaweb); ?></strong>
                        <br><?php echo nl2br($site->alamat); ?>
                        <br>Email: <?php echo $site->email; ?>
                        <br>Telepon: <?php echo $site->telepon; ?>
                        <br>HP: <?php echo $site->hp; ?>
                        <br>Website: <?php echo $site->website; ?>
                    </td>
                    <td>
                        <strong><?php echo strtoupper($pemesanan->nama_pemesan); ?></strong>
                        <br><strong>Alamat: </strong>
                        <br>HP/WA: <?php echo $pemesanan->telepon_pemesan; ?>
                        <br>Email: <?php echo $pemesanan->email_pemesan; ?>
                    </td>

                </tr>
            </tbody>
        </table>
        <h4>DATA PESANAN</h4>
        <table class="printer">
            <thead>
                <tr class="text-center">
                    <th width="5%">NO</th>
                    <th width="20%">NO ORDER</th>
                    <th width="20%">NAMA PRODUK</th>
                    <th width="10%">HARGA</th>
                    <th width="10%">JUMLAH</th>
                    <th width="10%">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td><strong><?php echo $pemesanan->kode_transaksi; ?></strong>
                        <br>Tgl Order:<strong><?php echo date('d-m-Y', strtotime($pemesanan->tanggal_order)); ?></strong>
                    </td>
                    <td>
                        <?php if($pemesanan->nama_produk=="") { echo '<div class="alert alert-warning text-center"><i class="fa fa-times"></i><br>Produk tidak tersedia</div>'; }else{ ?>
                        <?php echo $pemesanan->nama_produk; ?>
                        <small>
                            <br><i class="fas fa-tags"></i> Kat: <?php echo $pemesanan->nama_kategori_produk; ?>
                            <br><i class="fas fa-tag"></i> Harga: Rp <?php echo number_format($pemesanan->harga_jual); ?>
                            <!-- <br><i class="fas fa-image"></i> Gambar:
            <br><img src="{{ asset('public/upload/image/thumbs/' . $pemesanan->gambar) }}" class="img img-responsive img-thumbnail"> -->
                        </small>
                        <?php } ?>
                    </td>
                    <td class="text-center">Rp <?php echo number_format($pemesanan->harga_produk); ?></td>
                    <td class="text-center"><?php echo $pemesanan->jumlah_produk; ?></td>
                    <td class="text-center">Rp <?php echo number_format($pemesanan->total_harga); ?></td>
                </tr>
            </tbody>
        </table>

        <hr>
        <small>Tanggal cetak: <?php echo date('d-M-Y H:i:s'); ?> - <?php echo $site->namaweb; ?> | <?php echo $site->website; ?></small>

    </div>
</body>

</html>
