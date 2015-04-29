<nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{{ action ('HomeController@showWelcome') }}}">Mike Villarreal</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{{ action ('HomeController@showResume') }}}">Resume</a></li>
        <li><a href="{{{ action ('HomeController@showPorfolio') }}}">Porfolio</a></li>
        <li><a href="{{{ action ('HomeController@showContact') }}}">Contact me</a></li>
      </ul>
    </div>
  </div>
</nav>
