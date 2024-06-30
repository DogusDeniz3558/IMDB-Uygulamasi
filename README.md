# IMDB Uygulaması

Bu proje, OMDB API'sini kullanarak film bilgilerini aramak ve görüntülemek için temel bir IMDB uygulaması geliştirmek için bir şablondur. Bu uygulama, kullanıcıların film başlıklarını arayabileceği ve film detaylarını görüntüleyebileceği bir arayüz sunmaktadır.

## Başlarken

Bu adımlar, projeyi yerel bir makinede çalıştırmanızı sağlayacaktır.

## Gereksinimler

Bu projenin çalışması için aşağıdaki yazılımların sisteminizde yüklü olması gerekmektedir:
- Bir metin düzenleyici (Notepad++, Sublime Text, VS Code, vb.)
- Bir web tarayıcısı (Google Chrome, Mozilla Firefox, vb.)
- Bir web sunucusu (XAMPP, WAMP, vb.)
- OMDB API Key (https://www.omdbapi.com/)

## Kurulum

1. Bu projeyi yerel bir klasöre klonlayın ya da zip olarak indirin:
    ```bash
    git clone https://github.com/DogusDeniz3558/IMDB-Uygulamasi.git
    ```

2. Web sunucusu yazılımınızı kullanarak, projeyi sunucunuzun kök dizinine yerleştirin.

3. OMDB API Key'inizi `api.php` dosyasına ekleyin:
    ```php
     $apiUrl = "http://www.omdbapi.com/?t=".$t."&y=".$y."&plot=full&apikey=YOUR_API_KEY";
    ```

4. Web tarayıcınızda aşağıdaki URL'yi açın:
    ```url
    localhost/IMDB-Uygulamasi/
    ```

5. Artık IMDB uygulamasını kullanmaya başlayabilirsiniz.

## Kullanım

IMDB Uygulaması, kullanıcıların film başlıklarını girerek film bilgilerini arayabileceği ve görüntüleyebileceği basit bir arayüz sunar. Kullanıcılar film başlığını girdikten sonra "Ara" düğmesine tıklayarak ilgili filmin bilgilerini görüntüleyebilirler.

## Katkıda Bulunma

Bu projeye katkıda bulunmak isterseniz, aşağıdaki adımları takip edebilirsiniz:
1. Bu projeyi fork edin.
2. Kendi yerel makinenizde fork edilen projeyi klonlayın.
3. Değişikliklerinizi yapın ve commit'leyin.
4. Yeni bir branch oluşturun:
    ```bash
    git branch yeni-ozellik
    ```
5. Branch'inize geçin:
    ```bash
    git checkout yeni-ozellik
    ```
6. Değişikliklerinizi push edin:
    ```bash
    git push origin yeni-ozellik
    ```
7. Pull isteği (Pull Request) gönderin.

## Lisans

Bu proje MIT Lisansı altında lisanslanmıştır. Daha fazla bilgi için LICENSE dosyasını inceleyebilirsiniz.

Teşekkürler
