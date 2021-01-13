<section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Gambar Wisata</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".Pantai">
                Pantai 
              </a>
              <a class="filter btn btn-common" data-filter=".Candi">
                Candi
              </a>
              <a class="filter btn btn-common" data-filter=".Gunung">
                Gunung 
              </a>
              <a class="filter btn btn-common" data-filter=".Danau">
                Danau 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row">
            @forelse ($dataWisata as $wisata)
              @foreach ($wisata->galeriRelasiIndex as $foto)
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix {{ $wisata->kategori }}">
                  <div class="portfolio-item">
                    <div class="shot-item">
                      <img src="{{asset('uploads/foto-wisata')}}/{{$foto->url_foto}}" alt=""  />  
                      <a class="overlay lightbox" href="{{asset('uploads/foto-wisata')}}/{{$foto->url_foto}}" data-toggle="tooltip" data-placement="bottom" title="{{ $wisata->nama_wisata }}">
                        <i class="lnr lnr-eye item-icon"></i>
                      </a>
                    </div>               
                  </div>
                </div>
              @endforeach
            @empty
                <p class="text-justify">
                  Belum ada gambar.
                </p>
            @endforelse
          </div>
        </div>
        <div class="row justify-content-center">
          @if ($dataWisata->lastPage() > 1)
          <ul class="pagination">
              <li class="{{ ($dataWisata->currentPage() == 1) ? ' disabled' : '' }} page-item">
                  <a class=" page-link " href="{{ $dataWisata->url(1) }}" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only"></span>Previous
                  </a>
              </li>
              @for ($i = 1; $i <= $dataWisata->lastPage(); $i++)
                  <li class="{{ ($dataWisata->currentPage() == $i) ? ' active' : '' }} page-item">
                      <a class=" page-link " href="{{ $dataWisata->url($i) }}">{{ $i }}</a>
                  </li>
              @endfor
              <li class="{{ ($dataWisata->currentPage() == $dataWisata->lastPage()) ? ' disabled' : '' }} page-item">
                  <a href="{{ $dataWisata->url($dataWisata->currentPage()+1) }}" class="page-link" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only"></span>Next
                  </a>
              </li>
          </ul>
          @endif
        </div>
      </div>
      <!-- Container Ends -->
    </section>