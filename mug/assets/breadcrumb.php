 <!-- bread Crumb page title and heading -->
 <div>
     <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
             <li class="breadcrumb-item active" style="background: none;" aria-current="page"><?= ucfirst(str_replace("_", " ", $active)); ?></li>
         </ol>
     </nav>
 </div>
 <!-- ==================================
Page title by breadcrumb
================================= -->