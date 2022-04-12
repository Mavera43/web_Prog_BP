<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tavşanlı myo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container ">
        <form method=post action="formislemleri.php" >
            <div class="mb-3">
              <label for="sayi1" class="form-label">sayı 1</label>
              <input type="number" class="form-control" id="sayi1" name="sayi1">
            </div>
            <div class="mb-3">
              <label for="sayi2" class="form-label">sayı 2</label>
              <input type="number" class="form-control" id="sayi2" name="sayi2">
            </div>
            <div class="mb-3">
              <select class="form-select" name="secenek" >
                <option selected>Matematik işlemciyi seçiniz</option>
                <option value="1">Toplama</option>
                <option value="2">Çarpma</option>
                <option value="3">Çıkartma</option>
                <option value="4">Bölme</option>
              </select>
            </div>
            <button type="submit" name="hesapla" class="btn btn-outline-primary">Hesapla</button>
</form>
    </div>
</body>
</html>