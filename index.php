<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMDB Uygulaması</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- Jquery -->
     <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>    
</head>
  <body>

  <nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand link-light" href="#">IMDB Bilgi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>


     <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-5">
        
       <div class="row">
       <div class="col-md-6">
            <label for="validationDefault01" class="form-label">Film Adı:</label>
            <input type="text" class="form-control" placeholder="Film Adı ( İngilizce İsmini Yazınız.. )" id="film" required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault02" class="form-label">Yıl:</label>
            <input type="text" class="form-control" id="yil" placeholder="Yıl ( Opsiyonel )" required>
        </div>
       </div>

        <br>
        <div class="d-grid">
            <button class="btn btn-success" type="submit" id="ara">Arama Yap</button>
            </div>

            <div id="result"></div>
        </div>

        


        </div>
        <div class="col-md-2"></div>
     </div>
  
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
   
    $('#ara').on('click',function(){
        let filmName = $('#film').val();
        let filmYear = $('#yil').val();
        $.ajax({
            url:"api.php",
            type:"post",
            data:{
              "filmName": filmName,
              "filmYear":filmYear  
            },
            success:function(e){
                $('#result').html(e);
            }
        });
    });
  </script>
</body>
</html>