@include('layouts.admin.head')

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   @include('layouts.admin.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
   @include('layouts.admin.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">แก้ไขหน้า Typeproduct</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">แก้ไขหน้า Typeproduct</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">แก้ไขหน้า Typeproduct</h6>
                </div>
                <div class="card-body">
                  <form action="{{ route('typeproduct.update', $type_product->id) }}" method="POST">
                        @csrf
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ชื่อเมนู</label>
                      <input type="text" class="form-control" name="type_product_name" value="{{ $type_product->name }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">                    
                    </div>
                    </div>
                 
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('typeproduct.index') }}" class="btn btn-primary">ย้อนกลับ</a>
                  </form>
                </div>
              </div>

           
              
            </div>

          
          </div>
         
          <!--Row-->

      
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
    @include('layouts.admin.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
</body>

</html>