<?php //$this->load->view('print/headjs.php');
?>

<body onload="window.print()">
    <div id="content" class="container_12 clearfix">
        <div id="content-main" class="grid_7">

            <link href="<?php echo base_url() ?>assets/css/surat.css" rel="stylesheet" type="text/css" />
            <div>
                <table width="100%">

                    <tr> <img src="<?= base_url() ?>assets/sumbawa.png" alt="" class="logo"></tr>

                    <div class="header">
                        <h4 class="kop">PEMERINTAH KABUPATEN SUMBAWA</h4>
                        <h4 class="kop">KECAMATAN MOYO HULU </h4>
                        <h4 class="kop">DESA BERANG REA</h4>
                        <h5 class="kop2"> Jln. Pendidikan No.27 Telp........ Fax..... Kode Pos 84372</h5>

                        <div style="text-align: center;">
                            <hr />
                        </div>
                    </div>

                </table>
                <table width="100%">
                </table>
                <table width="100%">
                </table>
                <table width="100%">
                    <div align="center"><u>
                            <h4 class="kop">SURAT KETERANGAN TIDAK MAMPU</h4>
                        </u></div>
                    <div align="center">
                        <h4 class="kop3">Nomor :</h4>
                    </div>
                </table>
                <div class="clear"></div>

                <table width="100%">

                    <tr>
                        <td class="indentasi">Yang bertanda tangan dibawah ini Kepala Desa
                            Berangrea Kecamatan Moyo Hulu Kabupaten Bima Provinsi Nusa Tenggara menerangkan dengan
                            sebenarnya kepada : </td>
                    </tr>
                </table>
                <div id="isi3">
                    <table width="100%">
                        <?php
                        foreach ($data as $penduduk) :
                        ?>
                        <tr>
                            <td width="23%">1. Nama Lengkap</td>
                            <td width="3%">:</td>
                            <td width="64%"><b><?php echo $penduduk['nama'] ?></td>
                        </tr>
                        <tr>
                            <td width="23%">2. NIK/ No KTP</td>
                            <td width="3%">:</td>
                            <td width="64%"><?php echo $penduduk['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>3. No.KK </td>
                            <td>:</td>
                            <td><?php echo $penduduk['no_kk'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                    <table width="100%">
                        <tr>
                            <td class="indentasi">Bahwa yang tersebut namanya diatas, sepanjang pengetahuan dan
                                penelitian kami hingga saat dikeluarkannya surat keterangan ini memang benar Keluarga
                                yang KURANG MAMPU dan tidak memiliki penghasilan tetap. </td>
                        </tr>
                    </table>


                    <table width="100%">
                        <tr></tr>
                        <tr>
                            <td class="indentasi">Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat
                                dipergunakan sebagaimana mestinya</td>
                        </tr>
                        <tr></tr>
                    </table>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    </table>
                </div>
                <table width="100%">
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td></td>
                        <td width="55%"></td>
                        <td align="center">Berang Rea, <?php echo date('Y') ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td width="55%"></td>
                        <td align="center">Kepala Desa</td>
                    </tr>
                </table>
            </div>
            <table width="100%">
                <table width="100%">
                    <table width="100%">
                        <table width="100%">
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr>
                                <td></td>
                                <td width="55%"></td>
                                <td align="center">IWAN DARSONO</td>
                            </tr>
                        </table>
        </div>
    </div>
    <div id="aside">
    </div>
    </div>
</body>

</html>