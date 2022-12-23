<nav id="sidebarMenu" class="collapse d-lg-block sidebar bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="{{ route('admin.home') }}" class="{{ (request()->is('admin/home')) ? 'active' : '' }} list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
            </a>
            <a href="{{ route('products.index') }}" class="{{ (request()->is('products*')) ? 'active' : '' }} list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-area fa-fw me-3"></i><span>Products</span>
            </a>
            <a href="{{ route('orders.index') }}" class="{{ (request()->is('orders*')) ? 'active' : '' }} list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3" ></i><span>Orders</span>
            </a>
            <a href="{{ route('users.index') }}" class="{{ (request()->is('users*')) ? 'active' : '' }} list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-users fa-fw me-3"></i><span>Users</span>
            </a>
        </div>
    </div>
</nav>