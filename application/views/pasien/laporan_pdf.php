<?php  ?><head>
  <title></title>
</head><body>


      <h3 style="text-align: center;">Laporan PASIEN</h3>
<br><br><br>

      <table border="1" >
  
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Pasien</th>
    <th scope="col">Jenis Kelamin</th>
    <th scope="col">Tempat Lahir</th>
    <th scope="col">No Hp</th>
    <th scope="col">Nama Ibu Kandung</th>
    </tr>
  
    <?php $i = 1; ?>
    <?php foreach($pasien as $row) : ?>
    <tr>
    <th scope="row"><?= $i; ?></th>
    <td width="200px"><?= $row["nama"] ?></td>
    <td width="200px"><?= $row["jenis_kelamin"] ?></td>
    <td width="200px"><?= $row["tempat_lahir"] ?></td>
    <td width="200px"><?= $row["nohp"] ?></td>
    <td width="200px"><?= $row["nama_ibu"] ?></td>
    </tr>
    <?php $i++; ?>

    <?php endforeach; ?>
</table>
</body>