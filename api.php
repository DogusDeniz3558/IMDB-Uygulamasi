<?php 

if(empty($_POST['filmName'])){
    echo "<div class='alert alert-danger mt-5' role='alert'>Lütfen Bir Film Adı Giriniz!</div>";
    exit();
}

if(htmlspecialchars(trim($_POST['filmName']),ENT_QUOTES, 'UTF-8')){
    $t = htmlspecialchars(trim($_POST['filmName']),ENT_QUOTES,'UTF-8');
    $y = htmlspecialchars(trim($_POST['filmYear']),ENT_QUOTES,'UTF-8');

    if(isset($y) && !empty($y)){
        $apiUrl = "http://www.omdbapi.com/?t=".$t."&y=".$y."&plot=full&apikey=your_api";
    } else {
        $apiUrl = "http://www.omdbapi.com/?t=".$t."&plot=full&apikey=your_api";
    }
     
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    $responseF = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($responseF, true);

    if(@$data['Response'] == "False") {
        echo "<div class='alert alert-danger mt-5' role='alert'>Film Bulunamadı! Hata: ".$data['Error']."</div>";
    }else if(@!$data){
        echo "<div class='alert alert-danger mt-5' role='alert'>Film Bulunamadı! </div>";
    } else {
        echo "<div id='card' class='card mb-3 mt-5' style='max-width: 540px; position: relative;'>
                <div class='row g-0'>
                    <div class='col-md-4 d-flex justify-content-center align-items-center' style='border-right:1px solid #ddd;'>
                        <img src='".$data['Poster']."' height='100%' width='100%' class='rounded-start' alt=''>
                    </div>
                    <div class='col-md-8'>
                        <div class='card-body'>
                            <h5 class='card-title'>Film Adı: ". $data['Title'] . "</h5>
                            <p class='card-text'>Tür: " . $data['Genre'] . " | Çıkış Yılı: " . $data['Released'] . "</p>
                            <p class='card-text'>Yönetmen: " . $data['Director'] . " | Yazar: ".$data['Writer']."</p>
                            <p class='card-text'>Oyuncular: " . $data['Actors']. "...</p>
                            <p class='card-text'>Ödüller: " . $data['Awards']. "</p>
                            <p class='card-text'>IMDB Puanı: ⭐" . $data['imdbRating'] . "/10</p>
                        </div>
                    </div>
                </div>
                <button id='close' type='button' class='btn-close position-absolute top-0 end-0 m-3' aria-label='Close' style='color: red;'></button>
            </div>";
    }
}


echo "<script> 
        $(document).ready(function(){
            $('#close').on('click',function(){
                $('#card').hide();
            });
        });
      </script>";

?>
