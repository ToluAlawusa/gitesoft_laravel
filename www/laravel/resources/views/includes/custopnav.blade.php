<div class="top-bar">
  <div class="top-nav">
    <a href="/index"><h3 class="brand"><span>G</span>itesoft<span>C</span>inemas</h3></a>
      <ul class="top-nav-list">
        <li class="top-nav-listItem cart"><a href="/films">Films</a></li>
        <li class="top-nav-listItem cart" style="background-color: white"><a href="/films-create">CREATE FILM</a></li>

       
        @if(Session::has('user_id'))
        
        <li class="top-nav-listItem cart"> Hi <span style="color:red; font-family: verdana">{{ Session::get('name') }}</span></li>
        <li class="top-nav-listItem cart"><a href="/logout">Logout</a></li> 

      
        @else
        <li class="top-nav-listItem cart"><a href="/login">Login</a></li>
        <li class="top-nav-listItem cart"><a href="/registration">Register</a></li>
        @endif

      </ul>
    <form class="search-brainfood">
      <input type="text" class="text-field" placeholder="Search all Movies">
    </form>
  </div>
</div>
