<?= $this->extend("Layout/Sablona"); ?>

<?= $this->section("content");?>
<h1 class="text-center pb-5" style="font-size: 70px; padding-top: 130px;">Výskyt Bylin</h1>


<div class="container mt-4 pb-5">
  <table class=" table-bordered align-middle p-3" style="background-color: rgb(233, 178, 107); font-size: large;">
  <!-- tady se definují sloupce -->
  <colgroup>
    <col style="width: 250px;" >
    <col style="width: 520px;">
    <col style="width: 520px;">
  </colgroup>


  <thead>
    <tr>
      <th>Bylina</th>
      <th>Největší Výskyt</th>
      <th>Využití</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Pampeliška lékařská</td>
      <td>Evropa a Asie, dnes rozšířená po celém světě / Čína <span class="fi fi-cn"></span></td>
      <td>Čaje na podporu trávení, detoxikaci a játra</td>
    </tr>
    <tr>
      <td>Pelyněk pravý</td>
      <td>Evropa a západní Asie / Francie <span class="fi fi-fr"></span></td>
      <td>Léčivé tinktury, hořčiny na trávení, výroba absintu</td>
    </tr>
    <tr>
      <td>Svízel přítula</td>
      <td>Evropa, Asie a Severní Amerika / Evropa <span class="fi fi-eu"></span></td>
      <td>Čaje na pročištění organismu a močové cesty</td>
    </tr>
    <tr>
      <td>Lichořeřišnice větší</td>
      <td>Původní Jižní Amerika / Peru <span class="fi fi-pe"></span></td>
      <td>Přírodní antibiotikum, listy a květy do salátů</td>
    </tr>
    <tr>
      <td>Rmen rolní</td>
      <td>Evropa a Asie / Nepěstuje se</td>
      <td>Čaj proti nachlazení a horečce</td>
    </tr>
    <tr>
      <td>Kopr vonný</td>
      <td>Původně Středomoří a západní Asie / Indie <span class="fi fi-in"></span></td>
      <td>Koření do jídel, čaje proti nadýmání a trávení</td>
    </tr>
    <tr>
      <td>Řebříček obecný</td>
      <td>Evropa a Asie / Polsko <span class="fi fi-pl"></span></td>
      <td>Čaje proti horečce, na trávení, léčba ran</td>
    </tr>
    <tr>
      <td>Jetel plazivý</td>
      <td>Evropa, rozšířený po celém světě / USA <span class="fi fi-us"></span></td>
      <td>Čaje na detoxikaci, půdní hnojivo (fixace dusíku)</td>
    </tr>
    <tr>
      <td>Měsíček lékařský</td>
      <td>Jižní Evropa / Egypt <span class="fi fi-eg"></span></td>
      <td>Masti na hojení ran, čaj na záněty a podporu imunity</td>
    </tr>
    <tr>
      <td>Máta peprná</td>
      <td>Hybrid vzniklý v Anglii / USA <span class="fi fi-us"></span></td>
      <td>Čaj na trávení, osvěžení dechu, olej do kosmetiky</td>
    </tr>
    <tr>
      <td>Šalvěj lékařská</td>
      <td>Středomoří / Albánie <span class="fi fi-al"></span></td>
      <td>Čaje proti bolestem v krku, koření do jídel</td>
    </tr>
    <tr>
      <td>Levandule lékařská</td>
      <td>Středomoří / Francie <span class="fi fi-fr"></span></td>
      <td>Uklidňující čaje, esenciální oleje, kosmetika</td>
    </tr>
    <tr>
      <td>Bazalka pravá</td>
      <td>Indie a tropická Asie / Indie <span class="fi fi-in"></span></td>
      <td>Koření do jídel, čaje na nervy a trávení</td>
    </tr>
    <tr>
      <td>Rozmarýn lékařský</td>
      <td>Středomoří / Španělsko <span class="fi fi-es"></span></td>
      <td>Koření, čaj na podporu paměti a prokrvení</td>
    </tr>
    <tr>
      <td>Tymián obecný</td>
      <td>Středomoří / Maroko <span class="fi fi-ma"></span></td>
      <td>Léčba kašle, antiseptický čaj, koření</td>
    </tr>
    <tr>
      <td>Meduňka lékařská</td>
      <td>Středomoří / Německo <span class="fi fi-de"></span></td>
      <td>Čaje na uklidnění a lepší spánek</td>
    </tr>
    <tr>
      <td>Mateřídouška obecná</td>
      <td>Evropa / Polsko <span class="fi fi-pl"></span></td>
      <td>Čaj na dýchací cesty a kašel</td>
    </tr>
    <tr>
      <td>Kozlík lékařský</td>
      <td>Evropa a Asie / Polsko <span class="fi fi-pl"></span></td>
      <td>Kapky a čaje na uklidnění, proti nespavosti</td>
    </tr>
    <tr>
      <td>Kostival lékařský</td>
      <td>Evropa a Asie / sběr v Evropě <span class="fi fi-eu"></span></td>
      <td>Masti na pohmožděniny a zlomeniny</td>
    </tr>
    <tr>
      <td>Podběl lékařský</td>
      <td>Evropa a Asie / sběr v přírodě <span class="fi fi-eu"></span></td>
      <td>Čaj proti kašli a nachlazení</td>
    </tr>
    <tr>
      <td>Kontryhel obecný</td>
      <td>Evropa / sběr v přírodě <span class="fi fi-eu"></span></td>
      <td>Čaje na ženské potíže, posílení dělohy</td>
    </tr>
    <tr>
      <td>Plicník lékařský</td>
      <td>Evropa / sběr v Evropě <span class="fi fi-eu"></span></td>
      <td>Čaj na plíce a dýchací potíže</td>
    </tr>
    <tr>
      <td>Kokoška pastuší tobolka</td>
      <td>Evropa a Asie / sběr v přírodě <span class="fi fi-eu"></span></td>
      <td>Zastavení krvácení, čaj na menstruační potíže</td>
    </tr>
    <tr>
      <td>Hluchavka bílá</td>
      <td>Evropa a Asie / sběr v Evropě <span class="fi fi-eu"></span></td>
      <td>Čaj na nachlazení, močové cesty a záněty</td>
    </tr>
    <tr>
      <td>Brutnák lékařský</td>
      <td>Původně Středomoří / Německo <span class="fi fi-de"></span></td>
      <td>Čaj proti horečce, listy do salátů, olej na záněty</td>
    </tr>
  </tbody>
</table>


</div>
    

<?= $this->endSection();?>