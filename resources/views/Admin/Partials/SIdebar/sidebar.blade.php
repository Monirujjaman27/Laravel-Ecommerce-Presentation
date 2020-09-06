
<ul  id="draggableMultiple" class="pcoded-item pcoded-left-item" >
    <li class="pcoded-hasmenu {{request()->is('dashboard', 'brand/*','category/*','product/*' ) ? 'pcoded-trigger active': ''}} sortable-moves">
        <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-home"></i><b>A</b></span>
            <span class="pcoded-mtext">Dashboard</span>
            <span class="pcoded-mcaret"></span>
        </a>

        <ul  id="draggableMultiple" class="pcoded-submenu">
            <li class="pcoded-hasmenu {{ request()->is('brand/*') ? 'pcoded-trigger active ':'' }} sortable-moves">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext">Brand</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu" id="draggableMultiple">
                    <li class="{{ request()->is('brand/add-brand') ? 'pcoded-trigger active ':'' }} sortable-moves" style="box-shadow: none;">
                        <a href="{{route('add-brand')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Add New Brand</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{request()->is('brand/manage-brand') ? 'pcoded-trigger active': ''}} sortable-moves" style="box-shadow: none;">
                        <a href="{{route('manage-brand')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Manage Brand</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Brand End -->
            <!-- Category start -->
            <li class="pcoded-hasmenu {{ request()->is('category/*') ? 'pcoded-trigger active ':'' }} sortable-moves">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext">Category</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    
                    <li class="{{request()->is('category/manage-category', 'category/manage-category/*') ? 'pcoded-trigger active': ''}}" style="box-shadow: none;">
                        <a href="{{route('manage_category')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Manage Category</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li> <!-- Category  end-->

            <!-- Product start -->
            <li class="pcoded-hasmenu {{ request()->is('product/*') ? 'pcoded-trigger active ':'' }} sortable-moves">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext">Product</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ request()->is('product/add_product') ? 'pcoded-trigger active ':'' }}" style="box-shadow: none;">
                        <a href="{{route('add_product')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Add New Product</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{request()->is('product/manage_product', 'product/manage-product/*') ? 'pcoded-trigger active': ''}}" style="box-shadow: none;">
                        <a href="{{route('manage_product')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Manage Product</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li> <!-- Product  end-->

            <!-- user start -->
            <li class="pcoded-hasmenu {{ request()->is('user/*') ? 'pcoded-trigger active ':'' }} sortable-moves">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext">User</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ request()->is('user/new-user') ? 'pcoded-trigger active ':'' }}" style="box-shadow: none;">
                        <a href="{{route('showregistrationForm')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Add New User</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    
                </ul>
            </li> <!-- user  end-->

        </ul>
    </li>
</ul>
