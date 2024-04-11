    <header>
      <div class="menu">
        <a href="index.php">
          <img class="imgmenu" src="img/Logo.png" alt="logo" />
        </a>

        <div class="pmenu">
          <p><a href="index.php" class="nav-link">Sobre nosotros</a></p>
          <p><a href="index.php" class="nav-link">Únete a nuestro club</a></p>
          <p><a href="index.php" class="nav-link">Contacto</a></p>

          <!-- Ja estas en membres. -->
          <p><a class="nav-link">Acceso a miembros</a></p>
          <div class="dropdown">
            <div class="profile-dropdown">
              <div onclick="toggle()" class="profile-dropdown-btn">
                <div class="profile-img">
                  <i class="fa-solid fa-circle"></i>
                </div>
                <i class="fa-solid fa-angle-down"></i>
                <span><?php echo $mNom; ?></span>
              </div>
              <div class="profile-dropdown-list">
                <div>
                  <p class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-regular fa-user"></i>
                      Edit Profile
                    </a>
                  </p>
                </div>
                <div>
                  <p class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-solid fa-sliders"></i>
                      Settings
                    </a>
                  </p>
                </div>
                <div>
                  <p class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-solid fa-arrow-right-from-bracket"></i>
                      Log out
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>


