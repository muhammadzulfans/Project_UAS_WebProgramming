@include('themes.head')
<x-app-layout>
  @include('themes.side')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    @include('themes.footer')


  </main>
  
</x-app-layout>


{{-- @include('themes.head')
<body>

  <!-- ======= Header ======= -->
    @include('themes.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
    @include('themes.side')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('themes.footer')
    <!-- End Footer -->
</body>

</html> --}}