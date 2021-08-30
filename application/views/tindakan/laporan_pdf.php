<?php  ?><head>
  <title></title>
</head><body>


      <h3 style="text-align: center;">Laporan TINDAKAN</h3>
<br><br><br>

      <table border="1" >
  
    <tr>
      <th>No</th>
      <th>Tindakan Dokter</th>
      <th>Fee Dokter</th>
      <th>Fee karyawan</th>
      <th>Harga</th>
      <th>Deskripsi</th>
    </tr>
  
    <?php $i = 1; ?>
    <?php foreach($tindakan as $row) : ?>
    <tr>
    <th scope="row"><?= $i; ?></th>
    <td width="200px"><?= $row["tindakan"] ?></td>
    <td width="200px"><?= $row["fee_dokter"] ?></td>
    <td width="200px"><?= $row["fee_karyawan"] ?></td>
    <td width="200px"><?= $row["harga"] ?></td>
    <td width="200px"><?= $row["deskripsi"] ?></td>
    </tr>
    <?php $i++; ?>

    <?php endforeach; ?>
</table>
</body>