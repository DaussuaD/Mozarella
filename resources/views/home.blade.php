<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UK Mustarika Jaya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <header>
        <div class="px-3 py-2 ">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/home" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <h3 class="fw-bold">Mustarika Jaya</h3>
              </a>
      
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#home" class="nav-link text-secondary">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="#about" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    About
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                    Orders
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                    Products
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3 bg-white">
          <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
      
            <div class="text-end">
              <button type="button" class="btn btn-light ">Login</button>
              <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
          </div>
        </div>
      </header>

      <section id="home" style="background: url('{{ asset('image/8116.jpg') }}') no-repeat center center; background-size: cover;">
        <div class="container split-screen">
          <div class="left">
              <div class="content fade-in">
                  <img src="{{ asset('image/contoh3.jpg') }}" alt="Descriptive text for left side image" class="left-img">
              </div>
          </div>
          <div class="right">
              <div class="content fade-in">
                  <h1>DAPATKAN MOZARELLA BERKUALITAS!</h1>
                  <a href="#about"><button class="btn btn-light">Baca lebih lanjut</button></a>
              </div>
          </div>
      </div>
      </section>

      <section id="about">
        <div class="main-container split-layout">
            <div class="left-panel">
              <div class="left-content fade-in">
                  <h1>KISAH KAMI</h1>
                  <h4>Latar Belakang Baros dan Keju Gouda</h4>
                  <h5>Kisah pembuatan keju kami dimulai dari tahun 1998. Ketika Bukit Baros Cempaka (BBC) Beroperasi sebagai pabrik keju di Sukabumi, 
                    yang didirikan oleh pak Rachmantio dan bu Leila. Usaha ini dimulai pada masa-masa sulit yang ditandai dengan krisis moneter di Indonesia, yang mengakibatkan anjloknya
                    harga susu. Menghadapi kesulitan ini, pak Rachmantio menyalurkan perhatiannya pada kesejahteraan para peternak sapi perah di daerah Sukabumi </h5>
                    <img src="{{ asset('image/tentang.jpeg') }}" alt="Descriptive text for left side image" class="left-image">
                </div>
              </div>
              <div class="right-panel">
                <div class="right-content fade-in">
                  <img src="{{ asset('image/tentang2.jpeg') }}" alt="" class="right-image">
                      <h5>Terlebih lagi, pada masa itu, keju belum begitu populer dikalngan masayrakat Indonesia. Namun, pak Rachmantio menyadari potensi besar dalam kualitas produk susu lokal dan sangat yakinakan daya 
                        saingnya. Keyakinan ini mulai mendorongnya untuk memulaai produksi keju Gouda, jenis keju yang terkenal dengan cita rasanya yang khas
                      </h5>               
                </div>
              </div>
            </div>         
          </section>





      <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>