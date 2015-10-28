<?php
return "
 <nav class='navbar navbar-default'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='#'>ATTI AMMINISTRATIVI</a>
    </div>
    <div>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='./'>Home</a></li>
        <li><a href='?mask=determine&amp;do=' title='Elenco determine'>Determine</a></li>
        <li><a href='./?mask=impegni' title='Elenco impegni'>Impegni</a></li>
        <li><a href='./?mask=cig' title='Elenco CIG'>Elenco CIG</a></li>
         
<li class='dropdown'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>User
          <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='?mask=user&amp;do=newUser'>New User</a></li>
            <li><a href='#'>altro</a></li>
          </ul>
        </li>       
      </ul>
       <ul class='nav pull-right'>
              		
                  <li class='divider-vertical'></li>
                   <li>
                    <form method='post' >
                        <input type='submit' value='logout' name='logout' />
                    </form>
                   </li>                
              </ul>
    </div>
  </div>
</nav>

	
";



