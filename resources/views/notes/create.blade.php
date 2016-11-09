<form class="navbar-form navbar-left" method="POST" action="/createNote">
  {{csrf_field()}}

       <div class="form-group">
         <input type="text" class="form-control" placeholder="Create Note">
       </div>
       <button type="submit" class="btn btn-default">Submit</button>
     </form>
