@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.access.users.management'))

@section('after-styles')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
    {{ Html::style("css/backend/style.css") }}
@endsection

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.users.management') }}
        <small>{{ trans('labels.backend.access.users.active') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.users.active') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.access.includes.partials.user-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.access.users.table.id') }}</th>
                            <th>{{ trans('labels.backend.access.users.table.name') }}</th>
                            <th>Marca</th>
                            <th>{{ trans('labels.backend.access.users.table.email') }}</th>
                            <th>Clave</th>
                            <th>Telefono</th>
                            <th>Carpa</th>
                            <th>Email</th>
                            <!--<th>{{ trans('labels.general.actions') }}</th>-->
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i = 0; ?>
                      @foreach($usuarios as $user)
                      <?php $i++; ?>
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->brand}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password_decode}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                          <?php
                            $userId = $user->id;
                            $carpa = $c->getCarpa($userId);
                            echo $carpa;
                          ?>
                        </td>
                        <td><a href="#" data-fancybox data-src="#email" href="javascript:;" onclick="enviarEmail({{$user->id}})">Enviar Email</a></td>
                        <!--<td>Opciones</td>-->

                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div><!--table-responsive-->


            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ubicaciones Actuales</div>
                        <div class="panel-body">
                          <div class="row">
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
                                    <th class="no"></th>
                                    <th class="no"></th>
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
                                    <th class="no"></th>
                                    <th class="no"></th>
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
                                    <th class="no"></th>
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
                                    <th class="no"></th>
                                    <th class="no"></th>
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
                                  </tr>
                                  <tr>
                                    <td colspan="24" class="image"></td>
                                  </tr>
                                  <tr>
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
                                    <th class="no"></th>
                                    <th class="no"></th>

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
                                    <th class="no"></th>

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
                                    <th class="no"></th>
                                    <th class="no"></th>
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
                                  </tr>
                                  <tr>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th>
                                      @if($c->getStatus(35))  <span class="out">35</span> @else
                                      <input type="button" value="35" name="carpa" onclick="loadRegister('{{Crypt::encrypt('35')}}')">
                                      @endif
                                    </th>
                                    <th colspan="14" class="no"></th>
                                    <th>
                                      @if($c->getStatus(36))  <span class="out">36</span> @else
                                      <input type="button" value="36" name="carpa" onclick="loadRegister('{{Crypt::encrypt('36')}}')">
                                      @endif
                                    </th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                  </tr>
                                  <tr>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th>
                                      @if($c->getStatus(37))  <span class="out">37</span> @else
                                      <input type="button" value="37" name="carpa" onclick="loadRegister('{{Crypt::encrypt('37')}}')">
                                      @endif
                                    </th>
                                    <th colspan="14" class="no"></th>
                                    <th>
                                      @if($c->getStatus(38))  <span class="out">38</span> @else
                                      <input type="button" value="38" name="carpa" onclick="loadRegister('{{Crypt::encrypt('38')}}')">
                                      @endif
                                    </th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                    <th class="no"></th>
                                  </tr>
                                </table>
                                </div>
                                <div class="container-options">
                                {{ Html::image('img/imagen_carpas.jpg') }}
                                </div>
                                <div>
                                  <table>
                                      <tr>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th>
                                        @if($c->getStatus(39))  <span class="out">39</span> @else
                                        <input type="button" value="39" name="carpa" onclick="loadRegister('{{Crypt::encrypt('39')}}')">
                                        @endif
                                      </th>
                                      <th colspan="14" class="no"></th>
                                      <th>
                                        @if($c->getStatus(40))  <span class="out">40</span> @else
                                        <input type="button" value="40" name="carpa" onclick="loadRegister('{{Crypt::encrypt('40')}}')">
                                        @endif
                                      </th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                    </tr>
                                    <tr>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th>
                                        @if($c->getStatus(41))  <span class="out">41</span> @else
                                        <input type="button" value="41" name="carpa" onclick="loadRegister('{{Crypt::encrypt('41')}}')">
                                        @endif
                                      </th>
                                      <th colspan="14" class="no"></th>
                                      <th>
                                        @if($c->getStatus(42))  <span class="out">42</span> @else
                                        <input type="button" value="42" name="carpa" onclick="loadRegister('{{Crypt::encrypt('42')}}')">
                                        @endif
                                      </th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                    </tr>
                                    <tr>
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
                                      <th class="no"></th>
                                      <th class="no"></th>
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
                                      <th class="no"></th>
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
                                      <th class="no"></th>
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
                                      <th class="no"></th>
                                      <th class="no"></th>
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
                                    </tr>
                                    <tr>
                                      <td colspan="24" class="image"></td>
                                    </tr>
                                    <tr>
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
                                      <th class="no"></th>
                                      <th class="no"></th>
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
                                      <th class="no"></th>
                                      <th class="no"></th>
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
                                      <th>
                                        @if($c->getStatus(73))  <span class="out">73</span> @else
                                        <input type="button" value="73" name="carpa" onclick="loadRegister('{{Crypt::encrypt('73')}}')">
                                        @endif
                                      </th>
                                      <th>
                                        @if($c->getStatus(74))  <span class="out">74</span> @else
                                        <input type="button" value="74" name="carpa" onclick="loadRegister('{{Crypt::encrypt('74')}}')">
                                        @endif
                                      </th>
                                      <th class="no"></th>
                                      <th class="no"></th>
                                      <th>
                                        @if($c->getStatus(75))  <span class="out">75</span> @else
                                        <input type="button" value="75" name="carpa" onclick="loadRegister('{{Crypt::encrypt('75')}}')">
                                        @endif
                                      </th>
                                      <th>
                                        @if($c->getStatus(76))  <span class="out">76</span> @else
                                        <input type="button" value="76" name="carpa" onclick="loadRegister('{{Crypt::encrypt('76')}}')">
                                        @endif
                                      </th>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                          </div><!--row-->

                        </div><!--panel body-->

                    </div><!-- panel -->

                </div><!-- col-md-10 -->

            </div>



            <a href="#" data-fancybox data-src="#seleccionar" href="javascript:;" style="display:none;" id="seleccionar_carpa"></a>
            <div style="display: none;" id="seleccionar">
              <form role="form" action="user/register" enctype="multipart/form-data" method="POST" id="condiciones_form">
                {!! csrf_field() !!}
                <input type="hidden" name="carpa" id="carpa" value="" />

              <h2><center>Asignar Carpa</center></h2>
              <h4 class="name-usuario"></h4>
              <div class="row">
                <div class="col-md-12">
                  <p>Complete el siguiente formulario para realizar la asignacion de la carpa</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label>Seleccione Un usuario</label>
                  <select name="usuario" class="input-form">
                    <option value="">Seleccione un usuario</option>
                    @foreach($usuariosSinAsignar as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                    @endforeach
                  </select>
        				</div>

                <div class="col-md-12 form-group">
                  <label>Tipo Organizacion</label>
                  <select name="tipo_organizacion" class="input-form">
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
                <button type="submit" class="btn btn-success">Guardar</button>
              </div>
              </form>
            </div>

            <div style="display: none;" id="email" style="width: 500px;">
                  <form role="form" action="email" enctype="multipart/form-data" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="usuario_email" id="usuario_email" value="" />
                      <h2><center>Enviar Email</center></h2>
                    <h4 class="name-usuario"></h4>
                    <div class="row">
              				<div class="col-md-12">
                        <p>Enviar usuario y clave para la seleccion de la carpa.</p>
              				</div>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar Email</button>
                  </form>
            </div>

        </div><!-- /.box-body -->
    </div><!--box-->


@endsection

@section('after-scripts')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

<!--<script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.access.user.get") }}',
                    type: 'post',
                    data: {status: 1, trashed: false}
                },
                columns: [
                    {data: 'id', name: '{{config('access.users_table')}}.id'},
                    {data: 'name', name: '{{config('access.users_table')}}.name'},
                    {data: 'brand', name: '{{config('access.users_table')}}.brand'},
                    {data: 'phone', name: '{{config('access.users_table')}}.phone'},
                    {data: 'email', name: '{{config('access.users_table')}}.email'},
                    {data: 'confirmed', name: '{{config('access.users_table')}}.confirmed'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>-->
@endsection
