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
