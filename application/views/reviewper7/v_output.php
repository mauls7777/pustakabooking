<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>

<style>
    fieldset {
        width: 20%;
        margin: 20px auto;
        border-radius: 6px;
    }

    select {
        width: 100%;

    }
</style> 


<body>
    <fieldset>
        <legend>Form Output Transaksi</legend>
          <table>
              <tr>
                  <th>Nama Pembeli</th>
                  <td>:</td>
                  <td>
                     <?= $nama; ?>
                  </td>
              </tr>

              <tr>
                  <th>Nomor HP</th>
                  <td>:</td>
                  <td>
                     <?= $NomorHP; ?>
                  </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $Merk; ?>
                    </td>
                </tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $ukuran; ?>
                    </td>
                </tr>
                </tr>
                    <th>Total Harga</th>
                    <td>:</td>
                    <td>
                        <?= $harga; ?>
                    </td>
                </tr>

                <tr> 
                    <td colspan="4" align="center"> 
                        <hr>
                        <a href="<?= base_url('Pertemuan7'); ?>">Kembali</a>
                    </td>
                </tr>    
          </table>
    </fieldset>
</body>
</html>