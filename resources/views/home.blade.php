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

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:white;margin-top:20px">Dragon King $RyuJin, is One of the Best Dragon Mythology</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:white">RyuJin Will Rule the World!</h5>
                        <div class="mt-5 text-center">
                          <a href="https://medium.com/@JamesErc/dejitaru-ryujin-8c42bb7fd134" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">MEDIUM</a>
                          <a href="https://t.me/DejitaruRyuJin" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">TG OFFICIAL</a>
                          <a href="https://www.dextools.io/app/en/ether/pair-explorer/" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">CHART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

<!-- Tokenomics -->
<section class="about section-padding" id="tokenomics">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:white">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:#ffffff">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Ticker</h3>
                    <h4 style="font-size:24px">$RyuJin</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Total Supply</h3>
                    <h4 style="font-size:24px">100.000.000</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Decimals</h3>
                    <h4 style="font-size:24px">9</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Tax</h3>
                    <h4 style="font-size:24px">3% Buy | 3% Sell</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Wallet</h3>
                    <h4 style="font-size:24px">4%</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Tx</h3>
                    <h4 style="font-size:24px">4%</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px">Initial LP</h3>
                    <h4 style="font-size:24px">1 WETH</h4>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Tokenonmics -->

<!-- Roadmap -->
<section id="roadmap" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:white">Roadmap</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img src="{{ asset('images/roadmap.png') }}" style="width:100%;height:100%" >
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Roadmap -->

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
