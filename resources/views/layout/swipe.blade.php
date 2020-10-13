

<section id="home-slider">

    <div class="swiper-container">


        <div class="swiper-wrapper">

                    <div class="swiper-slide" id="skck" style="background-image:url({{asset('images/page/SKCK.png')}})">

                        <div class="col-sm-12 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">


                        </div>
                    </div>

                <div class="swiper-slide" id="sktlk"  onclick="sktlkConfirmation('SKTLK')" style="background-image:url({{asset('images/page/sktlk.png')}})">
                    <div class="col-sm-12 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">

                    </div>
                 </div>

                <div class="swiper-slide" id="lp" style="background-image:url({{asset('images/page/lp.png')}})">

                    <div class="col-sm-12 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">

                    </div>
                </div>


                <div class="swiper-slide" id="sp2hp" style="background-image:url({{asset('images/page/sp2hp.png')}})">

                    <div class="col-sm-12 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">

                    </div>

                </div>

                    <div class="swiper-slide" id="sttp" style="background-image:url({{asset('images/page/sttp.png')}})">

                        <div class="col-sm-12 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">

                        </div>
                    </div>

                    <div class="swiper-slide" id="sttlp" style="background-image:url({{asset('images/page/sttlp.png')}})">

                        <div class="col-sm-12 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">

                        </div>
                    </div>


                    <div class="swiper-slide" id="skld" style="background-image:url({{asset('images/page/skld.png')}})">

                        <div class="col-sm-12 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">

                        </div>
                    </div>
        </div>
        <!-- Add Pagination -->

        <div class="swiper-pagination"></div>

    </div>

    <div class="container">

        <div class="row">
            <div class="main-slider">

                    <img src="{{asset('images/page/citys.png')}}" class="slider-hill" alt="slider image">

                    <img src="{{asset('images/page/tablet.png')}}" class="slider-house" alt="slider image">



                    <!--/#services-->

            </div>
        </div>
    </div>



</section>

<script src="{{asset('js/swiper.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


   <!-- Initialize Swiper -->

<script type="text/javascript">



$(function (){
    $(this).keydown(function (e){
        e.preventDefault()
        if (e.keyCode == 13){
            console.log("enterde")
            var selectedCard = document.querySelector('.swiper-slide-active')
            var id = selectedCard.id
            console.log(id)


            switch(id){
                case 'skck':
                    jenis = "SKCK"
                    kep = "Surat Keterangan Catatan Kepolisian"
                    break
                case 'sktlk':
                    jenis = "SKTLK"
                    kep = "Surat Keterangan Tanda Lapor Kehilangan"
                    break
                case 'sttp':
                    jenis = "STTP"
                    kep = "Surat Tanda Terima Pemberitahuan"
                    break
                case 'lp':
                    jenis = "LP"
                    kep = "Laporan Polisi"
                    break
                case 'sp2hp':
                    jenis = "SP2HP"
                    kep = "Surat Pemberitahuan Perkembangan Hasil Penyidikan"
                    break
                case 'sttlp':
                    jenis = "STTLP"
                    kep = "Surat Tanda Terima Laporan Polisi"
                    break
                case 'skld':
                    jenis = "SKLD"
                    kep = "Surat Keterangan Lapor Diri"
                    break
                //dll
            }

            showConfirmation(jenis)
        }
    })
})




function showConfirmation(jenis) {
    swal({
            title: "Tunggu Sebentar !",
            text: "Sedang mencetak tiket antrian "+kep+" ("+jenis+")",
            allowEscapeKey: false,
            allowOutsideClick: false,
            timer: 1000,
            onOpen: () => {
      swal.showLoading();
    }
        })
        .then(function () {
                $.ajax({
                    url:'{{ url("store") }}',
                    type : 'POST',
                    crossDomain: true,
                    data : {
                        keperluan: jenis,
                        _token   : '{{ csrf_token() }}'
                    },
                    success : function (data) {
                        console.log(data)

                    },
                    error : function (jqXHR) {
                        console.log(jqXHR);

                    }
                });

        swal({
          title: 'Selesai !',
          type: 'success',
          text: "Silahkan ambil tiket antrian "+kep+" ("+jenis+")",
          timer: 2000,
          showConfirmButton: false
        })



        }, function (dismiss) {
            return false;
        })

};


</script>
