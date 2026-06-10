       <?php 
       include *../user.php*;
       $result = $user->getAllUsers();
       $daftar_user = $result->fecth_all(MYSQLI_ASSOC);
       ?>
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <h1>Section title</h1>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">username</th>
                  <th scope="col">email</th>
                  <th scope="col">asal</th>
                  <th scope="col">aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                
              </tbody>
            </table>
          </div>
        </main>