@extends('layouts.app')

@section('title', 'ALMENT CAMPING | FAQs')

@section('content')
    <div class="container">
      <div class="mt-5 text-decoration-underline">
        <h1 class="text-center">
          FAQs
        </h1>
      </div>

        <div class="mt-5 accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <strong>#1. Bagaimana jika saya ingin menyewa barang di Alment Camping? </strong>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Customer harus login atau register terlebih dahulu.</strong> 
                  <p>Jika peminjam belum melakukan register dan atau login, maka tidak akan dapat mengakses halaman-halaman lainnya dan melakukan peminjaman pada menu navigasi.</p>
                </div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <strong>#2. Berapakah biaya sewa per-hari?</strong>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Biaya sewa tidak dikenakan biaya per-hari.</strong>
                  <p>Jika peminjam hanya melakukan peminjaman 1-3 hari, maka biaya sewa tidak dikalikan per-hari nya,</p>
                </div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <strong>#3. Lalu kapan dikenakan multiplikasi biaya?</strong>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Multiplikasi biaya akan berlaku pada 2 kondisi.</strong> 
                  <p>Jika peminjam melakukan peminjaman lebih dari 3 hari maka akan dikenakan biaya multiplikasi sewa  per-hari nya</p>
                </div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <strong>#4. Lalu jika barang yang dipinjam hilang?</strong>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Multiplikasi biaya jelas akan berlaku jika barang hilang.</strong> 
                  <p>Jika barang yang dipinjam hilang, maka dikenakan multiplikasi biaya sebesar 2x lipat dari harga beli barang yang disewakan.</p>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <strong>#5. Apakah hal pada poin #4 diatas itu termasuk denda?</strong>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Ya, hal tersebut termasuk pada denda peminjaman.</strong> 
                  <p>Peminjam akan bertanggung jawab atas kehilangan barang yang terjadi dengan membayar 2x lipat dari harga beli barang yang disewakan, jika di awal melakukan peminjaman tidak dapat memberikan jaminan barang untuk melakukan peminjaman.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <strong>#6. Bagaimana jika barangnya yang dipinjam rusak?</strong>
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Jika barang yang dipinjam rusak akan didenda.</strong> 
                  <p>Jika barang yang dipinjam rusak, maka akan didenda tapi tidak akan sebesar seperti barang yang hilang seperti pada poin #5.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  <strong>#7. Berapa biaya denda untuk barang yang rusak?</strong>
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Denda barang rusak tergantung pada tingkat kerusakan.</strong> 
                  <p>Jika barang yang dipinjam rusak, lebih baik tidak usah disembunyikan atau dilakukan reparasi sendiri atau diganti dengan jenis yang serupa tapi berbeda</p>
                  <p>jika barang yang dipinjam rusak lebih baik peminjam melakukan konfirmasi kepada pegawai Alment Camping saat pengembalian barang, sehingga dapat ditentukan biaya yang harus diganti berdasarkan tingkat kerusakan barang.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  <strong>#8. Mengapa harga sewa per barang cukup mahal walaupun tidak dalam rentang waktu peminjaman yang lama dan harus memberikan jaminan?</strong>
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Biaya sudah ditetapkan berdasarkan keputusan pihak Alment Camping.</strong> 
                  <p>Hal ini dikarenakan untuk memberikan rasa tanggung jawab yang besar kepada setiap peminjam atas barang yang dipinjam, mengingat dari kualitas barang yang dibeli dan biaya awal pembelian per barang yang cukup mahal</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  <strong>#9. Apa saja barang yang dijadikan sebagai jaminan peminjaman?</strong>
                </button>
              </h2>
              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Barang berharga dan bernilai jenis apapun.</strong> 
                  <p>Barang-barang yang mempunyai nilai jual tinggi dan berharga nilainya</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                  <strong>#10. Kapan dan bagaimana barang jaminan peminjaman dapat diambil kembali oleh peminjam?</strong>
                </button>
              </h2>
              <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Barang jaminan dapat diambil sesuai dengan kesepakatan perjanjian.</strong> 
                  <p>Barang-barang jaminan dikembalikan oleh pihak peminjaman jika peminjam sudah mengembalikan barang-barang perlengkapan camping dengan tepat waktu.</p>
                </div>
              </div>
            </div>

          </div>
    </div>
@endsection