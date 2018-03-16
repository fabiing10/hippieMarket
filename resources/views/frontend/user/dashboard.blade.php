@extends('frontend.layouts.app')

@section('after-styles')
<style>
div#seleccionar { width: 500px; }
label { margin-bottom: 0px; width: 100%;}
.input-form { border-bottom: 1px solid #b7b7b7; }
input.error {
    background-color: #ffefef;
    border-bottom: 1px solid #ff9b9b;
}
label.error {
    font-weight: normal;
    color: red;
    font-size: 11px;
}
span.out {
    display: block;
    text-align: center;
    color: #9e4c4c;
    background-color: #ffc8c8;
}
span.out-enable {
    background: #2d3750;
    text-align: center;
    width: 100%;
    display: block;
    color: white;
    font-weight: 100;
    border-radius: 100%;
}
span.in {
    text-align: center;
    display: block;
}
table {
    font-family: arial, sans-serif;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    /* padding: 10px; */
    background-color: #e8e8e8;
}
.no{
  border: 0px solid #dddddd;
  background-color: transparent !important;
  padding: 10px;
}
.image{
  background-image: url("http://regionmojana.com/imagen.png");
  background-size: contain;
  padding: 10px;
}
.button{
  cursor: pointer;
}
input{
  width: 100%;
  background-color: transparent;
  border: 0px solid;
  cursor: pointer;
}
.container-options {
  height: auto;
}
.container-options img{
  margin: 0 auto;
  display: block;
  width: 85%;
}
div#getting-started span {
    color: white;
    background: #2d3750;
    border-radius: 100%;
    padding: 10px;
    width: 56px;
    display: inline-block;
    margin-left: 22px;
}
div#getting-started {
    text-align: center;
    font-size: 23px;
    border: 1px solid #2d3750;
    border-radius: 6px;
    padding: 15px;
    font-weight: 100;
}
ul.info-data li {
    list-style-type: none;
    color: #2d3750;
    background: white;
    width: 30px;
    text-align: center;
    border-radius: 100%;
    height: 30px;
    line-height: 30px;
    float: left;
    margin-left: 10px;
    margin-top: 8px;
}
ul.info-data {
    float: left;
    width: 50%;
}
span.cupo_select {
    background: #2d3750;
    padding: 5px 9px;
    border-radius: 100%;
    color: white;
    margin-left: 10px;
}
p.text-info {
    text-align: center;
    margin-bottom: 52px;
    background: #eaeaea;
    padding: 15px 0px;
}
</style>
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                  <div class="row">
                    <?php
                      $user = Auth::user();
                    ?>
                    <div class="col-xs-3">Nombre: <?php echo $user->name; ?></div>
                    <div class="col-xs-3">Marca: <?php echo $user->brand; ?></div>
                    <div class="col-xs-6" style="background-color: #2c3750;color: white;">
                      <span style="float:left;margin-top: 12px;">Carpas Seleccionadas:</span><ul class="info-data">
                      <?php
                      foreach ($carpas as $carpa) {
                        echo "<li>".$carpa->carpa."</li>";
                      }
                      ?>
                      </ul>
                    </div>


                  </div>

                </div>
                <?php
                date_default_timezone_set('America/Bogota');
                $fechaActual = date("Y-m-d H:i:s"); ?>

                @if($fechaActual >  $user->dateTime)

                <div class="panel-body">
                  @if($select)
                    <div class="row">
                        <p class="text-info">Hola {{$user->name}}! Selecciona tu carpa dando click en el # que encuentra en el mapa segun la unicación que quieras. </p>
                      <div style="background-image: url('http://regionmojana.com/montaje.jpg')">
                          <div>
                          <table>
                            <tr>
                              <th>
                                @if($c->getStatus(1))  <span class="out">1</span> @else
                                <input type="button" value="1" name="carpa" onclick="loadRegister('{{Crypt::encrypt('1')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(2))  <span class="out">2</span> @else
                                <input type="button" value="2" name="carpa" onclick="loadRegister('{{Crypt::encrypt('2')}}')">
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(3))  <span class="out">3</span> @else
                                <input type="button" value="3" name="carpa" onclick="loadRegister('{{Crypt::encrypt('3')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(4))  <span class="out">4</span> @else
                                <input type="button" value="4" name="carpa" onclick="loadRegister('{{Crypt::encrypt('4')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(5))  <span class="out">5</span> @else
                                <input type="button" value="5" name="carpa" onclick="loadRegister('{{Crypt::encrypt('5')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(6))<span class="out">6</span> @else
                                <input type="button" value="6" name="carpa" onclick="loadRegister('{{Crypt::encrypt('6')}}')">
                                @endif
                              </th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>

                              <th>
                                @if($c->getStatus(7))  <span class="out">7</span> @else
                                <input type="button" value="7" name="carpa" onclick="loadRegister('{{Crypt::encrypt('7')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(8))  <span class="out">8</span> @else
                                <input type="button" value="8" name="carpa" onclick="loadRegister('{{Crypt::encrypt('8')}}')">
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(9))  <span class="out">9</span> @else
                                <input type="button" value="9" name="carpa" onclick="loadRegister('{{Crypt::encrypt('9')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(10))  <span class="out">10</span> @else
                                <input type="button" value="10" name="carpa" onclick="loadRegister('{{Crypt::encrypt('10')}}')">
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(11))  <span class="out">11</span> @else
                                <input type="button" value="11" name="carpa" onclick="loadRegister('{{Crypt::encrypt('11')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(12))  <span class="out">12</span> @else
                                <input type="button" value="12" name="carpa" onclick="loadRegister('{{Crypt::encrypt('12')}}')">
                                @endif
                              </th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>

                              <th>
                                @if($c->getStatus(13))  <span class="out">13</span> @else
                                <input type="button" value="13" name="carpa" onclick="loadRegister('{{Crypt::encrypt('13')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(14))  <span class="out">14</span> @else
                                <input type="button" value="14" name="carpa" onclick="loadRegister('{{Crypt::encrypt('14')}}')">
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(15))  <span class="out">15</span> @else
                                <input type="button" value="15" name="carpa" onclick="loadRegister('{{Crypt::encrypt('15')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(16))  <span class="out">16</span> @else
                                <input type="button" value="16" name="carpa" onclick="loadRegister('{{Crypt::encrypt('16')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(17))  <span class="out">17</span> @else
                                <input type="button" value="17" name="carpa" onclick="loadRegister('{{Crypt::encrypt('17')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(18))  <span class="out">18</span> @else
                                <input type="button" value="18" name="carpa" onclick="loadRegister('{{Crypt::encrypt('18')}}')">
                                @endif
                              </th>
                            </tr>
                            <tr>
                              <td colspan="24" class="image"></td>
                            </tr>
                            <tr>
                              <th>
                                @if($c->getStatus(19))  <span class="out">19</span> @else
                                <input type="button" value="19" name="carpa" onclick="loadRegister('{{Crypt::encrypt('19')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(20))  <span class="out">20</span> @else
                                <input type="button" value="20" name="carpa" onclick="loadRegister('{{Crypt::encrypt('20')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(21))  <span class="out">21</span> @else
                                <input type="button" value="21" name="carpa" onclick="loadRegister('{{Crypt::encrypt('21')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(22))  <span class="out">22</span> @else
                                <input type="button" value="22" name="carpa" onclick="loadRegister('{{Crypt::encrypt('22')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(23))  <span class="out">23</span> @else
                                <input type="button" value="23" name="carpa" onclick="loadRegister('{{Crypt::encrypt('23')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(24))  <span class="out">24</span> @else
                                <input type="button" value="24" name="carpa" onclick="loadRegister('{{Crypt::encrypt('24')}}')">
                                @endif
                              </th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>


                              <th>
                                @if($c->getStatus(25))  <span class="out">25</span> @else
                                <input type="button" value="25" name="carpa" onclick="loadRegister('{{Crypt::encrypt('25')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(26))  <span class="out">26</span> @else
                                <input type="button" value="26" name="carpa" onclick="loadRegister('{{Crypt::encrypt('26')}}')">
                                @endif
                              </th>


                              <th>
                                @if($c->getStatus(27))  <span class="out">27</span> @else
                                <input type="button" value="27" name="carpa" onclick="loadRegister('{{Crypt::encrypt('27')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(28))  <span class="out">28</span> @else
                                <input type="button" value="28" name="carpa" onclick="loadRegister('{{Crypt::encrypt('28')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(29))  <span class="out">29</span> @else
                                <input type="button" value="29" name="carpa" onclick="loadRegister('{{Crypt::encrypt('29')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(30))  <span class="out">30</span> @else
                                <input type="button" value="30" name="carpa" onclick="loadRegister('{{Crypt::encrypt('30')}}')">
                                @endif
                              </th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th>
                                @if($c->getStatus(31))  <span class="out">31</span> @else
                                <input type="button" value="31" name="carpa" onclick="loadRegister('{{Crypt::encrypt('31')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(32))  <span class="out">32</span> @else
                                <input type="button" value="32" name="carpa" onclick="loadRegister('{{Crypt::encrypt('32')}}')">
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(33))  <span class="out">33</span> @else
                                <input type="button" value="33" name="carpa" onclick="loadRegister('{{Crypt::encrypt('33')}}')">
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(34))  <span class="out">34</span> @else
                                <input type="button" value="34" name="carpa" onclick="loadRegister('{{Crypt::encrypt('34')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(35))  <span class="out">35</span> @else
                                <input type="button" value="35" name="carpa" onclick="loadRegister('{{Crypt::encrypt('35')}}')">
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(36))  <span class="out">36</span> @else
                                <input type="button" value="36" name="carpa" onclick="loadRegister('{{Crypt::encrypt('36')}}')">
                                @endif
                              </th>
                            </tr>

                          </table>
                          </div>
                          <div class="container-options">
                          {{ Html::image('img/imagen_carpas.jpg') }}
                          </div>
                          <div>
                            <table>

                              <tr>
                                <th>
                                  @if($c->getStatus(37))  <span class="out">37</span> @else
                                  <input type="button" value="37" name="carpa" onclick="loadRegister('{{Crypt::encrypt('37')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(38))  <span class="out">38</span> @else
                                  <input type="button" value="38" name="carpa" onclick="loadRegister('{{Crypt::encrypt('38')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(39))  <span class="out">39</span> @else
                                  <input type="button" value="39" name="carpa" onclick="loadRegister('{{Crypt::encrypt('39')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(40))  <span class="out">40</span> @else
                                  <input type="button" value="40" name="carpa" onclick="loadRegister('{{Crypt::encrypt('40')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(41))  <span class="out">41</span> @else
                                  <input type="button" value="41" name="carpa" onclick="loadRegister('{{Crypt::encrypt('41')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(42))  <span class="out">42</span> @else
                                  <input type="button" value="42" name="carpa" onclick="loadRegister('{{Crypt::encrypt('42')}}')">
                                  @endif
                                </th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th>
                                  @if($c->getStatus(43))  <span class="out">43</span> @else
                                  <input type="button" value="43" name="carpa" onclick="loadRegister('{{Crypt::encrypt('43')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(44))  <span class="out">44</span> @else
                                  <input type="button" value="44" name="carpa" onclick="loadRegister('{{Crypt::encrypt('44')}}')">
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(45))  <span class="out">45</span> @else
                                  <input type="button" value="45" name="carpa" onclick="loadRegister('{{Crypt::encrypt('45')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(46))  <span class="out">46</span> @else
                                  <input type="button" value="46" name="carpa" onclick="loadRegister('{{Crypt::encrypt('46')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(47))  <span class="out">47</span> @else
                                  <input type="button" value="47" name="carpa" onclick="loadRegister('{{Crypt::encrypt('47')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(48))  <span class="out">48</span> @else
                                  <input type="button" value="48" name="carpa" onclick="loadRegister('{{Crypt::encrypt('48')}}')">
                                  @endif
                                </th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th>
                                  @if($c->getStatus(49))  <span class="out">49</span> @else
                                  <input type="button" value="49" name="carpa" onclick="loadRegister('{{Crypt::encrypt('49')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(50))  <span class="out">50</span> @else
                                  <input type="button" value="50" name="carpa" onclick="loadRegister('{{Crypt::encrypt('50')}}')">
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(51))  <span class="out">51</span> @else
                                  <input type="button" value="51" name="carpa" onclick="loadRegister('{{Crypt::encrypt('51')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(52))  <span class="out">52</span> @else
                                  <input type="button" value="52" name="carpa" onclick="loadRegister('{{Crypt::encrypt('52')}}')">
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(53))  <span class="out">53</span> @else
                                  <input type="button" value="53" name="carpa" onclick="loadRegister('{{Crypt::encrypt('53')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(54))  <span class="out">54</span> @else
                                  <input type="button" value="54" name="carpa" onclick="loadRegister('{{Crypt::encrypt('54')}}')">
                                  @endif
                                </th>

                              </tr>
                              <tr>
                                <td colspan="24" class="image"></td>
                              </tr>
                              <tr>
                                <th>
                                  @if($c->getStatus(55))  <span class="out">55</span> @else
                                  <input type="button" value="55" name="carpa" onclick="loadRegister('{{Crypt::encrypt('55')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(56))  <span class="out">56</span> @else
                                  <input type="button" value="56" name="carpa" onclick="loadRegister('{{Crypt::encrypt('56')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(57))  <span class="out">57</span> @else
                                  <input type="button" value="57" name="carpa" onclick="loadRegister('{{Crypt::encrypt('57')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(58))  <span class="out">58</span> @else
                                  <input type="button" value="58" name="carpa" onclick="loadRegister('{{Crypt::encrypt('58')}}')">
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(59))  <span class="out">59</span> @else
                                  <input type="button" value="59" name="carpa" onclick="loadRegister('{{Crypt::encrypt('59')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(60))  <span class="out">60</span> @else
                                  <input type="button" value="60" name="carpa" onclick="loadRegister('{{Crypt::encrypt('60')}}')">
                                  @endif
                                </th>

                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>

                                <th>
                                  @if($c->getStatus(61))  <span class="out">61</span> @else
                                  <input type="button" value="61" name="carpa" onclick="loadRegister('{{Crypt::encrypt('61')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(62))  <span class="out">62</span> @else
                                  <input type="button" value="62" name="carpa" onclick="loadRegister('{{Crypt::encrypt('62')}}')">
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(63))  <span class="out">63</span> @else
                                  <input type="button" value="63" name="carpa" onclick="loadRegister('{{Crypt::encrypt('63')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(64))  <span class="out">64</span> @else
                                  <input type="button" value="64" name="carpa" onclick="loadRegister('{{Crypt::encrypt('64')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(65))  <span class="out">65</span> @else
                                  <input type="button" value="65" name="carpa" onclick="loadRegister('{{Crypt::encrypt('65')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(66))  <span class="out">66</span> @else
                                  <input type="button" value="66" name="carpa" onclick="loadRegister('{{Crypt::encrypt('66')}}')">
                                  @endif
                                </th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th>
                                  @if($c->getStatus(67))  <span class="out">67</span> @else
                                  <input type="button" value="67" name="carpa" onclick="loadRegister('{{Crypt::encrypt('67')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(68))  <span class="out">68</span> @else
                                  <input type="button" value="68" name="carpa" onclick="loadRegister('{{Crypt::encrypt('68')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(69))  <span class="out">69</span> @else
                                  <input type="button" value="69" name="carpa" onclick="loadRegister('{{Crypt::encrypt('69')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(70))  <span class="out">70</span> @else
                                  <input type="button" value="70" name="carpa" onclick="loadRegister('{{Crypt::encrypt('70')}}')">
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(71))  <span class="out">71</span> @else
                                  <input type="button" value="71" name="carpa" onclick="loadRegister('{{Crypt::encrypt('71')}}')">
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(72))  <span class="out">72</span> @else
                                  <input type="button" value="72" name="carpa" onclick="loadRegister('{{Crypt::encrypt('72')}}')">
                                  @endif
                                </th>
                              </tr>
                            </table>
                          </div>
                        </div>
                    </div><!--row-->
                  @else
                    <div class="row">
                      <p class="text-info">Hola {{$user->name}}! Tus cupos han sido seleccionado correctamente, podras identificarlos en el mapa de la siguiente manera <span class="cupo_select">#</span></p>
                      <div style="background-image: url('http://regionmojana.com/montaje.jpg')">
                          <div>
                          <table>
                            <tr>
                              <th>
                                @if($c->getStatus(1))  <span class="out-enable">1</span> @else
                                <span class="in">1</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(2))  <span class="out-enable">2</span> @else
                                <span class="in">2</span>
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(3))  <span class="out-enable">3</span> @else
                                <span class="in">3</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(4))  <span class="out-enable">4</span> @else
                                <span class="in">4</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(5))  <span class="out-enable">5</span> @else
                                <span class="in">5</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(6))<span class="out-enable">6</span> @else
                                <span class="in">6</span>
                                @endif
                              </th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>

                              <th>
                                @if($c->getStatus(7))  <span class="out-enable">7</span> @else
                                <span class="in">7</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(8))  <span class="out-enable">8</span> @else
                                <span class="in">8</span>
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(9))  <span class="out-enable">9</span> @else
                                <span class="in">9</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(10))  <span class="out-enable">10</span> @else
                                <span class="in">10</span>
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(11))  <span class="out-enable">11</span> @else
                                <span class="in">11</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(12))  <span class="out-enable">12</span> @else
                                <span class="in">12</span>
                                @endif
                              </th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>

                              <th>
                                @if($c->getStatus(13))  <span class="out-enable">13</span> @else
                                <span class="in">13</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(14))  <span class="out-enable">14</span> @else
                                <span class="in">14</span>
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(15))  <span class="out-enable">15</span> @else
                                <span class="in">15</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(16))  <span class="out-enable">16</span> @else
                                <span class="in">16</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(17))  <span class="out-enable">17</span> @else
                                <span class="in">17</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(18))  <span class="out-enable">18</span> @else
                                <span class="in">18</span>
                                @endif
                              </th>
                            </tr>
                            <tr>
                              <td colspan="24" class="image"></td>
                            </tr>
                            <tr>
                              <th>
                                @if($c->getStatus(19))  <span class="out-enable">19</span> @else
                                <span class="in">19</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(20))  <span class="out-enable">20</span> @else
                                <span class="in">20</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(21))  <span class="out-enable">21</span> @else
                                <span class="in">21</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(22))  <span class="out-enable">22</span> @else
                                <span class="in">22</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(23))  <span class="out-enable">23</span> @else
                                <span class="in">23</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(24))  <span class="out-enable">24</span> @else
                                <span class="in">24</span>
                                @endif
                              </th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>


                              <th>
                                @if($c->getStatus(25))  <span class="out-enable">25</span> @else
                                <span class="in">25</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(26))  <span class="out-enable">26</span> @else
                                <span class="in">26</span>
                                @endif
                              </th>


                              <th>
                                @if($c->getStatus(27))  <span class="out-enable">27</span> @else
                                <span class="in">27</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(28))  <span class="out-enable">28</span> @else
                                <span class="in">28</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(29))  <span class="out-enable">29</span> @else
                                <span class="in">29</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(30))  <span class="out-enable">30</span> @else
                                <span class="in">30</span>
                                @endif
                              </th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th class="no"></th>
                              <th>
                                @if($c->getStatus(31))  <span class="out-enable">31</span> @else
                                <span class="in">31</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(32))  <span class="out-enable">32</span> @else
                                <span class="in">32</span>
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(33))  <span class="out-enable">33</span> @else
                                <span class="in">33</span>
                                @endif
                              </th>

                              <th>
                                @if($c->getStatus(34))  <span class="out-enable">34</span> @else
                                <span class="in">34</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(35))  <span class="out-enable">35</span> @else
                                <span class="in">35</span>
                                @endif
                              </th>
                              <th>
                                @if($c->getStatus(36))  <span class="out-enable">36</span> @else
                                <span class="in">36</span>
                                @endif
                              </th>
                            </tr>

                          </table>
                          </div>
                          <div class="container-options">
                          {{ Html::image('img/imagen_carpas.jpg') }}
                          </div>
                          <div>
                            <table>

                              <tr>
                                <th>
                                  @if($c->getStatus(37))  <span class="out-enable">37</span> @else
                                  <span class="in">37</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(38))  <span class="out-enable">38</span> @else
                                  <span class="in">38</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(39))  <span class="out-enable">39</span> @else
                                  <span class="in">49</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(40))  <span class="out-enable">40</span> @else
                                  <span class="in">40</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(41))  <span class="out-enable">41</span> @else
                                  <span class="in">41</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(42))  <span class="out-enable">42</span> @else
                                  <span class="in">42</span>
                                  @endif
                                </th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th>
                                  @if($c->getStatus(43))  <span class="out-enable">43</span> @else
                                  <span class="in">43</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(44))  <span class="out-enable">44</span> @else
                                  <span class="in">44</span>
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(45))  <span class="out-enable">45</span> @else
                                  <span class="in">45</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(46))  <span class="out-enable">46</span> @else
                                  <span class="in">46</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(47))  <span class="out-enable">47</span> @else
                                  <span class="in">47</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(48))  <span class="out-enable">48</span> @else
                                  <span class="in">48</span>
                                  @endif
                                </th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th>
                                  @if($c->getStatus(49))  <span class="out-enable">49</span> @else
                                  <span class="in">49</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(50))  <span class="out-enable">50</span> @else
                                  <span class="in">50</span>
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(51))  <span class="out-enable">51</span> @else
                                  <span class="in">51</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(52))  <span class="out-enable">52</span> @else
                                  <span class="in">52</span>
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(53))  <span class="out-enable">53</span> @else
                                  <span class="in">53</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(54))  <span class="out-enable">54</span> @else
                                  <span class="in">54</span>
                                  @endif
                                </th>

                              </tr>
                              <tr>
                                <td colspan="24" class="image"></td>
                              </tr>
                              <tr>
                                <th>
                                  @if($c->getStatus(55))  <span class="out-enable">55</span> @else
                                  <span class="in">55</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(56))  <span class="out-enable">56</span> @else
                                  <span class="in">56</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(57))  <span class="out-enable">57</span> @else
                                  <span class="in">57</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(58))  <span class="out-enable">58</span> @else
                                  <span class="in">58</span>
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(59))  <span class="out-enable">59</span> @else
                                  <span class="in">59</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(60))  <span class="out-enable">60</span> @else
                                  <span class="in">60</span>
                                  @endif
                                </th>

                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>

                                <th>
                                  @if($c->getStatus(61))  <span class="out-enable">61</span> @else
                                  <span class="in">61</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(62))  <span class="out-enable">62</span> @else
                                  <span class="in">62</span>
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(63))  <span class="out-enable">63</span> @else
                                  <span class="in">63</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(64))  <span class="out-enable">64</span> @else
                                  <span class="in">64</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(65))  <span class="out-enable">65</span> @else
                                  <span class="in">65</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(66))  <span class="out-enable">66</span> @else
                                  <span class="in">66</span>
                                  @endif
                                </th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th class="no"></th>
                                <th>
                                  @if($c->getStatus(67))  <span class="out-enable">67</span> @else
                                  <span class="in">67</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(68))  <span class="out-enable">68</span> @else
                                  <span class="in">68</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(69))  <span class="out-enable">69</span> @else
                                  <span class="in">69</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(70))  <span class="out-enable">70</span> @else
                                  <span class="in">70</span>
                                  @endif
                                </th>

                                <th>
                                  @if($c->getStatus(71))  <span class="out-enable">71</span> @else
                                  <span class="in">71</span>
                                  @endif
                                </th>
                                <th>
                                  @if($c->getStatus(72))  <span class="out-enable">72</span> @else
                                  <span class="in">72</span>
                                  @endif
                                </th>
                              </tr>
                            </table>
                          </div>
                        </div>
                    </div>
                  @endif
                </div><!--panel body-->
                @else
                <div class="panel-body">
                  <input type="hidden" name="dateValue" id="dateValue" value="{{$user->dateTime}}"/>
                  <div id="getting-started"></div>


                </div>
                @endif
            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
<a href="#" data-fancybox data-src="#seleccionar" href="javascript:;" style="display:none;" id="seleccionar_carpa"></a>

<div style="display: none;" id="seleccionar" style="width: 500px;">
      <form role="form" action="" enctype="multipart/form-data" method="POST" id="condiciones_form">
        {!! csrf_field() !!}
        <input type="hidden" name="carpa" id="carpa" value="" />
          <h2><center>Registrar Carpa</center></h2>
        <h4 class="name-usuario"></h4>
        <div class="row">
  				<div class="col-md-12">
            <p>Para registrar la carpa debe completar el siguiente formulario, estos campos son obligatorios y estan contemplados en los terminos y condiciones.</p>
  				</div>
        </div>
        <div class="row">
  				<div class="col-md-12 form-group">
            <label>Tipo Organizacion</label>
            <select name="tipo_organizacion" class="input-form">
              <option value="-1">Seleccione una opcion</option>
              <option value="Razon Social">Razón social </option>
              <option value="Persona Natural">Persona natural</option>
            </select>
  				</div>
          <div class="col-md-12 form-group">
            <label>NIT</label>
            <input type="text" name="nit" id="nit" value="" class="input-form" autocomplete="off"/>
  				</div>
          <div class="col-md-12 form-group">
            <label>Nombre Marca</label>
            <input type="text" name="nombre_marca" id="nombre_marca" value="" class="input-form" />
  				</div>
          <div class="col-md-12 form-group">
            <label>Representante Legal</label>
            <input type="text" name="representante_legal" id="representante_legal" value="" class="input-form" />
  				</div>
          <div class="col-md-12 form-group">
            <label>Cedula</label>
            <input type="text" name="cedula" id="cedula" value="" class="input-form" />
  				</div>
          <div class="col-md-12 form-group">
            <label>Direccion</label>
            <input type="text" name="direccion" id="direccion" value="" class="input-form" />
  				</div>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
      </form>
</div>





@endsection
