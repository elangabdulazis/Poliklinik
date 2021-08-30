<?php  ?><head>
  <title></title>
</head><body>


      <h3 style="text-align: center;">Laporan OBAT</h3>
<br><br><br>

      <table border="1" >
  
    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Obat</th>
                      <th scope="col">Stock</th>
                      <th scope="col">Harga Modal</th>
                      <th scope="col">Harga Jual</th>
                      <th scope="col">Order Date</th>
                      <th scope="col">EXP Date</th>
    </tr>
  
    <?php $i = 1; ?>
    <?php foreach($obat as $row) : ?>
    <tr>
    <th scope="row"><?= $i; ?></th>
    <td width="150px"><?= $row["nama_obat"] ?></td>
    <td width="150px"><?= $row["total_obat"] ?></td>
    <td width="150px"><?= $row["harga_modal"] ?></td>
    <td width="150px"><?= $row["harga_jual"] ?></td>
    <td width="150px"><?= $row["tgl_masuk"] ?></td>
    <td width="150px"><?= $row["expired"] ?></td>
    </tr>
    <?php $i++; ?>

    <?php endforeach; ?>
</table>
</body>