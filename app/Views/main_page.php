<?= $this->extend("Layout/Sablona"); ?>

<?= $this->section("content");?>
<h1 class="text-center pb-5" style="font-size: 70px; padding-top: 130px;">Byliny</h1>
<div class="container mt-3">
    
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
       <div class="row">
      <div class="col-xxl-8 col-lg-8 col-sm-12 pb-5">
        <img class="card-img-top" src="<?= base_url("IMG/Byliny3.png") ?>" alt="Card image" style="width:100%;height:100%; border-radius: 5px;">
      </div>
      <div class="col-xxl-4 col-lg-4 col-ms-12 pb-5">
        <h1 class="pb-2">Historie bylin</h1>
        <p style="font-size: 30px">Byliny provází lidstvo od starověku – od Egypta přes Řecko až po středověké kláštery.
          <br>Byly ceněny nejen pro léčivé účinky, ale i pro symboliku a rituály.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="row">
      <div class="col-xxl-8 col-lg-8 col-sm-12 pb-5">
        <img class="card-img-top" src="<?= base_url("IMG/Byliny2.png") ?>" alt="Card image" style="width:100%;height:100%; border-radius: 5px;">
      </div>
      <div class="col-xxl-4 col-lg-4 col-ms-12 pb-5">
        <h1 class="pb-2">Léčivá síla</h1>
        <p style="font-size: 30px">Heřmánek, máta či šalvěj patří k nejznámějším pomocníkům při drobných obtížích.
        <br>Ulevují od nachlazení, podporují trávení a přinášejí klid.</p>
      </div>
    </div> 
    </div>
    <div class="carousel-item">
      <div class="row">
      <div class="col-xxl-8 col-lg-8 col-sm-12 pb-5">
        <img class="card-img-top" src="<?= base_url("IMG/Byliny1.png") ?>" alt="Card image" style="width:100%;height:100%; border-radius: 5px;">
      </div>
      <div class="col-xxl-4 col-lg-4 col-sm-12 pb-5">
        <h1 class="pb-2">Byliny v kuchyni</h1>
        <p style="font-size: 30px">Rozmarýn, tymián nebo bazalka dodávají jídlům nezaměnitelnou chuť a vůni.
        <br>Kromě chuti navíc podporují trávení a zdravý životní styl.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="row">
      <div class="col-xxl-8 col-lg-8 col-sm-12 pb-5">
        <img class="card-img-top" src="<?= base_url("IMG/Byliny4.png") ?>" alt="Card image" style="width:100%;height:100%; border-radius: 5px;">
      </div>
      <div class="col-xxl-4 col-lg-4 col-sm-12 pb-5">
        <h1 class="pb-2">Sběr a sušení</h1>
        <p style="font-size: 30px">Byliny se nejlépe sbírají v době, kdy kvetou a obsahují nejvíce účinných látek.
       <br>Suší se na stinném a vzdušném místě, aby si uchovaly barvu i vůni.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="row">
      <div class="col-xxl-8 col-lg-8 col-sm-12 pb-5">
        <img class="card-img-top" src="<?= base_url("IMG/Byliny5.png") ?>" alt="Card image" style="width:100%;height:100%; border-radius: 5px;">
      </div>
      <div class="col-xxl-4 col-lg-4 col-sm-12 pb-5">
        <h1 class="pb-2">Byliny v každodenním životě</h1>
        <p style="font-size: 30px">Najdeme je v čajích, mastičkách, koupelích i voňavých polštářcích.
        <br>Přinášejí pohodu, zdraví a kousek přírody do našeho domova.</p>
      </div>
    </div>
    </div>
</div>
      
    
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" style="left: -150px;width: 20%;">
    <span class="carousel-control-prev-icon" style="padding: 30px;"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next" style="right: -150px;width: 20%;">
    <span class="carousel-control-next-icon" style="padding: 30px;"></span>
  </button>
</div>
</div>
  </div>

<?= $this->endSection();?>




<?php
//použiju šablonu layout a content

//anchor = a - jako odkas
// zkratka <?= php echo