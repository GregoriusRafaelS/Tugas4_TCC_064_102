<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container pt-5 mt-5">
        <div class="row align-items-center">
            <div class="col">
              
            </div>
            <div class="col">
                <h1 class="text-center fw-bold">Tambah Catatan</h1>
                <form action="addProcess.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name">
                      </div>

                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Value</label>
                        <input type="number" class="form-control" id="exampleInputName1" name="value">
                      </div>

                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Type</label>
                        <select class="form-select" aria-label="Default select example" name="type">
                            <option selected value="in">masuk</option>
                            <option value="out">keluar</option>
                          </select>                     
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col">
              
            </div>
          </div>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>