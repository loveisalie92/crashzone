<header>
    <div class="header">
        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/img/crashzone_logo_alpha.jpg') }}" alt=""></a>
        </div>

        <div class="top-right-nav">
            <div class="nav">
                <ul>
                    <li>Email |</li>
                    <li><a href="#">Forum</a> |</li>
                    <li><a href="#">Reprorting</a> |</li>
                    <li><a href="#">Timer Reporting</a> |</li>
                    <li><a href="#">Time Report</a> |</li>
                    <li><a href="#">Supplier</a> |</li>
                    <li><a href="#">Choice List</a> |</li>
                    <li><a href="#">Contact Us</a> |</li>
                    <li><a href="#">Support</a> |</li>
                    <li><a href="#">Help</a> |</li>
                    <li><a href="#">Setting</a> |</li>
                    <li><a href="#">Signout</a></li>
                </ul>
            </div>

            <div class="search-bar">
                    <input type="text" name="search" id="input" value="">
                    <button type="submit" class="func-button btn btn-warning">Search</button>
            </div>
        </div>

        <div class="loading" style="display:none">
            <img src="{{ asset('assets/img/loading.gif') }}" alt="" width="80px" height="60px">
        </div>
    </div>
</header>
