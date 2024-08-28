<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UK Mustarika Jaya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="px-3 py-2 ">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/home" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img src="{{ asset('image/LogoKUB.png')}}" alt="">
                <h3 class="fw-bold">KANG DJOE</h3>
              </a>
      
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#home" class="nav-link">
                    <svg class="bi d-block mx-auto mb-1" width="15" height="15"><use xlink:href="#home"/></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="#about" class="nav-link">
                    <svg class="bi d-block mx-auto mb-1" width="15" height="15"><use xlink:href="#speedometer2"/></svg>
                    Tentang
                  </a>
                </li>
                <li>
                  <a href="#produk" class="nav-link">
                    <svg class="bi d-block mx-auto mb-1" width="15" height="15"><use xlink:href="#produk"/></svg>
                    Produk
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link">
                    <svg class="bi d-block mx-auto mb-1" width="15" height="15"><use xlink:href="#grid"/></svg>
                    Pemesanan
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        {{-- <div class="px-3 py-2 border-bottom mb-3 bg-white">
          <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
      
            <div class="text-end">
              <button type="button" class="btn btn-light ">Login</button>
              <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
          </div>
        </div> --}}
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
            
            <section class="bagian-pembuat-keju">
              <p>Di Baros, para pembuat keju kami adalah nyawa dari warisan pembuatan keju kami. Dengan pengalaman selama lebih dari dua dekade di tengah-tengah komunitas kami, mereka memberikan keahlian dan semangat yang tak tertandingi dalam pekerjaan mereka. Yang membedakan para pembuat keju kami adalah komitmen mereka yang teguh untuk mengadaptasi hasil karya yang sesuai dengan selera konsumen Indonesia. Mereka bangga memadukan tradisi dengan inovasi untuk menciptakan keju yang sesuai dengan cita rasa khas komunitas kami.</p>
              
              <div class="konten">
                <div class="gambar fade-in">
                  <img src="{{ asset('image/tentang3.jpg')}}" alt="Pembuat Keju" />
                </div>
                <div class="teks fade-in">
                  <p>Cheesemaker kami lahir dari kecintaan sang founder terhadap keju yang diwujudkan dengan membawa ahli keju dari Belanda untuk petukaran ilmu ke warga lokal dan Pak Herman adalah salah satu diantaranya yang berhasil. Dari proses itulah awal terciptanya keju ikonik khas Baros. Selama lebih dari 25 tahun, pak Herman tidak hanya konsisten menjaga kualitas tapi dia berkomitmen mewariskan citarasa resep sehingga keju Baros memiliki kualitas dan cita rasa khas yang terjaga selama puluhan tahun.</p>
                </div>
              </div>
            </section>
        </section>

        <section id="produk">
          <button class="carousel-button prev" id="prevBtn">&#8592;</button>
            <div style="white-space: pre-wrap;">
                    <h5>Lihat produk apa saja 
            yang telah kami buat</h3>
            </div>
          <div class="carousel-wrapper">
              <div class="carousel-items">
                  <div class="carousel-item fade-in"><img src="{{ asset('image/produk1.jpeg')}}" alt="Kraft"></div>
                  <div class="carousel-item fade-in"><img src="{{ asset('image/produk2.jpeg')}}" alt="Plasmon"></div>
                  <div class="carousel-item fade-in"><img src="{{ asset('image/produk3.jpeg')}}" alt="Watties"></div>
                  <div class="carousel-item fade-in"><img src="{{ asset('image/produk4.jpeg')}}" alt="Master"></div>
                  <div class="carousel-item fade-in"><img src="{{ asset('image/produk5.jpeg')}}" alt="Ore-Ida"></div>
                  <div class="carousel-item fade-in"><img src="{{ asset('image/produk6.jpeg')}}" alt="Kraft mac & cheese"></div>
              </div>
            </div>
            <button class="carousel-button next" id="nextBtn">&#8594;</button>
        </section>

        <section id="pemesanan">
          <div class="kontak-container">
            <h3>KONTAK KAMI</h3>
            <p>Punya pertanyaan, permintaan, atau hanya ingin menunjukkan dukungan Anda kepada produk Baros?
              Kami dengan senang mendengarnya dari Anda! Hubungi tim kami bila ada pertanyaan, seputar peluang kemitraan atau bila anda ingin membuat pesanan
            </p>
            <div class="contact-info">
                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                  <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765zM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516M0 13.373l5.693-3.163L0 6.873z"/>
                </svg> needforcheese@bukitbaroscempaka.co.id </p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                </svg> +62 81 2189 97190 </p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                </svg> +62 21 858 0515</p>
            </div>
            <h4 class="cta">Ayo hubungi kami untuk informasi lebih lanjut!</h4>
            <div class="addres-section">
                <div class="kantor-pusat">
                    <h5>Kantor Pusat</h5>
                    <p>Gedung Titan <br>
                      Lt. 4 Jl. Slamet Riyadi No.7, Kb. Manggis, Kec. Matraman, Jakarta Timur, DKI Jakarta 13150
                    </p>
                </div>
                <div class="pabrik">
                    <h5>Pabrik</h5>
                    <p>Bukit Baros Cempaka <br>
                      Kp Chius, RT. 001 RW.004 Sasagaran, Kebonpedes, Sukabumi, Jawa Barat 43194
                    </p>
                </div>
            </div>
          </div>
        </section>
      

      <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>