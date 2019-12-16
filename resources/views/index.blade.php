<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homestay</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/stylehm.css') }}">
</head>
<body>
    <div class="main">
        <div class="header" id="header">
            <div class="nav">
                <img src="images/logo.png">
                <div class="nav-bar">
                    <a href="#header" class="nav-bar-li">Beranda</a>
                    <a href="#plus" class="nav-bar-link">Tentang Kami</a>
                    <a href="#card" class="nav-bar-link">Testimoni</a>
                    <a href="{{url('login')}}" class="nav-bar-link">Log in</a>
                </div>
            </div>
        </div>
        
        <div class="content">
                <p>Penyedia Homestay <b>Paling</b><br /><b>Tepercaya</b> di Yogyakarta.</p>
                <h6>Memberikan pengalaman yang menyenangkan serta<br /> berkesan bagi Anda.</h6>
            </div>      
        

        <div class="panjang">
            <form action="/search" method="GET" class="" name="cari">
                {{ csrf_field() }}
                        <div class="kata">
                            <p class="kata-li">DIMANA MENGINAP</p>
                            <p class="kata-li">JUMLAH PENGINAP</p>
                        </div>
                        <label for="inp" class="inp">
                                      <input type="text" id="inp" name="nama" placeholder="Yogyakarta, Indonesia">
                                      <span class="label"></span>
                                      <span class="border"></span>
                        </label>
                        <div class="select">
                          <select name="slct" id="slct">
                            <option selected disabled>Tentukan Jumlah</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>                            
                            <option value="4">4</option>
                          </select>
                        </div>
            <div class="cari" onClick="document.forms['cari'].submit();">
                    <p>Search</p>
            </div>
              </form>
        </div>
        
        <div class="plus" id="plus">
            <div class="satu-img">
                <img src="images/plus1.png">
            </div>
            <div class="satu-desc">
                <h6>Pilihan Beragam</h6>
                <p>Banyak pilihan homestay sesuai keinginan anda</p>
            </div>
            <div class="satu-img">
                <img src="images/plus2.png">
            </div>
            <div class="satu-desc">
                <h6>Mudah dan Aman</h6>
                <p>Jaminan keamanan Homestay yang sudah terkurasi</p>
            </div>
        </div>

        <div class="desc">
            <div class="dua-desc">
                <h1>Kepercayaan masyarakat 
                    terhadap Homestay
                    yang “Aman”.</h1>
                <p>Penginapan berkembang dengan pesat di Indonesia dan 
                    yang populer belakangan ini ialah Homestay.
                    Tetapi 
                    kami melihat masih rendahnya kepercayaan masyarakat
                    akan keamanan Homestay saat ini.</p>
            </div>
            <div class="dua-img">
                <img src="images/desc.png">
            </div>
        </div>

        <div class="card" id="card">
            <h1>Apa kata orang
                tentang SIDAS.</h1>
            <div class="card-isi">
                <img src="images/isi1.png">
                <img src="images/isi2.png">
            </div>              
        </div>


        <div class="penutup">
                <img src="images/bintik.png">
                <h1>Homestay di Indonesia</h1>
                <h6>Berawal dari perkembangan pariwisata Indonesia yang pesat, industri 
                Homestay lokal dengan kualitas dan keunikan sangat layak untuk 
                menjadi pilihan menginap masyarakat Indonesia.</h6>
            </div>              
        </div>

        <div class="footer">
                <h6>Copyright @2019 | Sloppy Team</h6>
        </div>

    </div>
</body>
</html>