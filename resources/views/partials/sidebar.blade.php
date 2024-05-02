<!-- Sidebar menu starts -->
<div class="sidebarMenuScroll" style="background-color: black">
    <ul class="sidebar-menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="icon-home"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('costumers') }}">
                <span class="icon-user"></span>
                <span class="menu-text">Data Costumers</span>
            </a>
        </li>
        <li>
            <a href="{{ route('basics') }}">
                <i class="icon-book-open"></i>
                <span class="menu-text">Category Basic</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#!">
                <i class="icon-package"></i>
                <span class="menu-text">Manage Guide</span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('preweddings') }}">PreWedding</a>
                </li>
                <li>
                    <a href="{{ route('weddings') }}">Wedding</a>
                </li>
                <li>
                    <a href="{{ route('engagements') }}">Engagement</a>
                </li>
                <li>
                    <a href="{{ route('aqiqahs') }}">Aqiqah</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#!">
                <i class="icon-book"></i>
                <span class="menu-text">Manage Graduation</span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('personals') }}">Personal Photo</a>
                </li>
                <li>
                    <a href="{{ route('groups') }}">Group Photo</a>
                </li>
                <li>
                    <a href="{{ route('famillys') }}">Family Photo</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#!">
                <i class="icon-shopping-cart"></i>
                <span class="menu-text">Manage Transaction</span>
            </a>
            <ul class="treeview-menu">
                <!-- Prewedding Section -->
                <li class="treeview">
                    <a href="#!">
                        <span class="menu-text">Prewedding</span>
                    </a>
                    <!-- Prewedding Sub-menu -->
                    <ul class="treeview-menu">
                        <li><a href="{{ route('index_dp_prewedding') }}">DP</a></li> <!-- Deposit Payment -->
                        <li><a href="{{ route('index_payment_prewedding') }}">Fullpayment</a></li> <!-- Full Payment -->
                    </ul>
                </li>
        
                <!-- Other Sections -->
                <li class="treeview">
                    <a href="#!">
                        <span class="menu-text">Wedding</span>
                    </a>
                    <!-- Prewedding Sub-menu -->
                    <ul class="treeview-menu">
                        <li><a href="{{ route('index_dp_wedding') }}">DP</a></li> <!-- Deposit Payment -->
                        <li><a href="{{ route('index_payment_wedding') }}">Fullpayment</a></li> <!-- Full Payment -->
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#!">
                        <span class="menu-text">Engagement</span>
                    </a>
                    <!-- Prewedding Sub-menu -->
                    <ul class="treeview-menu">
                        <li><a href="{{ route('dp_engagement') }}">DP</a></li> <!-- Deposit Payment -->
                        <li><a href="{{ route('payment_engagement') }}">Fullpayment</a></li> <!-- Full Payment -->
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#!">
                        <span class="menu-text">Aqiqah</span>
                    </a>
                    <!-- Prewedding Sub-menu -->
                    <ul class="treeview-menu">
                        <li><a href="{{ route('dp_aqiqah') }}">DP</a></li> <!-- Deposit Payment -->
                        <li><a href="{{ route('payment_aqiqah') }}">Fullpayment</a></li> <!-- Full Payment -->
                    </ul>
                </li>
                <li>
                    <a href="{{ route('famillys') }}">Personal Photo</a>
                </li>
                <li>
                    <a href="{{ route('famillys') }}">Group Photo</a>
                </li>
                <li>
                    <a href="{{ route('famillys') }}">Familly Photo</a>
                </li>
            </ul>
        </li>
        
        <li class="treeview">
            <a href="#!">
                <i class="icon-map"></i>
                <span class="menu-text">Report</span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="apex.html">Costumers</a>
                </li>
                <li>
                    <a href="morris.html">Transactions</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- Sidebar menu ends -->