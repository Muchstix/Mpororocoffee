<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            @can("is_admin")
            <a class="nav-link" href="/home">
                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link" href="/transaction">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-fw fa-briefcase"></i></div>
                Capital
            </a></li>
            <ul class="lev2">
              <li><a href="#">sub cat 1</a></li>
              <li><a href="#">sub cat 2</a></li>
            </ul>
            <li>
	    <a class="nav-link" href="/home/customers> 
                <div class="sb-nav-link-icon"><i class="fa-solid fa-regular fa-address-book"></i></div>
                Farmers
            </a></li>
            <ul class="lev2">
              <li><a href="#">sub cat 1</a></li>
              <li><a href="#">sub cat 2</a></li>
            </ul>
            <li>
	    <a class="nav-link" href="/Purchase"> 
                <div class="sb-nav-link-icon"><i class="fa-solid fa-square-pen"></i></div>
                Purchase
            </a></li>
            <ul class="lev2">
              <li><a href="#">sub cat 1</a></li>
              <li><a href="#">sub cat 2</a></li>
            </ul>
            <li>
	    <a class="nav-link" href="/Purchase Records"> 
                <div class="sb-nav-link-icon"><i class="fa-solid fa-square-poll-horizontal"></i></div>
                Purchase Records
            </a>
	    <a class="nav-link" href="/Advance"> 
                <div class="sb-nav-link-icon"><i class="fa-solid fa-scale-balanced"></i></div>
                Advance
            </a></li>
            <ul class="lev2">
              <li><a href="#">sub cat 1</a></li>
              <li><a href="#">sub cat 2</a></li>
            </ul>
            <li>
	    <a class="nav-link" href="/Petty Cash">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-wallet"></i></div>
                Petty Cash
            </a>
	    <a class="nav-link" href="/Stock"> 
                <div class="sb-nav-link-icon"><i class="fa-solid fa-vault"></i></div>
                Stock
            </a></li>
            <ul class="lev2">
              <li><a href="#">sub cat 1</a></li>
              <li><a href="#">sub cat 2</a></li>
            </ul>
            <li>
	    <a class="nav-link" href="/Reports"> 
                <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-pie"></i></div>
                Reports
            </a></li>
            <ul class="lev2">
              <li><a href="#">sub cat 1</a></li>
              <li><a href="#">sub cat 2</a></li>
            </ul>
            <li>
	    <a class="nav-link" href="/Branches">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-landmark"></i></div>
                Branches
            </a></li>
            <ul class="lev2">
              <li><a href="#">sub cat 1</a></li>
              <li><a href="#">sub cat 2</a></li>
            </ul>
            <li>
	    <a class="nav-link" href="/Users">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-address-book"></i></div>
                Users
            </a></li>
            <ul class="lev2">
              <li><a href="#">sub cat 1</a></li>
              <li><a href="#">sub cat 2</a></li>
            </ul>
            <li>
	    <a class="nav-link" href="/Setting">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                Setting
            </a></li>
            <ul class="lev2">
              <li><a href="#">sub cat 1</a></li>
              <li><a href="#">sub cat 2</a></li>
            </ul>
            <li>
            @else
            <div class="sb-sidenav-menu-heading">Customer</div>
            <a class="nav-link" href="/home">
                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-home-alt"></i></i></div>
                Home
            </a>
            <a class="nav-link" href="/point/user_point">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-fw fa-paw"></i></div>
                My Point
            </a>
            @endcan

            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link" href="/product">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-fw fa-dumpster"></i></div>
                Product
            </a>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-columns"></i></div>
                Order
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-fw fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="/order/order_data">Order Data</a>
                    <a class="nav-link" href="/order/order_history">Order History</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Currently logged in as:</div>
        {{ auth()->user()->role->role_name }}
    </div>
</nav>

li + .lev2 {
    display: none;
  }
  
  li:focus-within + .lev2 {
    display: block;
  }