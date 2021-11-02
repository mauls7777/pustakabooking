<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>

<style>
    fieldset {
        width: 20%;
        margin: 20px auto;
        border-radius: 10px;
    }

    select {
        width: 100%;

    }
</style> 


<body>
    <fieldset>
        <legend>Form Input Transaksi</legend>
        <form method="post">
          <table>
              <tr>
                  <th>Nama Pembeli</th>
                  <td>:</td>
                  <td>
                     <input type="text" name="nama" id="nama">
                     <?= form_error ('nama', '<br><span style="color:red;">', '</span>'); ?>
                  </td>
              </tr>

              <tr>
                  <th>Nomor HP</th>
                  <td>:</td>
                  <td>
                      <input type="text" name="NomorHP" id="NomorHP">
                      <?= form_error ('NomorHP', '<br><span style="color:red;">', '</span>'); ?>
                  </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="Merk" id="Merk">
                            <option> PILIH </option>
                            <?php foreach($Merk as $M) : ?>
                                <option value="<?= $M; ?>"><?= $M; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option> PILIH </option>
                            <?php for ($i = 32; $i <= 42; $i++) : ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                </tr>

                <tr> 
                    <td colspan="4" align="center"> 
                        <hr>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>    
          </table>
        </form>
    </fieldset>
</body>
</html>