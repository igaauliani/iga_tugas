<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Matakuliah</title>
</head>
<body>
    <center>
    <table>
        <tr>
            <th colspan="3">
                Tampilan Data Mata Kuliah
            </th>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
        <th>Kode MTK</th>
            <td>:</td>
            <td>
                <?= $kode; ?>
            </td> 
        </tr>
        <tr>
        <th>Nama MTK</th>
            <td>:</td>
            <td>
                <?= $nama; ?>
            </td>
        </tr>
        <tr>
        <th>SKS</th>
            <td>:</td>
            <td>
                <?= $sks; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <a href="<?=base_url('matakuliah');?>"
                >kembali</a>
            </td>
        </tr>
        </center>
    </table>
</body>
</html>