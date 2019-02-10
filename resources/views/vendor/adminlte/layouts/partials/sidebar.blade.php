<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image" width="15" height="15">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->

        <form action="{{url('/searchUser')}}" method="post" class="sidebar-form">
          {{csrf_field()}}
          <label>Busqueda de Usuarios</label>
            <div class="input-group">
                  <input type="text" name="username" class="form-control" placeholder="Digite Username...">
                  <span class="input-group-btn">
                  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search" style="color:#efb312;"></i></button>
                  </span>
             </div>
        </form>
        <!-- /.search form -->
        <label style="display:none;">{{$me = Auth::user()->username}}</label>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">FUNCIONALIDADES</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{url('/showposts') }}"><i class='fa fa-list-alt' style="color:#00ba66;"></i> <span>Ultimos Post's</span></a></li>
            <li><a href="{{url('/edit-post')}}"><i class='fa fa-edit' style="color:#00ba66;"></i> <span>Crear Post's</span></a></li>
            <li><a href="{{url('/home/'.$me)}}"><i class='fa fa-folder-open-o' style="color:#00ba66;"></i> <span>Mis Post's</span></a></li>
            <li><a href="{{url('/home/'.$me.'/graphs')}}"><i class='fa fa-bar-chart-o' style="color:#00ba66;"></i> <span>Gráficos</span></a></li>
            <li><a href="{{url('/datatable')}}"><i class='fa fa-table' style="color:#00ba66;"></i> <span>DataTables</span></a></li>
            <li><a href="{{url('/apijson')}}"><i class='fa fa-code' style="color:#00ba66;"></i> <span>API JSON</span></a></li>
            <li><a href="{{url('/documents')}}"><i class='fa fa-link' style="color:#00ba66;"></i> <span>Documentación</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
