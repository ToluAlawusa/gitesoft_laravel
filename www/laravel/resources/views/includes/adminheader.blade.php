<section>
    <div class="mast" style="margin-bottom: 154px;">
        <h1>T<span>SSB</span></h1>
        <nav>
            <ul class="clearfix">
            
                @if(Session::has('admin_id'))
                <li><a href="{{ route('addcategory') }}" class="selected">add Category</a></li>
                <li><a href="{{ route('viewcategory') }}" class="selected">view Category</a></li>
                <li><a href="{{ route('addproduct') }}" class="selected">add Products</a></li>
                <li><a href="{{ route('viewproduct') }}" class="selected">view Products</a></li>
                <li><a href="{{ route('adminlogout') }}" class="selected">Logout</a></li>
                @endif
               
               
            </ul>
        </nav>
    </div>
</section>
