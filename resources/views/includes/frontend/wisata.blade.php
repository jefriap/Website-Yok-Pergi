<section id="blog" class="section">
  @php
    $i = 1;
  @endphp
    <!-- Container Starts -->
    <div class="container">
      <div class="section-header">          
        <h2 class="section-title">Wisata Daerah</h2>
        <hr class="lines">
        <p class="section-subtitle">Menampilkan deretan informasi seputar wisata-wisata daerah yang ada di Indonesia, berupa candi, pantai, pegunungan, dan danau.</p>
      </div>
      <div class="row">
        @forelse ($dataWisata as $wisata)
          @foreach ($wisata->galeriRelasiIndex as $foto)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
              <!-- Blog Item Starts -->
              <div class="blog-item-wrapper">
                <div class="blog-item-img">
                  <a href="{{ route('blog.detail', [$wisata->slug, $wisata->id]) }}">
                    <img src="{{asset('uploads/foto-wisata')}}/{{ $foto->url_foto }}" alt="">
                  </a>                
                </div>
                <div class="blog-item-text"> 
                  <div class="meta-tags">
                    <span class="date"><i class="lnr  lnr-clock"></i>{{ $wisata->created_at }}</span>
                  </div>
                  <h3>
                    <a href="{{ route('blog.detail', [$wisata->slug, $wisata->id]) }}">{{ $wisata->nama_wisata }}</a>
                  </h3>
                  <p>
                    {{ Illuminate\Support\Str::limit($wisata->deskripsi, 100) }}
                  </p>
                  <a href="{{ route('blog.detail', [$wisata->slug, $wisata->id]) }}" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
                </div>
              </div>
              <!-- Blog Item Wrapper Ends-->
            </div>
          @endforeach
        @empty
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-text"> 
                <h3>
                  Tidak tersedia!
                </h3>
                <p class="text-justify">
                  Belum ada artikel Wisata Daerah 
                </p>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        @endforelse
      </div>
      {{-- pagination --}}
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
      {{-- end pagination --}}
    </div>
  </section>