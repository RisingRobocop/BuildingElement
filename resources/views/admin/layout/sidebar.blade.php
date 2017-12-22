<div class="sidebar" data-color="black">

<!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

-->

  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{url('/')}}" class="simple-text">
                BuildingElement
            </a>
        </div>

        <ul class="nav">

            <li class= '@if (url()->current()==url('admin/nations'))active @endif'>
                <a href="{{url('admin/nations')}}">
                    <i class="pe-7s-map"></i>
                    <p>Nations</p>
                </a>
            </li>
          <li class= '@if (url()->current()==url('admin/nations/create'))active @endif'>
                <a href="{{url('admin/nations/create')}}">
                    <i class="pe-7s-upload"></i>
                    <p>Add Nation</p>
                </a>
            </li>

        </ul>
  </div>
</div>
