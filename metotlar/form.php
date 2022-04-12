<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
     <div class="container">
        <form method=post action=islemler.php>
            <div class="mb-3">
              <label for="sayı1" class="form-label">Sayı 1</label>
              <input type="number" class="form-control" name="sayı1" >
            </div>
            <div class="mb-3">
              <label for="sayı2" class="form-label">Sayı 2</label>
              <input type="number" class="form-control" name="sayı2" >
            </div>
            <div class="mb-3">
              <select class="form-select" name="secenek">
                <option selected>İşlem Seçiniz</option>
                <option value="1">Toplama</option>
                <option value="2">Çıkartma</option>
                <option value="3">Bölme</option>
                <option value="4">Çarpma</option>
              </select>
            </div>

            <button type="submit" class="btn btn-outline-primary">Hesapla</button>

        </form>
     </div>
</body>
</html>