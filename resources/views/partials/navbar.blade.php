<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/todos">Todos</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a class="btn btn-danger btn-sm" href="{{ route('logout') }}">Logout</a>
      </span>
    </div>
  </div>
</nav>