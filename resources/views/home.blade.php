@extends('layouts.default')
@section('content')

<!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
<div class="content-wrapper">
  <div class="content-body">
    <main><!-- Header: 3D Animation -->
<section class="head-area" id="head-area">
<div></div>
<div class="head-content d-flex align-items-center">
    <div class="container">
      <div class="banner-wrapper">

            <div class="row align-items-right">
                <div class="col-lg-12 col-md-12">
                    <div class="banner-content">
                      <div id="svg-animation">
                         <img src="{{ asset('images/logo.png') }}" style="width:40%;height:40%;display: block;margin-left: auto;margin-right: auto">
                      </div>

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:black;margin-top:20px">Tanabata is an annual event to celebrate the stars on the night of July 7. It is also one of the five festivals established in the Edo period.</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:black">Dejitaru Tanabata</h5>
                        <div class="mt-5 text-center">
                          <a href="https://t.me/DejitaruTanabata" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">Telegram Group</a>
                          <a href="https://www.dextools.io/app/en/ether/pair-explorer/" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">CHART</a>
                          <a href="https://medium.com/@RenJhz/dejitaru-tanabata-799b200a69a4" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">MEDIUM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

    </main>
  </div>
</div>
<!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->

<script type="text/javascript">

  function copyContract() {
    var copyText = document.getElementById("smartcontractaddress");

    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    document.execCommand("copy");

    alert("Text copied to clipboard");
  }

</script>

@stop
