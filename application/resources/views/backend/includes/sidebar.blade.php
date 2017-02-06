<style type="text/css">
  #colortreemenulihref{
      color: #000000;
    }
</style>
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      @if(Auth::user()->url_foto=="")
        <img src="{{ asset('/images/userdefault.png') }}" class="img-circle" alt="User Image">
      @else
        <img src="{{ url('images') }}/{{Auth::user()->url_foto}}" class="img-circle" alt="User Image">
      @endif
    </div>
    <div class="pull-left info">
      <p style="color:black">
        @if(Auth::user()->name=="")
          {{Auth::user()->email}}
        @else
          {{Auth::user()->name}}
        @endif
      </p>
      <a href="#" style="color:black"><i class="fa fa-circle text-success"></i>
        {{Auth::user()->email}}
      </a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li>
      <a href="{{url('backend/dashboard')}}" id="colortreemenulihref">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
   @if(Auth::user()->level=="1")
    <li class="treeview">
      <a href="#" id="colortreemenulihref">
        <i class="fa fa-star"></i>
        <span>Profile Doomels</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('admin/lihat-profile')}}"><i class="fa fa-circle-o"></i> List Data Profile</a></li>
        <li><a href="{{route('profile.kategori.lihat')}}"><i class="fa fa-circle-o"></i> Tambah Kategori Profile</a></li>
      </ul>
    </li>
    @endif
    <li class="treeview">
      <a href="#" id="colortreemenulihref">
        <i class="fa fa-black-tie"></i>
        <span>Doctor Doomels</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{route('drdoomels.lihat')}}"><i class="fa fa-circle-o"></i> List Data Dr Doomels</a></li>
        <li><a href="{{route('drdoomels.kategori.index')}}"><i class="fa fa-circle-o"></i> Tambah Kategori Dr Doomels</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#" id="colortreemenulihref">
        <i class="fa fa-newspaper-o"></i>
        <span>Artikel</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{route('news.lihat')}}"><i class="fa fa-circle-o"></i> List Data Artikel</a></li>
        <li><a href="{{route('news.kategori.index')}}"><i class="fa fa-circle-o"></i> Tambah Kategori Artikel</a></li>
      </ul>
    </li>
    <!-- <li class="treeview">
      <a href="#" id="colortreemenulihref">
        <i class="fa fa-bicycle"></i>
        <span>Traveller</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{route('traveller.lihat')}}"><i class="fa fa-circle-o"></i> List Data Traveller</a></li>
        <li><a href="{{route('traveller.kategori.index')}}"><i class="fa fa-circle-o"></i> Tambah Kategori Traveller</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#" id="colortreemenulihref">
        <i class="fa fa-camera"></i>
        <span>Hobby</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{route('hobby.lihat')}}"><i class="fa fa-circle-o"></i> List Data Hobby</a></li>
        <li><a href="{{route('hobby.kategori.index')}}"><i class="fa fa-circle-o"></i> Tambah Kategori Hobby</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#" id="colortreemenulihref">
        <i class="fa fa-odnoklassniki"></i>
        <span>Cebok (Cerita Bokap)</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li><a href="{{route('cebok.lihat')}}"><i class="fa fa-circle-o"></i> List Data Cebok</a></li>
          <li><a href="{{route('cebok.kategori.index')}}"><i class="fa fa-circle-o"></i> Tambah Kategori Cebok</a></li>
      </ul>
    </li> -->
    <li class="treeview">
      <a href="#" id="colortreemenulihref">
        <i class="fa fa-code-fork"></i>
        <span>Bagi Pengetahuan</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{route('pengetahuan.lihat')}}"><i class="fa fa-circle-o"></i> List Data Pengetahuan</a></li>
        <li><a href="{{route('pengetahuan.kategori.index')}}"><i class="fa fa-circle-o"></i> Tambah Kategori Pengetahuan</a></li>
      </ul>
    </li>
   @if(Auth::user()->level=="1")
      <li class="treeview">
        <a href="#" id="colortreemenulihref">
          <i class="fa fa-users"></i>
          <span>Manajemen Akun</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('admin/kelola-akun')}}"><i class="fa fa-circle-o"></i> Kelola Akun</a></li>
        </ul>
      </li>
    <li class="treeview">
      <a href="#" id="colortreemenulihref">
        <i class="fa fa-image"></i>
        <span>Galeri & Slider</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('admin/kelola-slider')}}"><i class="fa fa-circle-o"></i> Kelola Slider</a></li>
        <li><a href="{{url('admin/kelola-galeri')}}"><i class="fa fa-circle-o"></i> Kelola Galeri Foto</a></li>
        <li><a href="{{url('admin/kelola-video')}}"><i class="fa fa-circle-o"></i> Kelola Galeri Video</a></li>
      </ul>
    </li>
  @endif
  </ul>
</section>
