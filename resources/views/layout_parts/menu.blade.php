<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Hillel Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/products">Товары</a></li>
                <li><a href="/products/new">Добавить товар</a></li>
                <li><a href="/orders">Заказы</a></li>
                <li><a href="/orders/new">Добавить заказ</a></li>
                <li><a href="/pages">Pages</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @foreach($pages as $page)
                    <li><a href="/{{$page->alias}}">{{$page->title}}</a></li>
                @endforeach
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
