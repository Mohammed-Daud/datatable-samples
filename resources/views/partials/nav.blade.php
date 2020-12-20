<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Datatable Demos</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        
        
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Demos <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/') }}">Simple Datatable</a></li>
                    <li><a href="{{ url('individual-column-searching') }}">Individual column searching (text inputs)</a></li>
                    <li>
                        <a href="{{ url('hide-default-search-input-and-addind-custom-search-box') }}">
                            Hide Default Search Input and add custom search box
                        </a>
                    </li>
                    
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
