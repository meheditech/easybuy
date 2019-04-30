<!--Developed By Mehedi-->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $user->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="">
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-red">Cool</small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cart-plus"></i> <span>Product</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('products.index') }}"><i class="fa fa-list"></i>Product List</a></li>
                    <li><a href="{{ route('products.create') }}"><i class="fa fa-plus"></i>Product Create</a></li>
                    <li><a href="{{ route('products.index') }}"><i class="fa fa-edit"></i>Product Edit</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar-o"></i> <span>Category</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('categories.index') }}"><i class="fa fa-list"></i>Category List</a></li>
                    <li><a href="{{ route('categories.create') }}"><i class="fa fa-plus"></i>Category Create</a></li>
                    <li><a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i>Category Edit</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-sliders"></i> <span>Slider</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('slider.index') }}"><i class="fa fa-list"></i>Slider List</a></li>
                    <li><a href="{{ route('slider.create') }}"><i class="fa fa-plus"></i>Slider Create</a></li>
                    <li><a href="{{ route('slider.index') }}"><i class="fa fa-edit"></i>Slider Edit</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bars"></i> <span>Navbar</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('navbars.index') }}"><i class="fa fa-list"></i>Navbar List</a></li>
                    <li><a href="{{ route('navbars.create') }}"><i class="fa fa-plus"></i>Navbar Create</a></li>
                    <li><a href="{{ route('navbars.index') }}"><i class="fa fa-edit"></i>Navbar Edit</a></li>
                </ul>
            </li>
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-files-o"></i>--}}
                    {{--<span>Layout Options</span>--}}
                    {{--<span class="pull-right-container">--}}
                      {{--<span class="label label-primary pull-right">4</span>--}}
                    {{--</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            @can('Show')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-trash"></i> <span>Trash List</span>
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('trash/product') }}"><i class="fa fa-list-alt"></i>Product Trash List</a></li>
                        <li><a href="{{ route('deletes.category') }}"><i class="fa fa-list-alt"></i>Category Trash List</a></li>
                        <li><a href="{{ route('trash.slider') }}"><i class="fa fa-list-alt"></i>Slider Trash List</a></li>
                    </ul>
                </li>
            @endcan
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>