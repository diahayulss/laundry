<!-- Import Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Poppins', sans-serif;
  }

  footer {
    background: linear-gradient(135deg, #d8b4fe, #e9d5ff, #c4b5fd); /* lilac gradient */
    color: white;
  }

  footer h5 {
    font-weight: 600;
    letter-spacing: 1px;
  }

  footer .btn-floating {
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.2);
    border: none;
    transition: all 0.3s ease-in-out;
  }

  footer .btn-floating:hover {
    background-color: white;
    color: #6d28d9; /* ungu tua */
  }

  footer a {
    color: white;
    text-decoration: none;
  }

  footer a:hover {
    color: #f3e8ff; /* pastel hover */
  }

  .footer-copyright {
    background-color: rgba(0, 0, 0, 0.15);
  }
</style>

<!-- Footer -->
<footer class="text-white text-center text-lg-start">
  <div class="container p-4">
    <div class="row mt-4">
      
      <!-- About company -->
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4"> About company </h5>
        <p>
          Diahlaundry berlokasi di Semarang, Jawa Tengah, laundry kami hadir untuk memberikan layanan terbaik setiap hari. Kami siap 
          membantu menjaga pakaian Anda tetap bersih, harum, dan nyaman dipakai. Kami percaya, kepercayaan pelanggan adalah prioritas utama, 
          dan itu terjaga lewat kualitas dan ketepatan waktu pelayanan kami.
        </p>
        <p>
          "Kesempurnaan Dimulai dari Pakaian yang Terawat"
        </p>
        <div class="mt-4">
          <a class="btn btn-floating btn-lg text-white"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-floating btn-lg text-white"><i class="fab fa-dribbble"></i></a>
          <a class="btn btn-floating btn-lg text-white"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-floating btn-lg text-white"><i class="fab fa-google-plus-g"></i></a>
        </div>
      </div>

      <!-- Search -->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4 pb-1">Search something</h5>
        <div class="form-outline form-white mb-4">
          <input type="text" id="formControlLg" class="form-control form-control-lg" />
          <label class="form-label" for="formControlLg">Search</label>
        </div>
        <ul class="fa-ul" style="margin-left: 1.65em;">
          <li class="mb-3">
            <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2"> Semarang, Jawa Tengah </span>
          </li>
          <li class="mb-3">
            <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2"> diahlaundry@gmail.com </span>
          </li>
          <li class="mb-3">
            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2"> + 62 12344567 </span>
          </li>
          <li class="mb-3">
            <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2"> + 62 98765432 </span>
          </li>
        </ul>
      </div>

      <!-- Opening hours -->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4"> Opening hours </h5>
        <table class="table text-center text-white">
          <tbody class="font-weight-normal">
            <tr>
              <td> Senin - Selasa : </td>
              <td> 07.00 - 17.00 </td>
            </tr>
            <tr>
              <td> Rabu - Sabtu : </td>
              <td> 07.00 - 18.00 </td>
            </tr>
            <tr>
              <td> Minggu : </td>
              <td> 08.00 - 16.00 </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center p-3 footer-copyright">
    © 2025 Copyright:
    <a class="text-white" href="#"> Diah Laundry </a>
  </div>
</footer>