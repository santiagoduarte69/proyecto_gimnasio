<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/indexCliente.css') }}">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class="fa-solid fa-dumbbell"></i>
      <span class="logo_name">WorldFitnessJS</span>
    </div>
    <ul class="nav-links">

      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>

        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>

      </li>

      <li>
        <div class="iocn-link">
          <a href="{{ Route('rutina.index') }}">
            <i class="fa-solid fa-users"></i>
            <span class="link_name">Rutina</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
      </li>



      <li>
        <div class="iocn-link">
          <a href="{{ Route('maquina.index') }}">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <span class="link_name">Maquinaria</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a href="#">Reportar</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class="fa-solid fa-circle-info"></i>
          <span class="link_name">Perfil</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/Perfil">Perfil</a></li>
        </ul>
      </li>

      <li>
        <div class="profile-details">
          <div class="profile-content">
          </div>
          <div class="name-job">
            <div class="profile_name">{{ auth()->user()->name }}</div>
            <div class="job">Cliente</div>
          </div>
          <a href="{{ route('login.destroy') }}"><i class='bx bx-log-out'></i></a>
        </div>
      </li>
    </ul>
  </div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Menu principal</span>
    </div>
    <main>

      <h1>Hola cliente, estas son tus acciones</h1>

      <div class="container__box">
        <div class="box">
          <a href="{{ route('rutina.index2') }}"><i class="lni lni-book"></i></a>
          <h5>Ver rutinas</h5>
          <h4>Rutinas</h4>
        </div>

        <div class="box">
          <a href="{{ route('reporte.index2') }}"><i class="lni lni-warning"></i></a>
          <h5>Reportar Maquina</h5>
          <h4>Reportar</h4>
        </div>
        <div class="box">
          <a href="{{ route('maquina.index2') }}"><i class="lni lni-eye"></i></a>
          <h5>ver Maquinas</h5>
          <h4>Maquinas</h4>
        </div>

        <div class="box">
          <a href="/Perfil"> <i class="fa-solid fa-circle-info"></i></a>
          <h5>Ver perfil</h5>
          <h4>Perfil </h4>
        </div>

      </div>

    </main>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>
</body>

</html>